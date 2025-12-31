
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight my-4">
           Liste des clients

        </h2>
        <a class="text-white bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-4" href="{{ route('clients.create') }}">Ajouter clients</a>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">


<ul>
@foreach($Clients as $Client)
    <li>
       <p class="text-gray-800 dark:text-gray-200">{{ $Client->name }}</p> 
       <div class="flex space-x-2">
         <a class="text-white bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-4" href="{{ route('clients.edit', $Client->id) }}">Edit</a>
        <form action="{{ route('clients.destroy', $Client->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button class="text-white bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded my-4">Supprimer</button>
        </form>
       </div>
    </li>
@endforeach
</ul>
            </div>
        </div>
    </div>
</x-app-layout>
