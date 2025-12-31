<x-app-layout>

<x-slot name="header">
    <h2 class="text-2xl font-bold text-gray-900 ">
        Tableau de bord
    </h2>
</x-slot>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">

    <!-- Produits -->
    <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="text-gray-500">Produits</h3>
        <p class="text-3xl font-bold text-blue-600">{{ $productsCount }}</p>
    </div>

    <!-- Categories -->
    <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="text-gray-500">Catégories</h3>
        <p class="text-3xl font-bold text-green-600">{{ $categoriesCount }}</p>
    </div>

    <!-- Clients -->
    <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="text-gray-500">Clients</h3>
        <p class="text-3xl font-bold text-purple-600">{{ $clientsCount }}</p>
    </div>

</div>

<!-- Derniers produits -->
<div class="bg-white mt-10 p-6 rounded-xl shadow">
    <h3 class="text-xl font-bold mb-4">Derniers produits</h3>

    <table class="w-full border ">
        <thead class="bg-blue-100">
            <tr>
                <th class="border px-4 py-2">Nom</th>
                <th class="border px-4 py-2">Prix</th>
                <th class="border px-4 py-2">Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($latestProducts as $produit)
                <tr>
                    <td class="border px-4 py-2">{{ $produit->name }}</td>
                    <td class="border px-4 py-2">{{ $produit->price }} DH</td>
                    <td class="border px-4 py-2">{{ $produit->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-app-layout>
