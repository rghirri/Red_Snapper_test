<?php

namespace App\Models;
use App\Models\Teams;
use App\Models\Roles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    public function teams()
    {
        return $this->hasMany(Teams::class);
    }

    public function role()
    {
        return $this->hasOne(Roles::class);
    }

}