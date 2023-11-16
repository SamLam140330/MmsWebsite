<?php session_start(); ?>
<nav class="navbar" aria-label="main-navigation">
    <div class="navbar-brand has-background-light has-text-black">
        <a class="navbar-item" href="/minecraft-modpack/index">
            <img alt="navbar-logo" src="../res/header-icon.png" width="48" height="48">
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" id="navbarButton" onclick="onNavbarButtonClicked()">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasic" class="navbar-menu has-background-light has-text-black">
        <div class="navbar-start">
            <a class="navbar-item" href="/minecraft-modpack/index">
                <p class="has-background-light has-text-black">Home</p>
            </a>
            <a class="navbar-item" href="/minecraft-modpack/installation">
                <p class="has-background-light has-text-black">Installation</p>
            </a>
            <a class="navbar-item" href="/minecraft-modpack/download">
                <p class="has-background-light has-text-black">Download</p>
            </a>
            <a class="navbar-item" href="/minecraft-modpack/statistic">
                <p class="has-background-light has-text-black">Statistic</p>
            </a>
            <a class="navbar-item" href="/minecraft-modpack/gallery">
                <p class="has-background-light has-text-black">Gallery</p>
            </a>
            <a class="navbar-item" href="/minecraft-modpack/contribute">
                <p class="has-background-light has-text-black">Contribute</p>
            </a>
            <a class="navbar-item" href="/minecraft-modpack/certificate.php">
                <p class="has-background-light has-text-black">Certificate</p>
            </a>
            <a class="navbar-item" href="/minecraft-modpack/application.php">
                <p class="has-background-light has-text-black">Application</p>
            </a>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="field">
                    <input id="darkModeSwitch" type="checkbox" name="darkModeSwitch" class="switch" onclick="onDarkModeSwitchClicked()">
                    <label id="darkModeSwitchText" for="darkModeSwitch" class="has-background-light has-text-black">Dark mode</label>
                </div>
            </div>
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