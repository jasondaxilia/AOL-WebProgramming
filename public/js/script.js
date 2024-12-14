document.addEventListener("DOMContentLoaded", function () {
    // Tombol donasi
    const amountButtons = document.querySelectorAll(".amount-option");
    amountButtons.forEach(button => {
        button.addEventListener("click", function () {
            amountButtons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");

            const selectedAmount = this.getAttribute("data-donasi");
            document.getElementById("totaldonasis").value = selectedAmount;

            document.getElementById("manualdonasi").value = '';
        });
    });

    // Input manual
    const manualInput = document.getElementById("manualdonasi");
    manualInput.addEventListener("input", function () {
        // Ambil nilai dari input manual
        let manualValue = this.value;

        if (manualValue) {
            amountButtons.forEach(btn => btn.classList.remove("active"));
            
            document.getElementById("totaldonasis").value = manualValue;
        }
    });

    // Domestic / International
    const radios = document.querySelectorAll(".radio-group input[type='radio']");
    radios.forEach((radio) => {
        radio.addEventListener("change", function () {
            console.log(`Selected: ${this.value}`);
        });
    });
});
