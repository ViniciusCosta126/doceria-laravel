<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Doce extends Model
{
    use HasFactory;



    public function categorias(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
}
