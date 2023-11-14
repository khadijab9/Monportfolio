/* 
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
} */


//------------------------- animation H1 ------------------------------------
const title = document.querySelector('h1');

function typeText(text, i) {
  if (i < text.length) {
    title.textContent += text.charAt(i);
    setTimeout(function () {
      typeText(text, i + 1);
    }, 90); // Délai entre chaque lettre
  } else {
    // Une fois que tout le texte a été affiché, réinitialisez le texte
    setTimeout(function () {
      title.textContent = '';
      typeText(text, 0); // Re-commence le processus
    }, 100); // Délai avant de recommencer
  }
}
if (title !== null) {
  const text = title.textContent;
  title.textContent = ''; // Efface le texte initial
  typeText(text, 0);
}



//------------------------- animation lien de navigation -------------------------
jQuery(document).ready(function ($) {
  $('.navbar-nav a').on('click', function () {
    // Supprimez la classe "active" de tous les liens de navigation
    $('.navbar-nav a').removeClass('active');

    // Ajoutez la classe "active" uniquement au lien cliqué
    $(this).addClass('active');
  });
});



//------------------------- animation bar de progression -------------------------
const bar = document.querySelectorAll('.bar-inner');
const containerBar = document.querySelectorAll('.bar');

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

containerBar.forEach(containerBar => {
  obs.observe(containerBar);
});


//------------------------- animation photo portfolio -------------------------
const container = document.querySelector('.containerProjet');
if (container) {
  const observer = new IntersectionObserver(entries => {
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


//------------------------- animation menu burger -------------------------
document.addEventListener('DOMContentLoaded', function () {

  const burger = document.querySelector('.burgerMenu');
  const menu = document.querySelector('.navbar-nav')

  burger.addEventListener("click", function () {
    burger.classList.toggle("open");
    menu.classList.toggle("open");
  });

  menu.addEventListener('click', function () {
    burger.classList.remove('open');
    menu.classList.remove('open');
  });
});