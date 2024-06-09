<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Janji extends Model
{
    use HasFactory;

    protected $table = 'janji';
    protected $fillable = ['jadwal', 'dokter_id', 'pasien_id']; // Kolom yang dapat diisi
}
