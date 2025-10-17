<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voter;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'studentid' => 'required|integer',
            'username' => 'required|string'
        ]);

        $voter = Voter::where('studentid', $request->studentid)
                     ->where('username', $request->username)
                     ->first();

        if ($voter) {
            session(['voter' => $voter->toArray()]);
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['login' => 'Invalid student ID or username.']);
    }

    public function logout()
    {
        session()->forget('voter');
        return redirect()->route('login');
    }

    public function showAdminLogin()
    {
        return view('auth.admin-login');
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'admin' => 'required|string',
            'password' => 'required|string'
        ]);

        // Using the same hardcoded credentials from your original code
        if ($request->admin === 'sharma' && $request->password === 'sushil') {
            session(['admin' => true]);
            return redirect()->route('admin.results');
        }

        return back()->withErrors(['login' => 'Invalid admin credentials.']);
    }

    public function adminLogout()
    {
        session()->forget('admin');
        return redirect()->route('dashboard');
    }
}
