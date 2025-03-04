// Opcional: Puedes agregar funcionalidad adicional con JavaScript
// Por ejemplo, detectar cuándo el usuario cambia de sección.

document.addEventListener('scroll', () => {
    const secciones = document.querySelectorAll('.seccion');
    secciones.forEach((seccion, index) => {
        const rect = seccion.getBoundingClientRect();
        if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
            console.log(`Estás en la sección ${index + 1}`);
        }
    });
});
