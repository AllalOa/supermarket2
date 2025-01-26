<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
<<<<<<< HEAD
use App\Models\User;
=======
 use App\Models\User;
 use Illuminate\Support\Facades\Hash;
>>>>>>> 8925a9c51e44c972c03cd92d6fa3b06a0c7a08d3

class AuthenticatedSessionController extends Controller
{


    /**
     * Display the login view.
     */
    public function create(): View
    {
/**
$user = User::find(1);  // Find the user whose password needs to be hashed
$user->password = Hash::make('Allal@668');  // Hash the password
$user->save(); */
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */






    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();


        $request->session()->regenerate();

        $authuserrole = Auth::user()->role;
        $user = Auth::user();
        $user->update(['status' => 1]);
        // Redirect to the appropriate dashboard based on user role
        if ($authuserrole == 0) {
            return redirect()->intended(route('supervisordash', absolute: false));
        } else {
            // Update the user's status to 1 in the database

            return redirect()->intended(route('cashierdash', absolute: false));
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $user = Auth::user();
        $user->update(['status' => 0]);
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        return redirect('/');
    }

    public function showCards()
{
    // Fetch all users with role = 1
    $users = User::where('role', 1)->get();

    // Pass the users to the view
    return view('supervisordash', compact('users'));
}
}
