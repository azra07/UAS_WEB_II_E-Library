<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
public function edit(Request $request): View
    {
        $user = $request->user();

        // Fetch Active Loans (Not yet returned)
        $activeLoans = \App\Models\Borrow::with(['details.book'])
            ->where('user_id', $user->id)
            ->whereNull('tanggal_kembali')
            ->latest('tanggal_pinjam')
            ->get();

        // Fetch Borrowing History (Already returned)
        $pastLoans = \App\Models\Borrow::with(['details.book'])
            ->where('user_id', $user->id)
            ->whereNotNull('tanggal_kembali')
            ->latest('tanggal_kembali')
            ->get();

        // Fetch user's favorite books (Top rated by this user)
        $favoriteBooks = \App\Models\Rating::with('book')
            ->where('user_id', $user->id)
            ->where('rating', '>=', 4)
            ->latest()
            ->take(5)
            ->get();

        // Point to your team's custom Profil blade file
        return view('User.Profil', compact('user', 'activeLoans', 'pastLoans', 'favoriteBooks'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function updateBasic(\Illuminate\Http\Request $request)
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        
        $request->validate([
            'name' => 'required|string|max:255',
            // Ignore the user's current email when checking for unique emails
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('success', 'Your personal details have been updated.');
    }
}
