<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table='obat';
    protected $primaryKey='id_obat';
    protected $fillable=['nama_obat','tanggal_kadaluarsa'];
}
