<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertanianPertambangan extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "pertanian_pertambangans";
    protected $fillable = ['jenis_pertanianpertambangan'];
}
