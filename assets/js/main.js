const themeButton = document.getElementById('theme-button');
const darkTheme = 'dark-theme';
const iconTheme = 'ri-sun-line';
// Pour savoir si l'utilisateur a déjà sélectionné.
const selectedTheme = localStorage.getItem('selected-theme');
const selectedIcon = localStorage.getItem('selected-icon');
// Nous obtenons le thème actuel que l'interface possède en validant la classe dark-theme.
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light';
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'ri-moon-line' : 'ri-sun-line';
// Nous vérifions si l'utilisateur a précédemment choisi un mode.
if (selectedTheme) {
  // Si la validation est remplie, nous demandons quelle était la problématique pour savoir si nous avons activé ou désactivé 
  // le mode dark.
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme);
  themeButton.classList[selectedIcon === 'ri-moon-line' ? 'add' : 'remove'](iconTheme);
}
// Activer / désactiver le thème manuellement avec le bouton
themeButton.addEventListener('click', () => {
    // Ajouter ou supprimer le thème dark / icône.
    document.body.classList.toggle(darkTheme);
    themeButton.classList.toggle(iconTheme);
    // Nous sauvegardons le thème et l'icône actuelle que l'utilisateur a choisie.
    localStorage.setItem('selected-theme', getCurrentTheme());
    localStorage.setItem('selected-icon', getCurrentIcon());
})

const sections = document.querySelectorAll('section[id]');
function scrollActive(){
    const scrollY = window.pageYOffset;
    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight,
              sectionTop = current.offsetTop - 68,
              sectionId = current.getAttribute('id');
        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav_menu a[href*=' + sectionId + ']').classList.add('active-link');
        }else{
            document.querySelector('.nav_menu a[href*=' + sectionId + ']').classList.remove('active-link');
        }
    })
}
window.addEventListener('scroll', scrollActive);

const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
    // ;reset: true
})
sr.reveal(`.home_data`);
sr.reveal(`.home_img`, {delay: 500});
sr.reveal(`.home_social`, {delay: 600});
sr.reveal(`.contact_box`,{origin: 'left'});
sr.reveal(`.contact_form`,{origin: 'right'});
sr.reveal(`.product_card, .footer`,{interval: 100});

const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close');
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu');
    })
}
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu');
    })
}

const navLink = document.querySelectorAll('.nav_link');
function linkAction(){
    const navMenu = document.getElementById('nav-menu');
    navMenu.classList.remove('show-menu');
}
navLink.forEach(n => n.addEventListener('click', linkAction));