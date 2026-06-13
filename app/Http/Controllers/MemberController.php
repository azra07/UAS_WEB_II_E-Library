<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function index()
    {
        $members = User::where('role', 'user')->get();
        
        $totalMembers = $members->count();

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
}