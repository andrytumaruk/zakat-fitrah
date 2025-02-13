<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Distribusi Zakat</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-black p-4">
        <div class="container mx-auto">
            <div class="text-yellow-400 text-lg">
                DKM Al Ikhlas
            </div>
        </div>
    </nav>

    <div class="flex">
        <div class="w-1/6 bg-gray-600 p-4 h-screen">
            <ul>
            <li class="mb-6"><a href="#" class="text-white">Dashboard</a></li>
            <li class="mb-6"><a href="#" class="text-white">Zakat</a></li>
            <li class="mb-6"><a href="#" class="text-white">Distribusi Zakat</a></li>
            <li class="mb-6 "><a href="#" class="text-white">Laporan</a></li>
            </ul>
        </div>

        <div class="w-3/4 p-4">
            <h1 class="text-2xl mb-4">Distribusi Zakat</h1>
            <form action="#" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama_penerima" class="block text-gray-700">Nama Penerima</label>
                <input type="text" id="nama_penerima" name="nama_penerima" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="jumlah_uang" class="block text-gray-700">Jumlah Uang</label>
                <input type="number" id="jumlah_uang" name="jumlah_uang" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="jumlah_beras" class="block text-gray-700">Jumlah Beras (kg)</label>
                <input type="number" id="jumlah_beras" name="jumlah_beras" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="tanggal" class="block text-gray-700">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="total_harga" class="block text-gray-700">Total Harga</label>
                <input type="number" id="total_harga" name="total_harga" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>