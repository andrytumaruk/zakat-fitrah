<header class="relative bg-black text-white p-4 flex justify-between items-center z-50">
        <h1 class="text-xl font-bold"><span class="text-yellow-500">DKM</span> Al-IKHLAS</h1>
        <button class="text-white text-2xl" id="settings"><i class="bi bi-person-circle"></i></button>
</header>
<div class="hidden" id="drop-profile">
        <div class="w-40 fixed top-16 right-4 grid grid-rows-3 gap-4 bg-white text-black p-4 rounded-lg shadow-lg transform  transition-transform duration-300 ease-in-out ">
                <a href="#" class="text-sm border-b-2 border-black"><i class="bi bi-person-fill"> Profile</i></a>
                <a href="#" class="text-sm border-b-2 border-black"><i class="bi bi-gear-fill"> settings</i></a>
                <a href="#" class="text-sm text-red-500 border-b-2 border-black"><i class="bi bi-door-open-fill"> log-out</i></a>
        </div>
</div>

<script>
        const profile = document.getElementById("settings");
        const dropdown = document.getElementById("drop-profile");
        profile.addEventListener('click', () => {
                dropdown.classList.remove("hidden");
        })
        document.addEventListener('click', function(e) {
                if (!profile.contains(e.target)) {
                        dropdown.classList.add('hidden');
                }
        })
</script>