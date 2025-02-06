<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\CookieModel;
use App\Models\ClasesModel;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        if (CookieModel::CheckCookie()) {
            return redirect('/');
        }
        $datas = ClasesModel::all()->toArray();
        return View('register', ['datas' => ['clases' => $datas]]);
    }
}