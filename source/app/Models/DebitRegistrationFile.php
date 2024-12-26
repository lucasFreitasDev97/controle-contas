<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class DebitRegistrationFile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['debit_registration_id', 'path_to_debit_file', 'path_to_payment_proof_file'];

    public function debitRegistration(): BelongsTo
    {
        return $this->belongsTo(DebitRegistration::class, 'debit_registration_id');
    }
}
