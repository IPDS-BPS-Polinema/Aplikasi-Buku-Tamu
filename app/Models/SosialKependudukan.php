<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SosialKependudukan extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "sosial_kependudukans";
    protected $fillable = ['jenis_sosialkependudukan'];
}
