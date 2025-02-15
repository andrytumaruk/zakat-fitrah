<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Pembayaran Zakat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    <nav class="bg-gray-800 p-4 flex justify-between items-center">
        <div class="text-lg font-bold text-yellow-400">DKM Al-Ikhlas</div>
        <ul class="flex space-x-4">
            <li><a href="#" class="text-white">Beranda</a></li>
            <li><a href="#" class="text-white">Pembayaran Zakat</a></li>
            <li><a href="#" class="text-white">Riwayat Transaksi</a></li>
        </ul>
        <button class="bg-red-500 px-4 py-2 rounded">Keluar</button>
    </nav>
    
    <section class="container mx-auto p-8 grid md:grid-cols-2 gap-8">
        <div class="space-y-4">
            <img src="/img/MOSQUE.png" class="w-full rounded" alt="Mosque">
            <img src="/img/kabah.png" class="w-full rounded" alt="Kaaba">
            <img src="/img/Rectangle 20.png" class="w-full rounded" alt="Islamic Art">
        </div>
        
        <div class="bg-gray-800 p-6 rounded">
            <h2 class="text-2xl font-bold mb-4">Transaksi Pembayaran Zakat</h2>
            <label class="block">Masukkan Jumlah Anggota</label>
            <input type="number" class="w-full p-2 rounded text-black" value="0">
            
            <label class="block mt-4">Masukkan Harga Beras</label>
            <input type="text" class="w-full p-2 rounded text-black" value="0 Rp">
            
            <label class="block mt-4">Masukkan Total Zakat</label>
            <input type="text" class="w-full p-2 rounded text-black" value="0 Rp" readonly>
            
            <label class="block mt-4">Pilih Metode Pembayaran</label>
            <div class="space-y-2">
                <label class="block"><input type="radio" name="payment" class="mr-2"> Gopay</label>
                <label class="block"><input type="radio" name="payment" class="mr-2"> OVO</label>
                <label class="block"><input type="radio" name="payment" class="mr-2"> Dana</label>
                <label class="block"><input type="radio" name="payment" class="mr-2"> ShopeePay</label>
                <label class="block"><input type="radio" name="payment" class="mr-2"> Kartu Kredit</label>
                <label class="block"><input type="radio" name="payment" class="mr-2"> Virtual Account</label>
            </div>
            
            <div class="flex justify-between mt-6">
                <button class="bg-red-500 px-4 py-2 rounded">Reset Pengisian</button>
                <button class="bg-green-500 px-4 py-2 rounded">Kirim Pembayaran</button>
            </div>
        </div>
    </section>
    
    <footer class="bg-green-600 p-6 text-center mt-8">
        <div class="grid md:grid-cols-3 gap-4">
            <div>
                <h3 class="font-bold">Tentang Website</h3>
                <ul>
                    <li>Penjelasan Zakat</li>
                    <li>Niat Zakat</li>
                    <li>Kalkulator Zakat</li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold">Tautan</h3>
                <ul>
                    <li>Beranda</li>
                    <li>Pembayaran Zakat</li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold">Hubungi Kami</h3>
                <div class="flex space-x-4 justify-center">
                    <span>📧</span>
                    <span>📞</span>
                    <span>💬</span>
                </div>
            </div>
        </div>
        <p class="mt-4">Created By Our Team © 2025</p>
    </footer>
</body>
</html>
