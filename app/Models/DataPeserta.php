<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPeserta extends Model
{
    protected $table = 'data_peserta';

    protected $fillable = [
        'nim',
        'nama',
        'kelompok',
        'day_1',
        'day_2',
        'day_3',
        'day_4',
        'day_5',
        'day_6',
        'day_7',
        'day_8',
    ];
}
