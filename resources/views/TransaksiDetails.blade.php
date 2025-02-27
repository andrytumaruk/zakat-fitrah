@extends('layouts.adminmain')
@section('content')
<main class="flex-1 p-3">
    <h1 class="text-2xl font-bold border-b-2 border-black pb-2"><a href="/zakat">TRANSAKSI</a> > <span class="font-semibold"> DETAILS</span></h1>
    <div class="bg-white  border-black border-2 p-6 mt-10 rounded shadow-[15px_15px_10px_15px_rgba(0,0,0,0.3)]">
        <table class="w-full text-left border-collapse">
            <tbody>
                <tr class="bg-gray-200">
                    <td class="p-2 font-bold">Kode</td>
                    <td class="p-2">AML001</td>
                </tr>
                <tr>
                    <td class="p-2 font-bold">Kode Muzzaki</td>
                    <td class="p-2">MUZ001</td>
                </tr>
                <tr class="bg-gray-200">
                    <td class="p-2 font-bold">Jumlah Jiwa</td>
                    <td class="p-2">5 Jiwa</td>
                </tr>
                <tr>
                    <td class="p-2 font-bold">Jenis Pembayaran</td>
                    <td class="p-2">OVO</td>
                </tr>
                <tr class="bg-gray-200">
                    <td class="p-2 font-bold">Harga Beras</td>
                    <td class="p-2">Rp.20.000/kg</td>
                </tr>
                <tr>
                    <td class="p-2 font-bold">Total Zakat</td>
                    <td class="p-2">Rp.2.500.000</td>
                </tr>
                <tr class="bg-gray-200">
                    <td class="p-2 font-bold">Metode Pembayaran</td>
                    <td class="p-2">OVO</td>
                </tr>
                <tr>
                    <td class="p-2 font-bold">Tanggal Zakat</td>
                    <td class="p-2">4 Februari 2025</td>
                </tr>
                <tr class="bg-gray-200">
                    <td class="p-2 font-bold">Status</td>
                    <td class="p-2 text-red-500 font-bold">Failed</td>
                </tr>
            </tbody>
        </table>
        <div class="mt-4 flex justify-end space-x-2">
            <button class="bg-yellow-500 text-black px-4 py-2 rounded">Edit</button>
            <button class="bg-red-600 text-white px-4 py-2 rounded">Hapus</button>
        </div>
    </div>
</main>
@endsection