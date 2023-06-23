<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('form.login', [
            'title' => 'Login',
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function register()
    {
        return view('form.register', [
            'title' => 'Register',
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function forgot_password()
    {
        return view('form.forgot-password', [
            'title' => 'Forgot Password',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function post_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login failed!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function post_register(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|string|confirmed', Password::min(6)->letters()->numbers()
        ]);
        
        $data = $request->all();
        $check = $this->create($data);

        return redirect("login")->withSuccess('Registration Successfully! Please login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function post_forgot_password()
    {
        //
    }

    /**
     * create a newly created resource in storage.
     */
    public function create(array $data)
    {
        return User::create([
            'first_name' => $data['firstName'],
            'last_name' => $data['lastName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
