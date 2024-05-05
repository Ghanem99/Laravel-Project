<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    protected $table = 'exercises';

    protected $fillable = [
        'exercise_id',
        'vedio_link',
        'title',
        'discription'];
}