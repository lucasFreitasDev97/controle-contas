<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Conta extends Model
{
    use HasFactory;

    const PENDENTE = 'pendente';
    const PAGO = 'pago';
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(CategoriaConta::class, 'categoria_id');
    }
}
