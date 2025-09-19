const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("active");
});

// Service dropdown toggle
document.querySelectorAll('.toggle-button').forEach(button => {
    button.addEventListener('click', () => {
        const card = button.parentElement;
        card.classList.toggle('active');
    });
});