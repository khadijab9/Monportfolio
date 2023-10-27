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




// Fonction pour mettre à jour la largeur de la barre de progression en fonction du défilement
function updateProgressBar() {
  const progressBarElements = document.querySelectorAll('.bar-inner');

  progressBarElements.forEach((element) => {
      const percent = element.getAttribute('data-percent');
      const width = parseInt(percent, 10);
      element.style.width = width + '%';
  });
}

// Ajouter un écouteur d'événements pour déclencher la mise à jour lorsque la page est défilée
window.addEventListener('scroll', updateProgressBar);

// Appeler la fonction de mise à jour lors du chargement initial de la page
window.addEventListener('load', updateProgressBar);



// sectionne tous les éléments avec la classe
const bar = document.querySelectorAll('.bar-inner');
// Create the observer :
const obs = new IntersectionObserver(entries => {
  entries.forEach((entry) => {
    // If the element is visible
    if (entry.isIntersecting) {
      // Add the animation class
      entry.target.classList.add('visible');        
    } else {
    // sinon on retire la class 
    entry.target.classList.remove('visible');
  };
});
})
// Applique l'observateur à chaque élément "cloud" dans la variable "cloud".
 bar.forEach(bar => {
 obs.observe(bar);
 });
















