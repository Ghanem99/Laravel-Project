<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snack extends Model
{
    use HasFactory;
    protected $table = 'snacks';
    protected $fillable = [
        'name',
        'photo',
        'description',
        'facts',
        
    ];
}
