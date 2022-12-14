window.addEventListener('DOMContentLoaded', (event) => {

// Leaflet
var map = L.map('map').setView([45.04168646263178, 3.8838653339563938], 16);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var circle1 = L.circle([45.04346189481585, 3.8841485736069696], {
    color: 'orange',
    fillColor: 'orange',
    fillOpacity: 0.2,
    radius: 180
}).addTo(map);

var circle2 = L.circle([45.03968506707314, 3.883328892219707], {
  color: 'cyan',
  fillColor: 'cyan',
  fillOpacity: 0.2,
  radius: 120
}).addTo(map);

var circle3 = L.circle([45.04140131889955, 3.883958293165474], {
  color: 'yellow',
  fillColor: 'yellow',
  fillOpacity: 0.2,
  radius: 80
}).addTo(map);


// Fin Leaflet
  });