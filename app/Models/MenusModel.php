<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenusModel extends Model
{
    protected $table = 'menus';
    protected $filable = ['menu', 'category'];
}
