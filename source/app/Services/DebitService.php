<?php

namespace App\Services;

use App\Models\Debit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Collection;

class DebitService
{
    public function getAllDebits(): Collection
    {
        return Debit::all();
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
