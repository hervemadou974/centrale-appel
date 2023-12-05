// app.js

// Récupérez le bouton par son ID (assurez-vous d'avoir un bouton avec l'ID "myButton" dans votre HTML)
const myButton = document.getElementById('myButton');

// Ajoutez un gestionnaire d'événements au bouton
myButton.addEventListener('click', function() {
    alert('Vous avez cliqué sur le bouton !');
});
