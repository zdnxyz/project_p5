<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;
    protected $fillable = ['eskul','deskripsi','image'];
    protected $visible = ['eskul','deskripsi','image'];
}
