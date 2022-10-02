<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modpack - Download</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
</head>

<body>
    <?php
    include('header.php');
    ?>

    <section class="hero is-primary">
        <div class="hero-body">
            <h1 class="title">Download</h1>
        </div>
    </section>

    <section class="section">
        <div class="buttons has-addons is-centered">
            <button id="Btn11" onclick="onVerBtnClicked(11)">V11</button>
            <button id="Btn10" onclick="onVerBtnClicked(10)">V10</button>
            <button id="Btn-2" onclick="onVerBtnClicked(-2)">V-2</button>
            <button id="Btn-1" onclick="onVerBtnClicked(-1)">V-1</button>
            <button id="Btn9" onclick="onVerBtnClicked(9)">V9</button>
            <button id="Btn8" onclick="onVerBtnClicked(8)">V8</button>
            <button id="Btn7" onclick="onVerBtnClicked(7)">V7</button>
            <button id="Btn6" onclick="onVerBtnClicked(6)">V6</button>
            <button id="Btn5" onclick="onVerBtnClicked(5)">V5</button>
            <button id="Btn4" onclick="onVerBtnClicked(4)">V4</button>
            <button id="Btn3" onclick="onVerBtnClicked(3)">V3</button>
            <button id="Btn2" onclick="onVerBtnClicked(2)">V2</button>
            <button id="Btn1" onclick="onVerBtnClicked(1)">V1</button>
        </div>
    </section>

    <section class="section">
        <form method="post" action='<?php downloadModpack(); ?>'>
            <div class="notification is-info" id="HeaderTitle">
                Minecraft Modpack Survival V11 Divine Journey 2
            </div>
            <div class="field">
                <label class="label" id="TitleOneClick">V11.1 One Click Installer</label>
            </div>
            <div class="control">
                <button class="button is-success" id="BtnDownloadOneClick" name="download_v11">Download</button>
            </div>
        </form>
        <br>
        <form method="post" action='<?php downloadModpack(); ?>'>
            <div class="field">
                <label class="label" id="TitleUpdatePack">V11.1 Update Pack (11.0 > 11.1)</label>
            </div>
            <div class="control">
                <button class="button is-danger" disabled id="BtnDownloadUpdatePack">Not Yet Implemented</button>
            </div>
        </form>
    </section>

    <script>
        const minVer = -2;
        const maxVer = 11;
        onVerBtnClicked(maxVer);

        function onVerBtnClicked(versionNum) {
            for (var i = minVer; i <= maxVer; i++) {
                if (i == versionNum) {
                    document.getElementById("Btn" + i).className = "button is-success is-selected";
                    changeContent(i);
                } else if (i != 0) {
                    document.getElementById("Btn" + i).className = "button is-info";
                }
            }
        }

        function changeContent(versionNum) {
            document.getElementById("BtnDownloadOneClick").className = "button is-success";
            document.getElementById("BtnDownloadOneClick").disabled = false;
            document.getElementById("BtnDownloadOneClick").innerText = "Download";
            if (versionNum == 1) {
                document.getElementById("HeaderTitle").innerText = "Minecraft Modpack Survival V1 Custom";
                document.getElementById("TitleOneClick").innerText = "V1 One Click Installer";
                document.getElementById("BtnDownloadOneClick").name = "download_v1";
            } else if (versionNum == 2) {
                document.getElementById("HeaderTitle").innerText = "Minecraft Modpack Survival V2 Enigmatica 2 Expert v1.75";
                document.getElementById("TitleOneClick").innerText = "V2 CurseForge Download Link";
                document.getElementById("BtnDownloadOneClick").name = "download_v2";
                document.getElementById("BtnDownloadOneClick").innerText = "Redirect to CurseForge";
            } else if (versionNum == 3) {
                document.getElementById("HeaderTitle").innerText = "Minecraft Modpack Survival V3 Custom";
                document.getElementById("TitleOneClick").innerText = "V3 One Click Installer";
                document.getElementById("BtnDownloadOneClick").name = "download_v3";
            } else if (versionNum == 4) {
                document.getElementById("HeaderTitle").innerText = "Minecraft Modpack Survival V4 Custom";
                document.getElementById("TitleOneClick").innerText = "V4 One Click Installer";
                document.getElementById("BtnDownloadOneClick").name = "download_v4";
            } else if (versionNum == 5) {
                document.getElementById("HeaderTitle").innerText = "Minecraft Modpack Survival V5 Dangerous World v0.6";
                document.getElementById("TitleOneClick").innerText = "V5 CurseForge Download Link";
                document.getElementById("BtnDownloadOneClick").name = "download_v5";
                document.getElementById("BtnDownloadOneClick").innerText = "Redirect to CurseForge";
            } else if (versionNum == 6) {
                document.getElementById("HeaderTitle").innerText = "Minecraft Modpack Survival V6 Dangerous World v1.3";
                document.getElementById("TitleOneClick").innerText = "V6 CurseForge Download Link";
                document.getElementById("BtnDownloadOneClick").name = "download_v6";
                document.getElementById("BtnDownloadOneClick").innerText = "Redirect to CurseForge";
            } else if (versionNum == 7) {
                document.getElementById("HeaderTitle").innerText = "Minecraft Modpack Survival V7 Custom";
                document.getElementById("TitleOneClick").innerText = "V7 One Click Installer";
                document.getElementById("BtnDownloadOneClick").name = "download_v7";
                document.getElementById("BtnDownloadOneClick").className = "button is-danger";
                document.getElementById("BtnDownloadOneClick").disabled = true;
            } else if (versionNum == 8) {
                document.getElementById("HeaderTitle").innerText = "Minecraft Modpack Survival V8 MC Eternal Lite v1.3.8.1 Sam Lam Edition";
                document.getElementById("TitleOneClick").innerText = "V8 One Click Installer";
                document.getElementById("BtnDownloadOneClick").name = "download_v8";
                document.getElementById("BtnDownloadOneClick").className = "button is-danger";
                document.getElementById("BtnDownloadOneClick").disabled = true;
            } else if (versionNum == 9) {
                document.getElementById("HeaderTitle").innerText = "Minecraft Modpack Survival V9 FTB Continuum v1.7.0 Sam Lam Edition";
                document.getElementById("TitleOneClick").innerText = "V9 One Click Installer";
                document.getElementById("BtnDownloadOneClick").name = "download_v9";
            } else if (versionNum == -1) {
                document.getElementById("HeaderTitle").innerText = "Minecraft Modpack Survival V-1 FTB Academy v1.4.0 Sam Lam Edition";
                document.getElementById("TitleOneClick").innerText = "V-1 One Click Installer";
                document.getElementById("BtnDownloadOneClick").name = "download_v-1";
            } else if (versionNum == -2) {
                document.getElementById("HeaderTitle").innerText = "Minecraft Modpack Survival V-2 FTB University v1.2.1 Sam Lam Edition";
                document.getElementById("TitleOneClick").innerText = "V-2 One Click Installer";
                document.getElementById("BtnDownloadOneClick").name = "download_v-2";
            } else if (versionNum == 10) {
                document.getElementById("HeaderTitle").innerText = "Minecraft Modpack Survival V10 Custom";
                document.getElementById("TitleOneClick").innerText = "V10 One Click Installer";
                document.getElementById("BtnDownloadOneClick").name = "download_v10";
            } else if (versionNum == 11) {
                document.getElementById("HeaderTitle").innerText = "Minecraft Modpack Survival V11 Divine Journey 2";
                document.getElementById("TitleOneClick").innerText = "V11.1 One Click Installer";
                document.getElementById("BtnDownloadOneClick").name = "download_v11";
            }
        }
    </script>

    <?php
    include('footer.php');
    ?>
</body>

</html>
