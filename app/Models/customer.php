<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
    protected $fillable = ['full_name', 'email', 'phone'];

}

