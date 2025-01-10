<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Log; 
class AuthController extends Controller 
{ 
    public function showLoginForm() 
    { 
        return view('auth.login');
    } 

    public function login(Request $request) 
    { 
        $credentials = $request->only('email', 'password'); 
        if (Auth::attempt($credentials)) { 
            $request->session()->regenerate();
            return redirect()->intended('home'); 
        } 
 
        Log::info('Login failed for user: ' . $request->email); 
        return back()->withErrors([ 
            'email' => __('auth.failed'), 
        ]); 
    } 
 
    public function logout(Request $request) 
    { 
        Auth::logout(); 
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 
 
        return redirect('/'); 
    } 
} 