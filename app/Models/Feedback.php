<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_feedback',
        'email_feedback',
        'ulasan_feedback',
        'saran_feedback',
        'bintang_feedback',
    ];
}