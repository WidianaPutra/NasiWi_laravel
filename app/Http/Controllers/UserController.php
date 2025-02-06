<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\CookieModel;

class UserController extends Controller
{
    public function store(Request $request)
    {
        //
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'class' => 'required|string'
        ]);

        $email = UsersModel::where('email', '=', $request->input('email'))->get();
        $username = UsersModel::where('username', '=', $request->input('username'))->get();

        if (count($username) > 0) {
            return redirect('/register')->with('error', 'Uesrname has already exist');
        }

        if (count($email) > 0) {
            return redirect('/register')->with('error', 'Email has already exist');
        }

        $data = UsersModel::createUser([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'class' => $request->input('class')
        ]);

        if (!$data) {
            return redirect('/register')->with('error', 'field to register');
        }

        CookieModel::setUserCookie($data['id'], $data['username'], $data['email']);

        if (!CookieModel::CheckCookie()) {
            return redirect('/register')->with('error', 'field to register');
        }

        return redirect('/');
    }
    public function signin(Request $request)
    {
        $request->validate([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ]);

        $data = UsersModel::where('username', '=', $request->input('username'))
            ->orWhere('email', '=', $request->input('email'));

        if (!$data) {
            return redirect('/signin')->with('error', 'Account not found');
        }

        CookieModel::setUserCookie($data['id'], $data['username'], $data['email']);

        if (!CookieModel::CheckCookie()) {
            return redirect('/register')->with('error', 'field to register');
        }

        return redirect('/');
    }
}
