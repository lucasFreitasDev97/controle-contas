<?php

namespace App\Http\Controllers;

use App\Models\Debit;
use App\Services\DebitService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DebitController extends Controller
{
    protected DebitService $debitService;

    public function __construct(DebitService $debitService)
    {
        $this->debitService = $debitService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $debits = $this->debitService->getAllDebits();

        return view('debits.index', ['debits' => $debits]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return \view('debits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        $this->debitService->save($data);

        return redirect(route('debits.index'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Debit $debit): View
    {
        return \view('debits.edit', ['debit' => $debit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Debit $debit): RedirectResponse
    {
        $data = $request->all();
        $this->debitService->update($debit, $data);

        return redirect(route('debits.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Debit $debit): RedirectResponse
    {
        $this->debitService->destroy($debit);

        return redirect(route('debits.index'));
    }
}
