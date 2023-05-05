<?php session_start(); ?>
<nav class="navbar" aria-label="main-navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/minecraft-modpack/index">
            <img alt="navbar-logo" src="https://cdn.discordapp.com/icons/625235170689024002/5ed84ffea9a0182a6fc76e59d48a6ba6.webp?size=48" width="48" height="48">
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" id="navbarButton" onclick="onNavbarButtonClicked()">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasic" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="/minecraft-modpack/index">
                Home
            </a>
            <a class="navbar-item" href="/minecraft-modpack/installation">
                Installation
            </a>
            <a class="navbar-item" href="/minecraft-modpack/download">
                Download
            </a>
            <a class="navbar-item" href="/minecraft-modpack/statistic">
                Statistic
            </a>
            <a class="navbar-item" href="/minecraft-modpack/gallery">
                Gallery
            </a>
            <a class="navbar-item" href="/minecraft-modpack/contribute">
                Contribute
            </a>
            <a class="navbar-item" href="/minecraft-modpack/certificate.php">
                Certificate
            </a>
            <a class="navbar-item" href="/minecraft-modpack/application.php">
                Application
            </a>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="column has-background-link has-text-white">
                    <?php
                    require_once('../backend/function.php');
                    checkUserAuth();
                    getUsername();
                    ?>
                </div>
            </div>
        </div>
    </div>
</nav>