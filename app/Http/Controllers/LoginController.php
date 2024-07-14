<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ListerningDataController;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('/dashboard');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }

    public function logout(Request $request)
    {
        $controller = new ListerningDataController();
        $controller->stopQueueWorker($request);
        
        Auth::logout();
        return redirect('/login');
    }
}
