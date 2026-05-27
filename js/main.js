// Mostrar/Ocultar detalles de habilidades de manera fluida
function toggleSkill(id) {
    const info = document.getElementById(id + '-info');
    if (info) {
        info.classList.toggle('show-skill');
    }
}

// Efecto Fade-in dinámico para que las secciones aparezcan al cargar
document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll('.glass');
    cards.forEach((card, index) => {
        card.style.opacity = "0";
        card.style.transform = "translateY(30px)";
        card.style.transition = "all 0.6s cubic-bezier(0.4, 0, 0.2, 1)";
        
        setTimeout(() => {
            card.style.opacity = "1";
            card.style.transform = "translateY(0)";
        }, index * 120);
    });
});