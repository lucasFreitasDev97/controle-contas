<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contas') }}
        </h2>
    </x-slot>
    @if (session('success'))
        <div class="fixed top-0 left-0 w-full flex justify-center mt-4">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative max-w-md w-full mx-auto shadow-lg" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
                <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.remove();">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M14.348 14.849a1 1 0 01-1.415 0L10 11.415 7.067 14.35a1 1 0 01-1.414-1.415L8.586 10 5.653 7.067a1 1 0 011.415-1.414L10 8.586l2.933-2.933a1 1 0 011.414 1.415L11.415 10l2.933 2.933a1 1 0 010 1.415z"/>
                    </svg>
                </button>
            </div>
        </div>
    @endif

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
                                    <a onclick="alert('Tem certeza que deseja remover esse registro?')" href="{{route('debits.destroy', ['debit' => $debit->getKey()])}}">Excluir</a>
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
