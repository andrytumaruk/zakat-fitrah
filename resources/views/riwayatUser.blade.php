<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Riwayat Transaksi</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-black">
  <nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <div class="space-x-4">
        <a href="#" class="text-white">Beranda</a>
        <a href="#" class="text-white">Pembayaran Zakat</a>
        <a href="#" class="text-white">Riwayat Transaksi</a>
      </div>
      <div>
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
          Keluar
        </button>
      </div>
    </div>
  </nav>

  <div class="container mx-auto mt-8">
    <div class="bg-slate-200 text-white p-6 rounded-lg shadow-lg">
      <h2 class="text-black text-2xl font-bold mb-4">Riwayat Transaksi</h2>
      <div class="space-y-4">
        <div class="bg-gray-700 p-4 rounded-lg">
          <p class="font-semibold">Transaksi #1</p>
          <p>Nama: Candimadam</p>
          <p>Tanggal: 05/04/2025</p>
          <p>Jumlah: Rp 2.600.000</p>
          <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-2">
            Download
          </button>
        </div>
        <div class="bg-gray-700 p-4 rounded-lg">
          <p class="font-semibold">Transaksi #2</p>
          <p>Nama: Candimadam</p>
          <p>Tanggal: 12/06/2024</p>
          <p>Jumlah: Rp 2.200.000</p>
          <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-2">
            Download
          </button>
        </div>
        <div class="bg-gray-700 p-4 rounded-lg">
          <p class="font-semibold">Transaksi #3</p>
          <p>Nama: Candimadam</p>
          <p>Tanggal: 16/10/2023</p>
          <p>Jumlah: Rp 1.800.000</p>
          <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-2">
            Download
          </button>
        </div>
        <div class="bg-gray-700 p-4 rounded-lg">
          <p class="font-semibold">Transaksi #4</p>
          <p>Nama: Candimadam</p>
          <p>Tanggal: 21/08/2022</p>
          <p>Jumlah: Rp 1.400.000</p>
          <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-2">
            Download
          </button>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-green-500 text-white p-6 mt-8">
    <div class="container mx-auto flex justify-between">
      <div class="w-1/3">
        <h3 class="font-bold mb-2">Tentang Website</h3>
        <p class="mb-2">Penjelasan Zakat</p>
        <p class="mb-2">Niat Zakat</p>
        <p>Kalkulator Zakat</p>
      </div>
      <div class="w-1/3 text-center">
        <h3 class="font-bold mb-2">Tautan</h3>
        <p class="mb-2"><a href="#" class="text-white">Beranda</a></p>
        <p class="mb-2"><a href="#" class="text-white">Pembayaran Zakat</a></p>
      </div>
      <div class="w-1/3 text-right">
        <h3 class="font-bold mb-2">Hubungi Kami</h3>
        <p class="mb-2"><i class="fas fa-phone"></i> Telepon</p>
        <p class="mb-2"><i class="fas fa-whatsapp"></i> WhatsApp</p>
        <p><i class="fas fa-envelope"></i> Email</p>
      </div>
    </div>
    <div class="text-center mt-4">
      <p>Created By Our Teams &copy; 2025</p>
    </div>
  </footer>
</body>
</html>