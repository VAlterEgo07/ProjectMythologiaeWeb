// Añade un escuchador de evento para el evento 'submit' del formulario
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Previene el comportamiento por defecto del formulario (que es enviar los datos)

    // Obtiene los valores de los campos del formulario
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let message = document.getElementById('message').value;

    // Verifica si alguno de los campos está vacío
    if (name === "" || email === "" || message === "") {
        // Muestra un mensaje de error si hay campos vacíos
        document.getElementById('formMessage').textContent = "Por favor, complete todos los campos.";  // Establece el mensaje de error
        document.getElementById('formMessage').style.color = "red";  // Cambia el color del mensaje a rojo
        document.getElementById('formMessage').classList.remove('hidden');  // Muestra el mensaje de error (eliminando la clase 'hidden')
    } else {
        // Muestra un mensaje de éxito si todos los campos están completos
        document.getElementById('formMessage').textContent = "¡Formulario enviado correctamente!";  // Establece el mensaje de éxito
        document.getElementById('formMessage').style.color = "green";  // Cambia el color del mensaje a verde
        document.getElementById('formMessage').classList.remove('hidden');  // Muestra el mensaje de éxito (eliminando la clase 'hidden')
        
        // Oculta el formulario después de enviarlo correctamente
        document.getElementById('contactForm').classList.add('hidden');  // Añade la clase 'hidden' al formulario para ocultarlo
    }
});
