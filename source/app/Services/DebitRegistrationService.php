<?php

namespace App\Services;

use App\Models\Debit;
use App\Models\DebitRegistration;
use App\Models\DebitRegistrationFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
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
        DB::beginTransaction();
        try {
            $data['debit_value'] = str_replace(',', '.', $data['debit_value']);

            $debitRegistration = new DebitRegistration();
            $debitRegistration->debit_id = $data['debit_id'];
            $debitRegistration->year = $data['year'];
            $debitRegistration->month = $data['month'];
            $debitRegistration->debit_value = $data['debit_value'];
            $debitRegistration->due_date = $data['due_date'];
            $debitRegistration->status = $data['status'];
            $debitRegistration->payment_date = $data['payment_date'];
            $debitRegistration->save();

            $pathToDebitFile = $data['path_to_debit_file']->store('debits-files', 'public');
            $pathToPaymentProofFile = $data['path_to_payment_proof_file']->store('debits-payment-proof-files', 'public');

            $debitRegistrationFile = new DebitRegistrationFile();
            $debitRegistrationFile->debit_registration_id = $debitRegistration->getKey();
            $debitRegistrationFile->path_to_debit_file = $pathToDebitFile;
            $debitRegistrationFile->path_to_payment_proof_file = $pathToPaymentProofFile;
            $debitRegistrationFile->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
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
