<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    //
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user',
        'no_tlp',
        'akun_bank'
    ];
}
