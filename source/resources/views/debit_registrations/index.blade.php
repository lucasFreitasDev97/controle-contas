<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registros de Contas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{route('debit-registrations.create')}}">
                        <x-primary-button class="mb-4">
                            {{ __('+ Criar novo registro de conta') }}
                        </x-primary-button>
                    </a>
                </div>
                <form action="">
                    @csrf
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <label for="select-options" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Conta
                        </label>
                        <select id="select-options" name="options" class="mt-2 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="all">Todas</option>
                            @foreach($debits as $debit)
                                <option value="{{$debit->getKey()}}">{{$debit->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <x-primary-button class="ms-7 mb-4">
                        {{ __('Exibir') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <span><strong>Todas</strong></span>
                    </div>
                    <br>
                    <table class="min-w-full table-auto border-collapse border border-gray-300 dark:border-gray-600">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">ID</th>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">Conta</th>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">Ano</th>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">Mês</th>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">Valor</th>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">Data de Vencimento</th>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">Status</th>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">Dia / Hora do Pagamento</th>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($debitRegistrations as $debitRegistration)
                            <tr>
                                <td class="px-4 py-2 border border-gray-300 dark:border-gray-600"># {{$debitRegistration->getKey()}}</td>
                                <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">{{\App\Models\Debit::where('id', $debitRegistration->debit_id)->first()->name}}</td>
                                <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">{{$debitRegistration->year}}</td>
                                <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">{{$months[$debitRegistration->month]}}</td>
                                <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">R$ {{str_replace('.', ',', $debitRegistration->debit_value)}}</td>
                                <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">{{$debitRegistration->due_date->format('d/m/Y')}}</td>
                                <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">{{$debitRegistration->status}}</td>
                                <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">{{$debitRegistration->payment_date->format('d/m/Y')}}</td>
                                <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">
                                    <a href="{{route('debit-registrations.edit', ['debitRegistration' => $debitRegistration->getKey()])}}">Editar | </a>
                                    <a href="#">Visualizar | </a>
                                    <a href="#">Excluir | </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
