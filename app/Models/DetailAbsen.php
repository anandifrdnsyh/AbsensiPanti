<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailAbsen extends Model
{
    public $table = 'detail_absens';
    public $timestamps = false;
    // protected $jam_keluar = null;

    protected $fillable = [
        'user_id', 'absen_id', 'jam_masuk', 'jam_keluar',
    ];

    public function absen()
    {
        return $this->hasOne(Absen::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
