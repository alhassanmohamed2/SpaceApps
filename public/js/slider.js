document.addEventListener("DOMContentLoaded", function () {
    const stepContent = document.querySelectorAll(".step-content");
    const navLinks = document.querySelectorAll(".nav-link");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    let currentStep = 0;

    function showStep(step) {
        stepContent.forEach((content, index) => {
            if (index === step) {
                content.classList.remove("d-none");
            } else {
                content.classList.add("d-none");
            }
        });

        navLinks.forEach((link, index) => {
            if (index === step) {
                link.classList.add("active");
            } else {
                link.classList.remove("active");
            }
        });

        prevBtn.disabled = step === 0;
        nextBtn.disabled = step === stepContent.length - 1;
    }

    prevBtn.addEventListener("click", () => {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    });

    nextBtn.addEventListener("click", () => {
        if (currentStep < stepContent.length - 1) {
            currentStep++;
            showStep(currentStep);
        }
    });

    showStep(currentStep);
});