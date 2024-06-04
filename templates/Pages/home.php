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
    <title>Mapa de Rutas del Atlántico</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container-flex">
<header>
        <div class="nombre_logo">Logo</div>
        <div class="nombre_pagina">Rutas Atlanctico</div>
        <div class="profile-container">
            <div class="profile-pic">Foto</div>
               <div class="profile-details">
                <div class="profile-name">Nombre del Usuario</div>
                <div class="profile-email">correo@ejemplo.com</div>
            </div>
        </div>
    </header>
    <main>
        <aside class="sidebar">
            <div class="list">
            <ul class="sidebar-menu">
            <?php foreach ($rutas as $ruta): ?>
            <li><a href=""><?= $this->Number->format($ruta->ruta_id) ?></a></li>
            <?php endforeach; ?>
        </ul>
            </div>
        </aside>
        <section class="map-container">
            <div class="map"><img src="../../webroot/img/cake.logo.svg" /></div>
        </section>
    </main>
    </div>
</body>
</html>
<style>
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

.profile-pic {
    width: 50px;
    height: 50px;
    background-color: #ccc;
    border-radius: 50%;
    margin-right: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;
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