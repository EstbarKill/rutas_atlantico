<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ruta> $rutas
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa de Rutas del Atlántico</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <?= $this->Html->css('https://unpkg.com/leaflet/dist/leaflet.css') ?>
    <?= $this->Html->script('https://unpkg.com/leaflet/dist/leaflet.js') ?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <div class="container-flex">
<header>
        <div class="logo">
            <img id="img_logo" src="https://img.freepik.com/vector-premium/logotipo-ubicacion-pin-concepto-ruta_11481-206.jpg" alt="Sample Image">
        </div>
        <div class="nombre_pagina"><h1>Rutas Atlantico</h1></div>
        <div class="profile-container">
            <div class="profile-pic">
            <img id="profile_img" src="https://media.istockphoto.com/id/1386479313/es/foto/feliz-mujer-de-negocios-afroamericana-millennial-posando-aislada-en-blanco.webp?b=1&s=170667a&w=0&k=20&c=zUQP_r8enqlixa5Vtd1vo9Lh8TqdM8iteBHIXh8l8bQ=" alt="Sample Image">
            </div>
               <div class="profile-details">
                <div class="profile-name">Admin</div>
                <div class="profile-email">admin@ejemplo.com</div>
            </div>
        </div>
    </header>
    <main>
        <aside class="sidebar">
            <div class="list">
            <ul class="sidebar-menu">
                <div class="listado">
            <?php foreach ($rutas as $ruta): ?>
            <li><a href="" class="ahref"><?= h($ruta->ruta_nombre) ?></a><br></li>
            <?php endforeach; ?>
            </div>
        </ul>
            </div>
        </aside>
       <section class="map-container">
       <div id="map"></div>
        </section>

    </main>
    </div>
    <?= $this->Html->script('https://unpkg.com/leaflet/dist/leaflet.js') ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('map').setView([10.98299151318134, -74.79549324556048], 14);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Define custom icons
            var redIcon = L.icon({
                iconUrl: '<?= $this->Url->image("redmap.png") ?>',
                iconSize: [21, 34],
                iconAnchor: [10, 34],
                popupAnchor: [1, -34]
            });

            var blueIcon = L.icon({
                iconUrl: '<?= $this->Url->image("blue.map.png") ?>',
                iconSize: [21, 34],
                iconAnchor: [10, 34],
                popupAnchor: [1, -34]
            });

            // Add markers with custom icons
            var marker1 = L.marker([10.98299151318134, -74.79549324556048], {icon: redIcon}).addTo(map)
                .bindPopup("Red Marker");

            var marker2 = L.marker([10.98599151318134, -74.79249324556048], {icon: blueIcon}).addTo(map)
                .bindPopup("Blue Marker");

                var latlngs = [
            [10.98299151318134, -74.79549324556048],
            [10.982822971953892, -74.79507478033702],
            [10.983286394138633, -74.79473145753053],
            [10.984655591736793, -74.79419501574858],
            [10.985024220774294, -74.79402335437837],
            [10.986677779649552, -74.79363711629537],
            [10.98639341032031, -74.79273589410758],
            [10.985982654126063, -74.79286464013525]
        ];

        var polyline = L.polyline(latlngs, {color: 'blue'}).addTo(map);

            map.on('resize', function() {
                map.invalidateSize();
            });

            setTimeout(function() {
                map.invalidateSize();
            }, 1000);
        });
    </script>
</body>
</html>
<style>
#map {
height: 100%;
width: 100%;
}
#profile_img{
    width: 80px;
    height: 80px;
    background-color: #ccc;
    border-radius: 50%;
    margin-right: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px; 
}
#img_logo{
    width: 80px;
    height: 80px;
    background-color: #ccc;
    border-radius: 50%;
    margin-right: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px; 
}
.listado{
    width: 300px;  /* Width of the container */
}
.ahref{
    font-size:18px;
}
.image-container {
    position: relative;
    width: 100%;  /* Width of the container */
    height: 100%; /* Height of the container */
    overflow: hidden; /* Hide the overflowing parts of the image */
    border: 1px solid #ddd;
}

#zoom-image {
    width: 100%;
    height: 100%;
    object-fit: contain; /* Maintain the aspect ratio */
    transition: transform 0.5s ease; /* Smooth transition for zoom */
    position: absolute; /* Position the image absolutely within the container */
    top: 50%; /* Center the image vertically */
    left: 50%; /* Center the image horizontally */
    transform: translate(-50%, -50%) scale(1); /* Initial transform to center and scale */
}

.zoom-buttons {
    position: absolute;
    top: 10px;
    right: 10px;
    display: flex;
    flex-direction: column;
}

.zoom-buttons button {
    background-color: blue;
    border: 1px solid #ddd;
    padding: 5px;
    margin: 2px;
    cursor: pointer;
}

.zoom-buttons button:hover {
    background-color: red;
    color:black;
}
    


.mapa{
    width: 100%;
    height: 100%;
}
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
    background-color: #f8f8f8;
    border-bottom: 1px solid #ddd;
}

.logo, .header-title, .profile-details, .profile-pic {
    padding: 10px;
}

.header-title {
    flex-grow: 2;
    text-align: center;
}

.profile-details, .profile-pic {
    flex-shrink: 0;
}

main {
    display: flex;
    height: calc(100vh - 50px); /* Assuming header height is 50px */
}

.sidebar {
    flex: 1;
    border-right: 1px solid #ddd;
}

.list {
    padding: 20px;
    font-size: 24px;
}

.map-container {
    flex: 3;
    display: flex;
    justify-content: center;
    align-items: center;
}

.map {
    width: 80%;
    height: 80%;
    background-color: #e0e0e0;
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 24px;
}

.logo {
    padding: 10px;
}

.header-title {
    flex-grow: 2;
    text-align: center;
    font-size: 24px;
    font-weight: bold;
}

.profile-container {
    display: flex;
    align-items: center;
}


.profile-details {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.profile-name {
    font-weight: bold;
}

.profile-email {
    font-size: 14px;
    color: #555;
}</style>