
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight my-4">
           Liste des commandes

        </h2>
        <a class="text-white bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-4" href="{{ route('commandes.create') }}">Ajouter commandes</a>
        
    </x-slot>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">


<ul>
@foreach($Commandes as $Commande)
    <li>
       <p class="text-gray-800 dark:text-gray-200">{{ $Commande->name }}</p> 
       <div class="flex space-x-2">
         <a class="text-white bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-4" href="{{ route('commandes.edit', $Commande->id) }}">Edit</a>
        <form action="{{ route('commandes.destroy', $Commande->id) }}" method="POST" style="display:inline">
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
