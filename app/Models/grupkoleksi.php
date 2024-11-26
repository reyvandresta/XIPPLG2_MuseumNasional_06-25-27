<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class grupkoleksi extends Model
{
    use HasFactory;
   
   protected $fillable = ['nama', 'grup'];
}
