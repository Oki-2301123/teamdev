<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feelings extends Model
{
    use HasFactory;

    const CREATED_AT = NULL;
    const UPDATED_AT = NULL;


    protected $fillable= [
        'feeling_name'
    ];
}
