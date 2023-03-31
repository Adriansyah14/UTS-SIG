//LEAFLET
const map = L.map('map').setView([-5.414713550709891, 105.2681547478029], 13);
    
const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

//MARKER
$(document).ready(function() {
    $.getJSON('/json', function(data) {
        console.log(data); // untuk debug

        $.each(data, function(index, value) {
            const marker = L.marker([value.latitude, value.longitude]);
            marker.addTo(map);
        });
    });
});
