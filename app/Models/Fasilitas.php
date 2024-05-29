<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $fillable = ['nama_fasilitas','image'];
    protected $visible = ['nama_fasilitas','image'];
    protected $table = 'fasilitass';
}
