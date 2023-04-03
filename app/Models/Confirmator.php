<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confirmator extends Model
{
    use HasFactory;

    public $class;
    public $title;
    public $message;
    public $items = [];
}
