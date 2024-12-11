document.addEventListener("DOMContentLoaded", function () {
    const amountButtons = document.querySelectorAll(".amount-option");
    amountButtons.forEach(button => {
        button.addEventListener("click", function () {
            amountButtons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");
        });
    });

    const radios = document.querySelectorAll(".radio-group input[type='radio']");
    radios.forEach((radio) => {
        radio.addEventListener("change", function () {
            console.log(`Selected: ${this.value}`);
        });
    });
});