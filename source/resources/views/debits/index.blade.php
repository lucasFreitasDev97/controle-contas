<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{route('debits.create')}}">
                        <x-primary-button class="mb-4">
                            {{ __('+ Criar nova conta') }}
                        </x-primary-button>
                    </a>
                    <table class="min-w-full table-auto border-collapse border border-gray-300 dark:border-gray-600">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">ID</th>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">Nome</th>
                            <th class="px-1 py-2 border border-gray-300 dark:border-gray-600 text-left">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($debits as $debit)
                            <tr>
                                <td class="px-4 py-2 border border-gray-300 dark:border-gray-600"># {{$debit->getKey()}}</td>
                                <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">{{$debit->name}}</td>
                                <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">
                                    <a href="{{route('debits.edit', ['debit' => $debit->getKey()])}}">Editar | </a>
                                    <a href="#">Excluir</a>
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
