// Leaflet
var map = L.map('map').setView([45.043088544966466, 3.8836032652867454], 16);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var circle = L.circle([45.043092230725975, 3.8836065281294774], {
    color: 'orange',
    fillColor: 'orange',
    fillOpacity: 0.2,
    radius: 150
}).addTo(map);

// Fin Leaflet
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