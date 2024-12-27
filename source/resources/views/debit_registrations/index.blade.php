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
                    <label for="select-options" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Escolha uma opção
                    </label>
                    <select id="select-options" name="options" class="mt-2 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="opcao1">Opção 1</option>
                        <option value="opcao2">Opção 2</option>
                        <option value="opcao3">Opção 3</option>
                        <option value="opcao4">Opção 4</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full table-auto border-collapse border border-gray-300 dark:border-gray-600">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">Ano</th>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">Mês</th>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">Valor</th>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">Data de Vencimento</th>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">Status</th>
                            <th class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-left">Dia / Hora do Pagamento</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">2024</td>
                            <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">Dezembro</td>
                            <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">R$ 55,40</td>
                            <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">02/01/2025</td>
                            <td class="px-4 py-2 border border-gray-300 dark:border-gray-600">Pendente</td>
                            <td class="px-4 py-2 border border-gray-300 dark:border-gray-600"></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
