<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    // Menambahkan kolom yang dapat diisi secara massal
    protected $fillable = ['title', 'description', 'image_url'];
}