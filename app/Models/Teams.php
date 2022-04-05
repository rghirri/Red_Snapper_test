<?php

namespace App\Models;
use App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

}