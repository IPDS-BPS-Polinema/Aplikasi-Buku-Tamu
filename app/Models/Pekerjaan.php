<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "pekerjaans";
    protected $fillable = ['jenis_pekerjaan'];
}
