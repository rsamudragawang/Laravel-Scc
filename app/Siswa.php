<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $fillable = [
        'nama', 'kelas', 'no_absen',
    ];
}
