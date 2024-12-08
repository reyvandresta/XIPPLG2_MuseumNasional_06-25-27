<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualTour extends Model
{
    use HasFactory;
   
   protected $fillable = ['title', 'picture', 'link'];
}