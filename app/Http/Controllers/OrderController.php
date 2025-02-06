<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// model
use App\Models\OrdersModel;
use App\Models\CookieModel;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // $request->validate([
        //     'nasi' => 'required|string',
        //     'lauk' => 'required|string',
        // ]);

        $order = $request->input('nasi') . ', Isian: ' . implode(', ', $request->input('lauk'));
        $userID = CookieModel::getCookie('id');

        OrdersModel::create([
            'user_id' => $userID,
            'order' => $order,
            'status' => 'Waiting'
        ]);

        return redirect('/');
    }
}
