window.addEventListener('DOMContentLoaded', (event) => {
    // Début dark mode
    const darkMode = document.getElementById('dark-mode');

    darkMode.addEventListener('change', () => {
      document.body.classList.toggle('dark');
    });
    // Dark mode automatique
    const isDarkMode = () =>{
    if (globalThis.matchMedia?.("(prefers-color-scheme:dark)").matches ?? true) {
        document.body.classList.toggle('dark');
        document.getElementById("dark-mode").checked = true;
    }}
    // Usage
    isDarkMode();
    // fin dark mode
  });