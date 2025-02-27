@extends('layouts.main')
@section('content')
<section class="container mx-auto px-4 my-20 ">
  <!-- Riwayat Transaksi -->
  <div class="bg-black text-white p-6 text-center lg:text-5xl md:text-4xl sm:text-3xl font-bold">
    Riwayat Transaksi Pembayaran
  </div>
  <div class="max-w-4xl mx-auto mt-6">
    <div class="bg-white shadow-lg rounded-lg p-4 space-y-4">

      <!-- Transaksi Item -->
      <div class="flex justify-between items-center p-4 border rounded-lg shadow">
        <div class="flex items-center space-x-2 text-black">
          <i class="bi bi-clock-history text-xl"></i>
          <span class="font-semibold"><b>Senin 4 Oktober 2025</b></span>
        </div>
        <button class="bg-green-500 text-white px-4 py-2 rounded">Download</button>
      </div>

      <div class="flex justify-between items-center p-4 border rounded-lg shadow">
        <div class="flex items-center space-x-2 text-black">
          <i class="bi bi-clock-history text-xl"></i>
          <span class="font-semibold"><b>Senin 4 Oktober 2025</b></span>
        </div>
        <button class="bg-green-500 text-white px-4 py-2 rounded">Download</button>
      </div>

      <div class="flex justify-between items-center p-4 border rounded-lg shadow">
        <div class="flex items-center space-x-2 text-black">
          <i class="bi bi-clock-history text-xl"></i>
          <span class="font-semibold"><b>Kamis 22 April 2023</b></span>
        </div>
        <button class="bg-green-500 text-white px-4 py-2 rounded">Download</button>
      </div>

      <div class="flex justify-between items-center p-4 border rounded-lg shadow">
        <div class="flex items-center space-x-2 text-black">
          <i class="bi bi-clock-history text-xl"></i>
          <span class="font-semibold"><b>Sabtu 3 Maret 2022</b></span>
        </div>
        <button class="bg-green-500 text-white px-4 py-2 rounded">Download</button>
      </div>

    </div>
  </div>
</section>
@endsection