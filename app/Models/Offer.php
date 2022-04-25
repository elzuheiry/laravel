<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $table = "offers";

    protected $fillable = [
        'name',
        'excerpt',
        'details',
        'price',
        'file',
        'category_id',
        'user_id',
    ];

    protected $hidden = [
        'category_id',
        'user_id',
    ];
}