<?php

namespace App\Services;

use App\Models\Debit;
use App\Models\DebitRegistration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Collection;

class DebitRegistrationService
{
    public function getAllDebits(): Collection
    {
        return Debit::all();
    }

    public function getMonths(): array
    {
        return [
            1 => 'Janeiro',
            2 => 'Fevereiro',
            3 => 'Março',
            4 => 'Abril',
            5 => 'Maio',
            6 => 'Junho',
            7 => 'Julho',
            8 => 'Agosto',
            9 => 'Setembro',
            10 => 'Outubro',
            11 => 'Novembro',
            12 => 'Dezembro',
        ];
    }

    public function save(array $data): void
    {
        $debit = new Debit();
        $debit->name = $data['name'];
        $debit->save();
    }

    public function update(Debit $debit, array $data): void
    {
        $debit->update($data);
    }

    public function destroy(Debit $debit): void
    {
        $debit->delete();
    }
}
