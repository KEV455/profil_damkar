
 //Tampilan Maps
 const map = L.map('map').setView([-8.234256388870639, 114.29139328370496], 9);
 const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
 }).addTo(map);

 //Marker
 //Lokasi 1
 var lokasi1 = L.icon({
    iconUrl: './assets/image/logo_damkar.png',
    iconSize:     [65, 40], // size of the icon
    });

 L.marker([-8.21124339808114, 114.37976274943635],{icon:lokasi1}).addTo(map).bindPopup("<b>MAKO DAMKAR BANYUWANGI</b><br>Telp: (0333) 422113").openPopup();

 //Lokasi 2
 var lokasi2 = L.icon({
    iconUrl: './assets/image/logo_damkar.png',
    iconSize:     [65, 40], // size of the icon
    });

 L.marker([-8.397562413652105, 114.26973405885026],{icon:lokasi2}).addTo(map).bindPopup("<b>SEKTOR SRONO</b><br>Srono")

 //Lokasi 3
 var lokasi3 = L.icon({
    iconUrl: './assets/image/logo_damkar.png',
    iconSize:     [65, 40], // size of the icon
    });

 L.marker([-8.361345425593777, 114.15939366898164],{icon:lokasi3}).addTo(map).bindPopup("<b>SEKTOR GENTENG</b><br>Genteng")

 //Lokasi 4
 var lokasi4 = L.icon({
   iconUrl: './assets/image/logo_damkar.png',
   iconSize:     [65, 40], // size of the icon
   });

L.marker([-8.48352765424662, 114.13341408000693],{icon:lokasi4}).addTo(map).bindPopup("<b>SEKTOR BANGOREJO</b><br>Bangorejo")