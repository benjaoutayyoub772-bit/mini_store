<x-app-layout>
    {{-- @extends('layouts.app')
    @section('content') --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight my-4">
            Liste des produits
        </h2>
        <a class="text-white bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded my-4" href="{{ route('produits.create') }}">Ajouter un produit</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    @if($Produits->isEmpty())
                        <p class="text-gray-500">Aucun produit trouvé.</p>
                    @else
                        <table class="min-w-full table-auto border-collapse border border-gray-300">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2 text-left">Nom</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Description</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Prix</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Stock</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Produits as $index => $produit)
                                <tr class="{{ $index % 2 == 0 ? 'bg-gray-50' : 'bg-white' }} hover:bg-gray-100">
                                    <td class="border border-gray-300 px-6 py-3 text-blue-800 font-medium">{{ $produit->name }}</td>
                                    <td class="border border-gray-300 px-6 py-3 text-gray-600">{{ $produit->description ?? '-' }}</td>
                                    <td class="border border-gray-300 px-6 py-3 text-green-600 font-semibold">{{ number_format($produit->price, 2) }} €</td>
                                    <td class="border border-gray-300 px-6 py-3 text-blue-600">{{ $produit->stock }}</td>
                                    <td class="border border-gray-300 px-6 py-3">
                                        <a class="text-blue-500 hover:text-blue-700 mr-2 font-medium" href="{{ route('produits.edit', $produit->id) }}">Éditer</a>
                                        <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-500 hover:text-red-700 font-medium" onclick="return confirm('Supprimer ce produit ?')">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{-- @endsection --}}
</x-app-layout>