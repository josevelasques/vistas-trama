<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'code',
        'name',
        'description',
        'price',
        'added_percentage',
        'sale_price',
        'stock',
        'minimum_stock',
        'presentation',
        'brand_id',
        'supplier_id',
        'image',
        'status',
    ];
}
