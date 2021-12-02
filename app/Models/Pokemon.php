<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ability;

class Pokemon extends Model
{
    use HasFactory;
    public function abilities()
    {
        return $this->belongsToMany(Ability::class);
    }
}
