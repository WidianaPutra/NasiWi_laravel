<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CookieModel;
class OrdersModel extends Model
{
    protected $table = 'orders';

    protected $fillable = ['user_id', 'order', 'status'];

    public static function getOrderBy($column, $operator, $data)
    {
        return self::where($column, $operator, $data)->get();
    }

    public static function getHistoryByUserId()
    {
        $userId = CookieModel::getCookie('id');
        return self::where('user_id', '=', $userId)
            ->where('status', '=', 'finish')->get();
    }
}
