<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    use HasFactory, SoftDeletes;

    // Add the fillable property
    protected $fillable = [
        'title',
        'description',
        'category',
        'image', // Include other fields you want to be mass assignable
    ];
}
