
const title = document.querySelector('h1');
if (title !== null) {
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
}





jQuery(document).ready(function($) {
  $('.navbar-nav a').on('click', function() {
      // Supprimez la classe "active" de tous les liens de navigation
      $('.navbar-nav a').removeClass('active');

      // Ajoutez la classe "active" uniquement au lien cliqué
      $(this).addClass('active');
  });
}); 




// animation bar de progression 

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




/*  const bars = document.querySelectorAll('.bar-inner');

 const obs = new IntersectionObserver(entries => {
   entries.forEach(entry => {
     const bar = entry.target;
     const text = bar.querySelector('p');
 
     if (entry.isIntersecting) {
       bar.classList.add('visible');
       text.classList.add('visible');
     } else {
       bar.classList.remove('visible');
       text.classList.remove('visible');
     }
   });
 });
 
 bars.forEach(bar => {
   obs.observe(bar);
 }); */

 
 
 
 
 
 







 // animation photo portfolio

 const container = document.querySelector('.containerProjet');
 if (container) {
const observer= new IntersectionObserver(entries => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            container.classList.add('visible');
        } else {
            container.classList.remove('visible');
        }
    });
}); 

observer.observe(container);

 }



 //Menu burger
//lors du chargement du Dom
document.addEventListener('DOMContentLoaded', function () {
  //Sélection des éléments du menu
  const burger = document.querySelector('.burgerMenu');
  const menu = document.querySelector('.navbar-nav')
 // const menuLinks = document.querySelectorAll('.navbar-nav a');
  // Ajoute un écouteur d'événements pour le clic sur le bouton burger
  burger.addEventListener("click", function () {
      // Ajoute et supprime la classe active à l'élément "burger"
      // ce qui permet de basculer son état visuel 
      //pour créer un effet d'ouverture/fermeture du menu).

      burger.classList.toggle("open");

      // permet de basculer son affichage en rendant le menu visible ou caché.
      menu.classList.toggle("open");
  });
});











