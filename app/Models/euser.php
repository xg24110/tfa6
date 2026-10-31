<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class euser extends Model
{
    protected $table = 'euser';
    protected $fillable = ['username', 'full_name'];
}
