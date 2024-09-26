<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoriaConta extends Model
{
    use HasFactory;

    protected $table = 'categorias_contas';

    protected $fillable = ['nome'];

    public function contas(): HasMany
    {
        return $this->hasMany(Conta::class, 'categoria_id', 'id');
    }
}
