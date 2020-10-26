<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public $table = 'users';

    public $primarykey = 'id';

    protected $fillable = [
       'id', 'role_id','qrcode','kode', 'nama', 'email', 'alamat','telphon','password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function absen()
    {
        return $this->hasMany(Absen::class);
    }

    public function detailabsen()
    {
        return $this->hasMany(DetailAbsen::class);
    }

}
