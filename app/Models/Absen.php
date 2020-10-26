<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Absen extends Model
{
    public $table = 'absens';

    public $primarykey = 'id';

    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
    public $timestamps = false;

    public function setUpdatedAt($value)
    {
        return $this;
    }

    protected $fillable = [
        'id', 'user_id', 'status_absen_id', 'tanggal',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function detailabsen()
    {
        return $this->belongsTo(DetailAbsen::class);
    }

    // public static function getAbsen()
    // {
    //     $absens = DB::table('users')
    //     ->join('absens', 'absens.user_id', '=', 'users.id')
    //     ->join('detail_absens', 'detail_absens.absen_id', '=', 'absens.id')
    //     ->latest()
    //     ->get()->toArray();

    //     return $absens;
    // }

}
