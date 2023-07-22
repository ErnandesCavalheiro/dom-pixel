<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'quantity',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'quantity' => 'integer',
    ];

    public static $rules = [
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0.01',
        'quantity' => 'required|integer|min:0',
    ];
}
