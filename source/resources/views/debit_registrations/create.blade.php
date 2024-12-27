<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Criar novo registro de conta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('debits.store') }}" method="post">
                        @csrf
                        <div class="flex flex-wrap gap-4">
                            <!-- Select Field -->
                            <div class="flex-1">
                                <label for="select-options" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Conta
                                </label>
                                <select id="select-options" name="debit_id"
                                        class="mt-2 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:border-indigo-500 focus:ring-indigo-500">
                                    @foreach($debits as $debit)
                                        <option value="{{ $debit->getKey() }}">{{ $debit->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Input Field -->
                            <div class="flex-1">
                                <x-input-label for="year" :value="__('Ano')" />
                                <x-text-input id="year" class="mt-2 block w-full" type="text" name="year" :value="old('year')" required autofocus />
                                <x-input-error :messages="$errors->get('year')" class="mt-2" />
                            </div>
                        </div>
                        <br>
                        <div class="flex flex-wrap gap-4">
                            <!-- Select Field -->
                            <div class="flex-1">
                                <label for="select-options" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Mês
                                </label>
                                <select id="select-options" name="month"
                                        class="mt-2 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:border-indigo-500 focus:ring-indigo-500">
                                    @foreach($months as $month)
                                        <option value="{{ $month }}">{{ $month }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Input Field -->
                            <div class="flex-1">
                                <x-input-label for="debit_value" :value="__('Valor')" />
                                <x-text-input id="debit_value" class="mt-2 block w-full" type="text" name="debit_value" :value="old('debit_value')" required autofocus />
                                <x-input-error :messages="$errors->get('debit_value')" class="mt-2" />
                            </div>
                        </div>
                        <br>
                        <div class="flex flex-wrap gap-4">
                            <!-- Input Field -->
                            <div class="flex-1">
                                <x-input-label for="due_date" :value="__('Data de Vencimento')" />
                                <x-text-input id="due_date" class="mt-2 block w-full" type="date" name="due_date" :value="old('due_date')" required autofocus />
                                <x-input-error :messages="$errors->get('due_date')" class="mt-2" />
                            </div>

                            <!-- Select Field -->
                            <div class="flex-1">
                                <label for="select-options" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Status
                                </label>
                                <select id="select-options" name="status"
                                        class="mt-2 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="pending">Pendente</option>
                                    <option value="payment_completed">Paga</option>
                                    <option value="late">Atrasada</option>
                                </select>
                            </div>

                            <!-- Input Field -->
                            <div class="flex-1">
                                <x-input-label for="payment_date" :value="__('Data de Pagamento')" />
                                <x-text-input id="payment_date" class="mt-2 block w-full" type="date" name="payment_date" :value="old('payment_date')" required autofocus />
                                <x-input-error :messages="$errors->get('payment_date')" class="mt-2" />
                            </div>
                        </div>
                        <br>
                        <div class="flex flex-wrap gap-4">
                            <!-- Input Field -->
                            <div class="flex-1">
                                <x-input-label for="path_to_debit_file" :value="__('Documento')" />
                                <x-text-input id="path_to_debit_file" class="mt-2 block w-full" type="file" name="path_to_debit_file" :value="old('path_to_debit_file')" required autofocus />
                                <x-input-error :messages="$errors->get('path_to_debit_file')" class="mt-2" />
                            </div>

                            <!-- Input Field -->
                            <div class="flex-1">
                                <x-input-label for="path_to_payment_proof_file" :value="__('Comprovante de Pagamento')" />
                                <x-text-input id="path_to_payment_proof_file" class="mt-2 block w-full" type="file" name="path_to_payment_proof_file" :value="old('path_to_payment_proof_file')" required autofocus />
                                <x-input-error :messages="$errors->get('path_to_payment_proof_file')" class="mt-2" />
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="mt-4">
                            <x-primary-button>
                                {{ __('Salvar') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

