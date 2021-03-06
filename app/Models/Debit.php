<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debit extends Model
{
    use HasFactory;

    protected $table = 'debit';

    protected $fillable = [
        'tgl',
        'nama_debit',
        'debit_by', 
        'user',
        'total',
        'keterangan'
    ];
}
