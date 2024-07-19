const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
	item.addEventListener('click', function() {
		switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		this.parentElement.classList.add('is-active')
	})
})
// Redirigir al index.html al enviar el formulario de registro
document.getElementById('signup-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevenir el envío tradicional del formulario
    window.location.href = 'index.html'; // Redirigir a index.html
  });

  // Redirigir al index.html al enviar el formulario de login
  document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevenir el envío tradicional del formulario
    window.location.href = 'index.html'; // Redirigir a index.html
  });