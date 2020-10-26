<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    public $table = 'roles';
    public $primarykey = 'id';

    protected $fillable = [
         'id','nama',
    ];

    public function users()
    {
        return $this->hasMany(Role::class);
    }

}
