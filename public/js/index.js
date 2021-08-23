window.onload = () => {
    const mobileButton = document.getElementById("mobile-button");
    const mobileMenu = document.getElementById("mobile-menu");

    mobileButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });
};
