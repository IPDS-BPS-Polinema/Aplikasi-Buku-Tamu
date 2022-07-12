<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkonomiPerdagangan extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "ekonomi_perdagangans";
    protected $fillable = ['jenis_ekonomiperdagangan'];
}
