// ini untuk tombol meng-active kan kalkulator
const modal = document.getElementById("modal");
const openBtn = document.getElementById("btn-kalkulator");
const closeBtn = document.getElementById("close");

openBtn.addEventListener("click", () => {
    modal.classList.remove("hidden");
});

closeBtn.addEventListener("click", () => {
    modal.classList.add("hidden");
});






