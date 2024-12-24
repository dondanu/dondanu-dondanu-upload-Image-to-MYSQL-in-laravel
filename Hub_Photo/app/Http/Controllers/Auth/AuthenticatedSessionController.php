<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // பயனரை உள்நுழைவதற்கான முயற்சி
        $request->authenticate();

        // சைட்டின் சவால்களை தவிர்க்க session ஐ regenerate செய்க
        $request->session()->regenerate();

        // வெற்றிகரமான உள்நுழைவு பிறகு /employee பக்கம் செல்லுங்கள்
        return redirect()->intended('/dashboard'); // /employee பக்கம் செல்லும்
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // பயனரை உள்நுழைவுகளை முடிக்கவும்
        Auth::guard('web')->logout();

        // session ஐinvalidate செய்யவும், regenerate செய்யவும்
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // முதன்மை பக்கம் அல்லது login பக்கம் செல்லவும்
        return redirect('/');
    }
}
