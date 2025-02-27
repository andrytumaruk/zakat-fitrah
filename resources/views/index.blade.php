@extends('layouts.main')
@include('partial.header')
@section('content')
<section class="container mx-auto px-4 my-20 ">

  <h2 class="text-center text-5xl font-bold text-yellow-500 mb-10">Zakat fitrah</h2>
  <div class="grid md:grid-cols-2 gap-8">
    <div>
      <h2 class="text-xl font-bold">Pengertian Zakat Fitrah</h2>
      <p class="mt-2 text-gray-300">Zakat fitrah adalah zakat yang diwajibkan kepada umat Muslim selama bulan Ramadan dan dibayarkan pada hari Idul Fitri. Zakat fitrah dapat dibayarkan dalam bentuk beras atau uang. </p>

    </div>
    <div>
      <h2 class="text-xl font-bold">Niat Zakat Fitrah</h2>
      <p class="mt-2 text-gray-300">Niat zakat fitrah dibaca sebelum menunaikannya...</p>
    </div>
  </div>
  <button class="mt-4 bg-green-500 px-4 py-2 rounded " id="btn-kalkulator">Kalkulator</button>
</section>

<section class="bg-black flex items-center justify-center min-h-screen z-10" id="modal">
  <div class=" relative bg-black text-white p-6 rounded-lg shadow-lg w-96 ">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle cursor-pointer" id="close" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
    </svg>
    <h1 class="text-yellow-400 text-3xl font-bold text-center mt-5">Kalkulator Zakat</h1>
    <p class="text-center text-lg mt-2">Perhitungan Pembayaran</p>

    <div class="mt-4">
      <label class="block mb-2">Masukkan Jumlah Anggota</label>
      <input type="text" inputmode="numeric" class="w-full p-2 rounded bg-gray-800 border border-gray-600 text-white" value="0" min="0">
    </div>

    <div class="mt-4">
      <label class="block mb-2">Masukkan total Beras</label>
      <input type="text" inputmode="numeric" class="w-full p-2 rounded bg-gray-800 border border-gray-600 text-white" value="0" min="0">
    </div>

    <div class="mt-6 grid grid-cols-2 gap-4 ">
      <button class="bg-red-500 text-white py-2 px-4 rounded">Reset Perhitungan</button>
      <button class="bg-green-500 text-white py-2 px-4 rounded">Hitung Total Zakat</button>
    </div>
</section>


<section class="bg-black p-8">
  <h2 class=" text-2xl font-bold">Mengapa memilih aplikasi ini?</h2>
  <div class="text-center grid lg:grid-cols-3  item-center gap-4 mt-6 md:grid-cols-1">
    <div class="bg-black p-4 rounded">
      <h3 class="text-lg font-bold text-yellow-500">10jt+</h3>
      <p class="text-gray-300 text-justify">Lorem ipsum dolor sit amet consectetur. Aliquam imperdiet diam eu sit sit est purus fermentum tempus. Consectetur porttitor ac vitae condimentum ut. Quis amet purus nunc tincidunt purus neque sed sed. Feugiat amet pellentesque dictumst donec ornare integer turpis. Arcu phasellus ut adipiscing nec dictumst. Tristique condimentum fames ac ut elit eget sit integer.</p>
    </div>
    <div class="bg-black p-4 rounded">
      <h3 class="text-lg font-bold text-yellow-500">100jt+</h3>
      <p class="text-gray-300 text-justify">Lorem ipsum dolor sit amet consectetur. Aliquam imperdiet diam eu sit sit est purus fermentum tempus. Consectetur porttitor ac vitae condimentum ut. Quis amet purus nunc tincidunt purus neque sed sed. Feugiat amet pellentesque dictumst donec ornare integer turpis. Arcu phasellus ut adipiscing nec dictumst. Tristique condimentum fames ac ut elit eget sit integer.</p>
    </div>
    <div class="bg-black p-4 rounded">
      <h3 class="text-lg font-bold text-yellow-500">5jt+</h3>
      <p class="text-gray-300 text-justify">Lorem ipsum dolor sit amet consectetur. Aliquam imperdiet diam eu sit sit est purus fermentum tempus. Consectetur porttitor ac vitae condimentum ut. Quis amet purus nunc tincidunt purus neque sed sed. Feugiat amet pellentesque dictumst donec ornare integer turpis. Arcu phasellus ut adipiscing nec dictumst. Tristique condimentum fames ac ut elit eget sit integer</p>
    </div>
  </div>
</section>

<section class="container mx-auto p-8 md:p-8">
  <h2 class="text-center text-3xl font-bold text-yellow-400">Jajaran Pengurus DKM</h2>
  <div class="justify-center grid  lg:grid-cols-4  mt-6 gap-8 md:grid-cols-2 text-black ">
    <div class="bg-white p-4 rounded text-center">
      <img src="img/MOSQUE.PNG" class="mx-auto h-40" alt="">
      <h3 class="mt-2">Nama</h3>
      <p>Jabatan</p>
    </div>
    <div class="bg-white p-4 rounded text-center">
      <img src="img/MOSQUE.PNG" class="mx-auto h-40" alt="">
      <h3 class="mt-2">Nama</h3>
      <p>Jabatan</p>
    </div>
    <div class="bg-white p-4 rounded text-center">
      <img src="img/MOSQUE.PNG" class="mx-auto h-40" alt="">
      <h3 class="mt-2">Nama</h3>
      <p>Jabatan</p>
    </div>
    <div class="bg-white p-4 rounded text-center">
      <img src="img/MOSQUE.PNG" class="mx-auto h-40" alt="">
      <h3 class="mt-2">Nama</h3>
      <p>Jabatan</p>
    </div>
  </div>
</section>

<div class="container mx-auto py-10" id="map">
  <h2 class="text-center text-3xl font-bold"><span class="text-yellow-500">kontak</span> <span class="text-white">Kami</span></h2>
  <p class="text-center text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, vero.</p>

  <div class="flex flex-wrap mt-10">
    <!-- Peta -->
    <div class="w-full md:w-1/2" >
      <iframe class="w-full h-96" 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.933348576817!2d119.44513931431796!3d-5.173658796244586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefd2c97a1f2d1%3A0xa1b82d7b4f8f9a84!2sGriya%20Bakti%20Utama%20C9%2F12A!5e0!3m2!1sid!2sid!4v1640926528052!5m2!1sid!2sid"
        allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Form Kontak -->
    <div class="w-full md:w-1/2 bg-gray-900 p-8">
      <div class="mb-4 flex items-center border border-gray-500 rounded p-2">
        <i class="bi bi-person text-gray-400 mr-2"></i>
        <input type="text" placeholder="nama" class="bg-transparent outline-none w-full text-white">
      </div>
      <div class="mb-4 flex items-center border border-gray-500 rounded p-2">
        <i class="bi bi-envelope text-gray-400 mr-2"></i>
        <input type="email" placeholder="email" class="bg-transparent outline-none w-full text-white">
      </div>
      <div class="mb-4 flex items-center border border-gray-500 rounded p-2">
        <i class="bi bi-telephone text-gray-400 mr-2"></i>
        <input type="text" placeholder="no hp" class="bg-transparent outline-none w-full text-white">
      </div>
      <button class="bg-green-500 text-black px-4 py-2 rounded hover:bg-green-600">kirim pesan</button>
    </div>
  </div>
</div>
<script src="js/script.js"></script>
@endsection