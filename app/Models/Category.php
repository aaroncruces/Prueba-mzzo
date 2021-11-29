<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pokemon;
class Category extends Model
{
    use HasFactory;

    public function pokemon()
    {
        return $this->belongsToMany(Pokemon::class);
    }
}
