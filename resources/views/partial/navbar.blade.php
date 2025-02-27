<nav class="bg-gray-600  fixed p-4 flex justify-between items-center z-40 top-0 right-0 left-0">
  <div class="flex items-center space-x-5">

    <button id="menu-toggle" class="block md:hidden focus:outline-none text-black">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>
    <button id="menu-profile"><svg class="hidden md:flex text-black hover:text-green-500" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
      </svg></button>
    <ul class="hidden md:flex space-x-4 opacity-100">
      <li><a href="/" class="text-black hover:text-green-500 font-bold">Beranda</a></li>
      <li><a href="/pembayaran" class="text-black hover:text-green-500 font-bold">Pembayaran Zakat</a></li>
      <li><a href="/Riwayat" class="text-black hover:text-green-500 font-bold">Riwayat Transaksi</a></li>
    </ul>
  </div>
  <div class>
    <button class="bg-green-500 hover:bg-green-900 px-4 py-2 rounded">Login</button>
    <button class="bg-red-600 px-4 py-2 rounded hidden">Keluar</button>
  </div>
</nav>
<div id="drop-profile" class="fixed top-16 left-8 grid grid-rows-3 gap-4 bg-white text-black p-4 rounded-lg shadow-lg transform -translate-y-full transition-transform duration-300 ease-in-out ">
  <p class="text-sm"><i class="bi bi-person-fill"> Candidadam</i></p>
  <p class="text-sm"><i class="bi bi-envelope-fill"> candidadam23@gmail.com</i></p>
  <p class="text-sm"><i class="bi bi-telephone-fill"> 0895383284120</i></p>
  <p class="text-sm"><i class="bi bi-house-door-fill"> Jl.cikutra no.10</i></p>
</div>
<!-- sidebar -->
<div id="sidebar" class="fixed inset-y-0 left-0 bg-gray-800 text-white w-52 transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden z-50">
  <div class="p-4 text-xl font-bold">Menu</div>
  <ul>
    <li class="p-4 border-b border-gray-600 hover:text-green-400"><a href="/">Beranda</a></li>
    <li class="p-4 border-b border-gray-600 hover:text-green-400"><a href="/pembayaran">Pembayaran Zakat</a></li>
    <li class="p-4 border-b border-gray-600 hover:text-green-400"><a href="/Riwayat">Riwayat Transaksi</a></li>
  </ul>
  <button id="close-sidebar" class="absolute top-4 right-4 text-white ">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
      <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
    </svg>
  </button>

</div>



<script>
  // ini untuk tombol sidebar buat smartphone
  const menuToggle = document.getElementById("menu-toggle");
  const sidebar = document.getElementById("sidebar");
  const closeSidebar = document.getElementById("close-sidebar");

  menuToggle.addEventListener("click", () => {
    sidebar.classList.toggle("-translate-x-full");
  });

  closeSidebar.addEventListener("click", () => {
    sidebar.classList.add("-translate-x-full");
  });

  //ini umtuk menampilkan profile
  const profile = document.getElementById("menu-profile");
  const dropdown = document.getElementById("drop-profile");

  profile.addEventListener('click', () => {
    dropdown.classList.toggle("-translate-y-full");

  })

  document.addEventListener('click', function(e) {
    if (!menuToggle.contains(e.target) && !closeSidebar.contains(e.target)) {
      sidebar.classList.add('-translate-x-full');
    }
    if (!profile.contains(e.target)) {
      dropdown.classList.add('-translate-y-full');
    }
  })
</script>