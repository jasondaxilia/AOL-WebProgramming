document.addEventListener("DOMContentLoaded", function () {
    // Kelola tombol nominal
    const amountButtons = document.querySelectorAll(".amount-option");
    amountButtons.forEach(button => {
        button.addEventListener("click", function () {
            // Hapus kelas 'active' dari semua tombol nominal
            amountButtons.forEach(btn => btn.classList.remove("active"));
            // Tambahkan kelas 'active' ke tombol yang diklik
            this.classList.add("active");
        });
    });

    // Kelola tombol tujuan
    const destinationButtons = document.querySelectorAll(".destination-option");
    destinationButtons.forEach(button => {
        button.addEventListener("click", function () {
            // Hapus kelas 'active' dari semua tombol tujuan
            destinationButtons.forEach(btn => btn.classList.remove("active"));
            // Tambahkan kelas 'active' ke tombol yang diklik
            this.classList.add("active");
        });
    });
});