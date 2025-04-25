<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'; // nếu bạn dùng bảng 'products'

    protected $fillable = [
        'name',
        'image',
        'price',
        'quanity',
        'description',
    ];
}
