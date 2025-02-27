@extends('layouts.Adminmain')
@section('content')
<main class="flex-1 p-6">
    <h1 class="text-2xl font-bold border-b-2 border-black pb-2">TRANSAKSI</h1>
    <div class="flex justify-between">
        <button class="bg-green-500 text-white px-4 py-2 rounded mt-2">Input Data</button>
        <div class="flex items-center space-x-2">
            <input type="text" placeholder="Cari nama..." class="h-10 w-[300px] px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            <button class="w-28 h-10 px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                search
            </button>
        </div>
    </div>

    <!-- Table -->
    <div class="mt-4">
        <table class="w-full border-collapse border text-center border-gray-300">
            <thead>
                <tr class="border-b-2 border-black text-black">
                    <th class="p-2">Nama</th>
                    <th class="p-2">Pengelola</th>
                    <th class="p-2">Mustahik</th>
                    <th class="p-2">Zakat</th>
                    <th class="p-2">Tanggal</th>
                    <th class="p-2">Status</th>
                    <th class="p-2">Details</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-200">
                    <td class="p-2">Andry</td>
                    <td class="p-2">Candimadam</td>
                    <td class="p-2">Risky</td>
                    <td class="p-2">Rp.2.000.000</td>
                    <td class="p-2">03-02-2025</td>
                    <td class="p-2 text-red-500">FAILED</td>
                    <td class="p-2"><a href="/Transaksi"><button class="bg-blue-600 text-white px-4 py-1 rounded">Details</button></a></td>
                </tr>
                <tr class="bg-white">
                    <td class="p-2">Andry</td>
                    <td class="p-2">Candimadam</td>
                    <td class="p-2">Risky</td>
                    <td class="p-2">Rp.2.000.000</td>
                    <td class="p-2">03-02-2025</td>
                    <td class="p-2 text-green-500">SUCCESS</td>
                    <td class="p-2"><button class="bg-blue-600 text-white px-4 py-1 rounded">Details</button></td>
                </tr>
                <tr class="bg-gray-200">
                    <td class="p-2">Andry</td>
                    <td class="p-2">Candimadam</td>
                    <td class="p-2">Risky</td>
                    <td class="p-2">Rp.2.000.000</td>
                    <td class="p-2">03-02-2025</td>
                    <td class="p-2 text-yellow-500">PENDING</td>
                    <td class="p-2"><button class="bg-blue-600 text-white px-4 py-1 rounded">Details</button></td>
                </tr>
                <tr class="bg-white">
                    <td class="p-2">Andry</td>
                    <td class="p-2">Candimadam</td>
                    <td class="p-2">Risky</td>
                    <td class="p-2">Rp.2.000.000</td>
                    <td class="p-2">03-02-2025</td>
                    <td class="p-2 text-red-500">FAILED</td>
                    <td class="p-2"><button class="bg-blue-600 text-white px-4 py-1 rounded">Details</button></td>
                </tr>
                <tr class="bg-gray-200">
                    <td class="p-2">Andry</td>
                    <td class="p-2">Candimadam</td>
                    <td class="p-2">Risky</td>
                    <td class="p-2">Rp.2.000.000</td>
                    <td class="p-2">03-02-2025</td>
                    <td class="p-2 text-green-500">SUCCESS</td>
                    <td class="p-2"><button class="bg-blue-600 text-white px-4 py-1 rounded">Details</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    @include('AdminComponent.pagination')
</main>

@endsection