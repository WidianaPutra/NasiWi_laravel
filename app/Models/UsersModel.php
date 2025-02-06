<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    //
    protected $table = 'users';
    protected $fillable = ['username', 'email', 'password', 'class', 'profile'];
    protected $hidden = ['password'];

    public static function getUserBy($column, $op, $value)
    {
        $data = self::where($column, $op, $value)->get();
        if (empty($data[0])) {
            return [
                'error' => 'Data not found'
            ];
        }
        return $data;
    }
    public static function updateUserData($column, $op, $value, $data)
    {
        $data = self::where($column, $op, $value)->update($data);
        if (!$data) {
            return [];
        }
        return self::where($column, $op, $value)->get();
    }
    public static function deleteUser($column, $op, $value)
    {
        $data = self::where($column, $op, $value)->delete();
        if (!$data) {
            return [];
        }
        return $data;
    }
    public static function createUser($data = [])
    {
        return self::create($data);
    }
}
