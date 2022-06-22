<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Session;

class Auth extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('login', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Register'
        ];
        return view('register', $data);
    }
    public function actionLogin(Request $request)
    {
        $valid = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($valid) {
            $email = $request->input('email');
            $password = $request->input('password');
            $user = Login::where('email', $email)->first();
            if ($user) {
                if ($user->password == $password) {
                    Session::put('user', $user);
                    return redirect()->to('/login')->with('success', 'Welcome back, ' . $user->nama . '');
                } else {
                    return redirect('/login')->with('error', 'Password is incorrect');
                }
            } else {
                return redirect('/login')->with('error', 'Email is not registered');
            }
        } else {
            return redirect('/login', $valid);
        }
    }
    public function actionRegister(Request $request)
    {
        $valid = $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'password' => 'required|confirmed|min:6'
        ]);
        if ($valid) {
            $nama = $request->input('nama');
            $email = $request->input('email');
            $alamat = $request->input('alamat');
            $password = $request->input('password');

            $user = new Login();
            $user->nama = $nama;
            $user->alamat = $alamat;
            $user->email = $email;
            $user->password = $password;
            $user->save();
            return redirect('/login')->with('registered', 'Register success, Now you can Sign in');
        } else {
            return redirect('/register', $valid);
        }
    }
}
