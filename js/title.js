const title = document.querySelector('h1');
const text = title.textContent;
title.textContent = ''; // Efface le texte initial

function typeText(text, i) {
  if (i < text.length) {
    title.textContent += text.charAt(i);
    setTimeout(function () {
      typeText(text, i + 1);
    }, 100); // Délai entre chaque lettre 
  }
}

typeText(text, 0); // Commence l'animation




jQuery(document).ready(function($) {
  $('.navbar-nav a').on('click', function() {
      // Supprimez la classe "active" de tous les liens de navigation
      $('.navbar-nav a').removeClass('active');

      // Ajoutez la classe "active" uniquement au lien cliqué
      $(this).addClass('active');
  });
});

























