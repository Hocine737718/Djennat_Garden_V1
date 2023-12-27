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
  themeButton.classList[selectedIcon === 'ri-moon-line' ? 'add' : 'remove'](iconTheme)
}
// Activer / désactiver le thème manuellement avec le bouton
themeButton.addEventListener('click', () => {
    // Ajouter ou supprimer le thème dark / icône.
    document.body.classList.toggle(darkTheme);
    themeButton.classList.toggle(iconTheme);
    // Nous sauvegardons le thème et l'icône actuelle que l'utilisateur a choisie.
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})