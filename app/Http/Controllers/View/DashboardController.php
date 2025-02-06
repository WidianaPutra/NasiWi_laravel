<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\CookieModel;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class DashboardController extends Controller
{
    public function index(Request $requst)
    {
        if (CookieModel::CheckCookie()) {
            return view('dashboard', ['query' => $requst->query('page')]);
        }
        return redirect('/signin');
    }
}
