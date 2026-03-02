import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap";
const nav = document.querySelector(".vl-nav");
function onScroll() {
    if (!nav) return;
    nav.classList.toggle("is-scrolled", window.scrollY > 10);
}
window.addEventListener("scroll", onScroll);
onScroll();
document.querySelectorAll(".vl-menu a").forEach((a) => {
    a.addEventListener("click", () => {
        const open = document.querySelector(".dropdown-menu.show");
        if (open) {
            const toggle = document.querySelector(
                '[data-bs-toggle="dropdown"]',
            );
            if (toggle) bootstrap.Dropdown.getOrCreateInstance(toggle).hide();
        }
    });
});
