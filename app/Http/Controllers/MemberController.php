<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
public function index(Request $request)
    {
        // 1. Start the query for Users who are 'user' role
        $query = User::where('role', 'user')->latest();

        // 2. SEARCH LOGIC (Name, Email, or Member ID)
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                // Search by Member ID (removes 'MEM-' if typed)
                $cleanId = ltrim(str_replace('MEM-', '', strtoupper($search)), '0');
                if (is_numeric($cleanId)) {
                    $q->where('id', $cleanId);
                }

                // Search by Name or Email
                $q->orWhere('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }


        // 3. Paginate results
        $members = $query->paginate(10)->withQueryString();
        
        // 4. Calculate Stats
        $totalMembers = User::where('role', 'user')->count();
        $newThisMonth = User::where('role', 'user')
                            ->whereMonth('created_at', now()->month)
                            ->whereYear('created_at', now()->year)
                            ->count();
        $activeToday = User::where('role', 'user')
                           ->whereDate('created_at', today())
                           ->count();

        return view('admin.members', compact('members', 'totalMembers', 'newThisMonth', 'activeToday'));
    }
    public function create()
    {
        return view('admin.members.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']), 
            'role' => 'user'
        ]);

        return redirect()->route('members.index')->with('success', 'New member successfully registered.');
    }

    public function edit($id)
    {
        $member = User::findOrFail($id);
        return view('admin.members.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = User::findOrFail($id);
        
        // Validate the incoming data. Notice we tell it to ignore the CURRENT user's email for the unique check!
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $member->id,
            'password' => 'nullable|string|min:8', // Password is optional when editing
        ]);

        $member->name = $validated['name'];
        $member->email = $validated['email'];
        
        // Only hash and update the password if the admin actually typed a new one
        if ($request->filled('password')) {
            $member->password = Hash::make($validated['password']);
        }
        
        $member->save();

        return redirect()->route('members.index')->with('success', 'Member details updated successfully.');
    }

    public function destroy($id)
    {
        $member = User::findOrFail($id);
        $member->delete();

        return redirect()->route('members.index')->with('success', 'Member account deleted successfully.');
    }
}