<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        Log::info('Attempting login for user: ', ['username' => $credentials['username']]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            Log::info('Login successful for user: ', ['username' => $credentials['username']]);
            return response()->json(['success' => true, 'message' => 'Login successful.', 'redirect' => '/home']);
        }

        Log::warning('Login failed for user: ', ['username' => $credentials['username']]);
        return response()->json(['success' => false, 'message' => 'Login failed.']);
    }

    public function register(Request $request)
    {
        // Correct validation with array of rules
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);

        // Continue with user creation and authentication
        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        // Redirect to home
        return response()->json(['success' => true, 'message' => 'Register successful.', 'redirect' => '/home']);
    }
}
