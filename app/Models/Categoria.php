<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Categoria extends Model
{
    use HasFactory;


    public function doces(): HasMany
    {
        return $this->hasMany(Doce::class);
    }
}
