<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Debit extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function debitRegistrations(): HasMany
    {
        return $this->hasMany(DebitRegistration::class, 'debit_id');
    }
}
