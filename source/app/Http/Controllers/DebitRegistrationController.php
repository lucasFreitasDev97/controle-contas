<?php

namespace App\Http\Controllers;

use App\Services\DebitRegistrationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DebitRegistrationController extends Controller
{
    protected DebitRegistrationService $debitRegistrationService;

    public function __construct(DebitRegistrationService $debitRegistrationService)
    {
        $this->debitRegistrationService = $debitRegistrationService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $debits = $this->debitRegistrationService->getAllDebits();

        return view('debit_registrations.index', [
            'debits' => $debits,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $debits = $this->debitRegistrationService->getAllDebits();
        $months = $this->debitRegistrationService->getMonths();

        return \view('debit_registrations.create', [
            'debits' => $debits,
            'months' => $months,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();

        $this->debitRegistrationService->save($data);

        session()->flash('success', 'Registro de conta salva com sucesso!');
        return redirect(route('debit-registrations.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
