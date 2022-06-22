<?php

namespace App\Http\Controllers;

use Illuminate\Cookie\CookieJar;
use Cookie;

class Auth extends Controller
{
    protected $cookieJar;

    public function __construct(CookieJar $cookieJar)
    {
        $this->cookieJar = $cookieJar;
    }

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
    public function actionLogin()
    {
        $data = [
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        ];
        $user = $this->model->where('email', $data['email'])->first();
        if ($user) {
            if ($user->password == $data['password']) {
                $this->session->set('user', $user);
                return redirect()->to('/dashboard');
            } else {
                return redirect()->to('/login')->with('error', 'Password salah');
            }
        } else {
            return redirect()->to('/login')->with('error', 'Email tidak ditemukan');
        }
    }
}
