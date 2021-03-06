<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';

    protected $fillable = [
        'tanggal',
        'id_supervisor',
        'jam_mulai',
        'jam_selesai',
        'nip',
    ];

}
