<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class DebitRegistration extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['debit_id', 'year', 'month', 'debit_value', 'due_date', 'status', 'payment_date'];

    protected $casts = [
        'due_date' => 'date',
        'payment_date' => 'datetime',
    ];

    public function debit():BelongsTo
    {
        return $this->belongsTo(Debit::class, 'debit_id');
    }

    public function debitRegistrationFiles(): HasOne
    {
        return $this->hasOne(DebitRegistrationFile::class, 'debit_registration_id');
    }
}
