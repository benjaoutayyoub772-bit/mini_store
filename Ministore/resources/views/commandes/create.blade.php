<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- PAGE CONTENT -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 shadow-sm sm:rounded-lg">

                <h1 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">
                    Ajouter une commande
                </h1>

                <form action="{{ route('commandes.store') }}" method="POST">
                    @csrf
                    <label for="client_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Client :</label>
                    <input
                        type="text"
                        name="client_id"
                        class="border rounded p-2 w-full mb-3"
                        placeholder="Nom de la commande"
                    >

                    <button
                        type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    >
                        Ajouter
                    </button>
                </form>

            </div>
        </div>
    </div>

</x-app-layout>
