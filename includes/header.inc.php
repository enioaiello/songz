<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site MVC</title>
    <link rel="stylesheet" href="<?= assets('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css">
</head>
<body>
<header class="header">
    <nav class="navbar">
        <ul class="navbar-list">
            <li class="navbar-element">
                <a href="/" class="link"><i class="ri-home-fill"></i></a>
            </li>
            <li class="navbar-element">
                <a href="/chansons" class="link"><i class="ri-list-view"></i></a>
            </li>
            <li class="navbar-element">
                <a href="/chanson/ajouter" class="link"><i class="ri-add-fill"></i></a>
            </li>
        </ul>
    </nav>
</header>
<main class="main">