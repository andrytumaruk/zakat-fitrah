@extends('layouts.adminmain')
@section('content')
<main class="flex-1 p-6">
    <div class="border-b-2 border-black pb-2">
        <h1 class="text-2xl font-bold">Konfirmasi Registrasi</h1>
    </div>
    <div class="relative float-end mb-5">
        <input type="text" placeholder="Cari nama..." class="h-10 w-[300px] px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
        <button class="w-28 h-10 px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
            search
        </button>
    </div>

    <!-- Table -->
    <div class="mt-10">
        <table class="w-full border-collapse border text-center border-gray-300">
            <thead>
                <tr class="border-b-2 border-black text-black">
                    <th class="p-2">Nama</th>
                    <th class="p-2">Nomor Telefon</th>
                    <th class="p-2">Alamat</th>
                    <th class="p-2">Details</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-200">
                    <td class="p-2">Andry</td>
                    <td class="p-2">Candimadam</td>
                    <td class="p-2">Risky</td>
                    <td class="p-2">
                        <a href=""><button class="bg-green-500 text-white px-4 py-1 rounded">Terima</button></a>
                        <a href=""><button class="bg-red-600 text-white px-4 py-1 rounded">Tidak</button></a>
                    </td>
                </tr>
                <tr class="bg-white">
                    <td class="p-2">Andry</td>
                    <td class="p-2">Candimadam</td>
                    <td class="p-2">Risky</td>
                    <td class="p-2">
                        <a href=""><button class="bg-green-500 text-white px-4 py-1 rounded">Terima</button></a>
                        <a href=""><button class="bg-red-600 text-white px-4 py-1 rounded">Tidak</button></a>
                    </td>
                </tr>
                <tr class="bg-gray-200">
                    <td class="p-2">Andry</td>
                    <td class="p-2">Candimadam</td>
                    <td class="p-2">Risky</td>
                    <td class="p-2">
                        <a href=""><button class="bg-green-500 text-white px-4 py-1 rounded">Terima</button></a>
                        <a href=""><button class="bg-red-600 text-white px-4 py-1 rounded">Tidak</button></a>
                    </td>
                </tr>
                <tr class="bg-white">
                    <td class="p-2">Andry</td>
                    <td class="p-2">Candimadam</td>
                    <td class="p-2">Risky</td>
                    <td class="p-2">
                        <a href=""><button class="bg-green-500 text-white px-4 py-1 rounded">Terima</button></a>
                        <a href=""><button class="bg-red-600 text-white px-4 py-1 rounded">Tidak</button></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @include('AdminComponent.pagination')
</main>
@endsection