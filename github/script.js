document.getElementById('registrationForm').addEventListener('submit', function(e) {
    e.preventDefault();

    var email = document.getElementById('email').value;
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    var userData = {
        email: email,
        username: username,
        password: password
    };

    // Ici, vous devriez envoyer ces données à votre backend pour l'enregistrement.
    // Si vous n'avez pas de backend, vous ne pouvez pas enregistrer ces données en utilisant seulement HTML/CSS/JS.

    alert("Données enregistrées avec succès !");
});
