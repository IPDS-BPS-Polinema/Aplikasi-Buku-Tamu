<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;
    protected $table = "pengunjungs";
    protected $fillable = ['nama','tlp','email','alamat','id_pendidikan','id_pekerjaan','id_mediapelayanan','id_jenispelayanan','id_sospen','id_ekopangan','id_pertama'];

    public function jpendidikan() {
        return $this->belongsTo(Pendidikan::class, 'id_pendidikan');
    }

    public function jpekerjaan() {
        return $this->belongsTo(Pekerjaan::class, 'id_pekerjaan');
    }

    public function jmediapelayanan() {
        return $this->belongsTo(MediaPelayanan::class, 'id_mediapelayanan');
    }

    public function jenispelayanan() {
        return $this->belongsTo(JenisLayanan::class, 'id_jenispelayanan');
    }

    public function jsospen() {
        return $this->belongsTo(SosialKependudukan::class, 'id_sospen');
    }

    public function jekopangan() {
        return $this->belongsTo(EkonomiPerdagangan::class, 'id_ekopangan');
    }

    public function jpertama() {
        return $this->belongsTo(PertanianPertambangan::class, 'id_pertama');
    }

}
