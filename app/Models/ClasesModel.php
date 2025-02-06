<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClasesModel extends Model
{
    protected $table = 'clases';
    protected $fillable = ['class_name'];

    public static function getClassBy($column, $operator, $data)
    {
        $data = self::where($column, $operator, $data)->get();
        if (!$data) {
            return null;
        }
        return $data;
    }

    public static function createClass($data)
    {
        self::create($data);
        $data = self::where('class_name', '=', $data['class_name'])->get();
        if (!$data) {
            return with('error', 'Data not uploaded');
        }
        return $data;
    }
}
