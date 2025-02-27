@extends('layouts.main')

@section('content')

<section class="container  my-20 mx-auto p-8 grid md:grid-cols-2 gap-8">
    <div class="flex flex-row items-center">
        <img src="/img/kabah.png" class="w-full h-full " alt="Kaaba">
        <!-- <img src="/img/Rectangle 20.png" class="w-full rounded" alt="Islamic Art"> -->
    </div>

    <div class="bg-gray-800 p-6 rounded">
        <h2 class="text-2xl font-bold mb-4">Transaksi Pembayaran Zakat</h2>
        <label class="block">Masukkan Jumlah Anggota</label>
        <input type="text" inputmode="numeric" class="w-full p-2 rounded text-black" value="0" >

        <label class="block mt-4">Masukkan Harga Beras</label>
        <input type="text" inputmode="numeric" class="w-full p-2 rounded text-black" value="0 Rp">

        <label class="block mt-4">Masukkan Total Zakat</label>
        <input type="text" inputmode="numeric" class="w-full p-2 rounded text-black" value="0 Rp">

        <label class="block mt-4">Pilih Metode Pembayaran</label>
        <div class="space-y-2">
            <label class="block"><input type="radio" name="payment" class="mr-2"> Gopay</label>
            <label class="block"><input type="radio" name="payment" class="mr-2"> OVO</label>
            <label class="block"><input type="radio" name="payment" class="mr-2"> Dana</label>
            <label class="block"><input type="radio" name="payment" class="mr-2"> ShopeePay</label>
            <label class="block"><input type="radio" name="payment" class="mr-2"> Kartu Kredit</label>
            <label class="block"><input type="radio" name="payment" class="mr-2"> Virtual Account</label>
        </div>

        <div class="grid md:grid-cols-2 gap-4 mt-6">
            <button class="bg-red-500 px-4 py-2 rounded">Reset Pengisian</button>
            <button class="bg-green-500 px-4 py-2 rounded">Kirim Pembayaran</button>
        </div>
    </div>
</section>

@endsection