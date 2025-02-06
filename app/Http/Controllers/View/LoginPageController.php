<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\CookieModel;
use Illuminate\Http\Request;

class LoginPageController extends Controller
{
    public function index()
    {
        if (CookieModel::CheckCookie()) {
            return redirect('/');
        }
        return View('login');
    }
}
