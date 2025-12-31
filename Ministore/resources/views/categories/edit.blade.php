{{-- <h1>Modifier la catégorie</h1> --}}

{{-- <form action="{{ route('categories.update', $categories->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $categories->name }}">
    <button>Mettre à jour</button>
</form> --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
               <form action="{{ route('categories.update', $categories->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-4">
 <input  class="border border-gray-300 rounded px-3 py-2" type="text" name="name" value="{{ $categories->name }}">
    </div>
   
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">update</button>
</form>
            </div>
        </div>
    </div>
</x-app-layout>
