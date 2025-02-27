@extends('layouts.Adminmain')
@section('content')
<main class="flex-1 p-6">
    <h2 class="text-2xl font-bold mb-4 border-b-2 border-black">DASHBOARD</h2>

    <!-- Cards -->
    <div class="grid grid-cols-4 gap-4 mb-6">
        <div class="bg-black text-white p-4 rounded-lg flex flex-col items-center">
            <div class="grid grid-cols-2 gap-2">
                <p class="text-4xl">15</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                </svg>
            </div>
            <p class="text-2xl">Muzakki</p>
            <button class="mt-2 bg-gray-600 px-4 py-1 rounded">More info</button>
        </div>
        <div class="bg-green-600 text-white p-4 rounded-lg flex flex-col items-center">
            <div class="grid grid-cols-2 gap-2">
                <p class="text-4xl">15</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                    <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z" />
                </svg>
            </div>
            <p class="text-2xl">Total Zakat</p>
            <button class="mt-2 bg-gray-600 px-4 py-1 rounded">More info</button>
        </div>
        <div class="bg-yellow-500 text-white p-4 rounded-lg flex flex-col items-center">
            <div class="grid grid-cols-2 gap-2">
                <p class="text-4xl">15</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                </svg>
            </div>
            <p class="text-2xl">Total Penerima</p>
            <button class="mt-2 bg-gray-600 px-4 py-1 rounded">More info</button>
        </div>
        <div class="bg-blue-500 text-white p-4 rounded-lg flex flex-col items-center">
            <div class="grid grid-cols-2 gap-2">
                <p class="text-4xl">15</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                    <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z" />
                </svg>
            </div>
            <p class="text-2xl">Total Beras</p>
            <button class="mt-2 bg-gray-600 px-4 py-1 rounded">More info</button>
        </div>
    </div>

    <!-- Chart Placeholder -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-2xl font-bold">Total Donasi</h3>
        <div class="">
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
                            <a href=""><button class="bg-blue-600 text-white px-4 py-1 rounded">Details</button></a>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td class="p-2">Andry</td>
                        <td class="p-2">Candimadam</td>
                        <td class="p-2">Risky</td>
                        <td class="p-2">
                            <a href=""><button class="bg-blue-600 text-white px-4 py-1 rounded">Details</button></a>
                        </td>
                    </tr>
                    <tr class="bg-gray-200">
                        <td class="p-2">Andry</td>
                        <td class="p-2">Candimadam</td>
                        <td class="p-2">Risky</td>
                        <td class="p-2">
                            <a href=""><button class="bg-blue-600 text-white px-4 py-1 rounded">Details</button></a>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td class="p-2">Andry</td>
                        <td class="p-2">Candimadam</td>
                        <td class="p-2">Risky</td>
                        <td class="p-2">
                            <a href=""><button class="bg-blue-600 text-white px-4 py-1 rounded">Details</button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection