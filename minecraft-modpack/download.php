<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modpack - Download</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
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
            <button class="button is-success is-selected" id="Btn11" onclick="onVerBtnClicked(11)">V11</button>
            <button class="button is-info" id="Btn10" onclick="onVerBtnClicked(10)">V10</button>
            <button class="button is-info" id="Btn-2" onclick="onVerBtnClicked(-2)">V-2</button>
            <button class="button is-info" id="Btn-1" onclick="onVerBtnClicked(-1)">V-1</button>
            <button class="button is-info" id="Btn9" onclick="onVerBtnClicked(9)">V9</button>
            <button class="button is-info" id="Btn8" onclick="onVerBtnClicked(8)">V8</button>
            <button class="button is-info" id="Btn7" onclick="onVerBtnClicked(7)">V7</button>
            <button class="button is-info" id="Btn6" onclick="onVerBtnClicked(6)">V6</button>
            <button class="button is-info" id="Btn5" onclick="onVerBtnClicked(5)">V5</button>
            <button class="button is-info" id="Btn4" onclick="onVerBtnClicked(4)">V4</button>
            <button class="button is-info" id="Btn3" onclick="onVerBtnClicked(3)">V3</button>
            <button class="button is-info" id="Btn2" onclick="onVerBtnClicked(2)">V2</button>
            <button class="button is-info" id="Btn1" onclick="onVerBtnClicked(1)">V1</button>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="notification is-info" id="HeaderTitle">
                Minecraft Modpack Survival V11 Divine Journey 2
            </div>
            <form action='<?php downloadModpack(); ?>' method='post'>
                <input class="button is-success" id="BtnDownload" type="submit" name="download_v11" value="Download V11">
            </form>
        </div>
    </section>

    <script>
        const minVer = -2;
        const maxVer = 11;

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
            if (versionNum == 1) {
                document.getElementById("HeaderTitle").innerHTML = "Minecraft Modpack Survival V1 Custom";
                document.getElementById("BtnDownload").name = "download_v1";
                document.getElementById("BtnDownload").value = "Download V1";
                document.getElementById("BtnDownload").className = "button is-success";
                document.getElementById("BtnDownload").disabled = false;
            } else if (versionNum == 2) {
                document.getElementById("HeaderTitle").innerHTML = "Minecraft Modpack Survival V2 Enigmatica 2 Expert v1.75";
                document.getElementById("BtnDownload").name = "download_v2";
                document.getElementById("BtnDownload").value = "Download V2";
                document.getElementById("BtnDownload").className = "button is-success";
                document.getElementById("BtnDownload").disabled = false;
            } else if (versionNum == 3) {
                document.getElementById("HeaderTitle").innerHTML = "Minecraft Modpack Survival V3 Custom";
                document.getElementById("BtnDownload").name = "download_v3";
                document.getElementById("BtnDownload").value = "Download V3";
                document.getElementById("BtnDownload").className = "button is-success";
                document.getElementById("BtnDownload").disabled = false;
            } else if (versionNum == 4) {
                document.getElementById("HeaderTitle").innerHTML = "Minecraft Modpack Survival V4 Custom";
                document.getElementById("BtnDownload").name = "download_v4";
                document.getElementById("BtnDownload").value = "Download V4";
                document.getElementById("BtnDownload").className = "button is-success";
                document.getElementById("BtnDownload").disabled = false;
            } else if (versionNum == 5) {
                document.getElementById("HeaderTitle").innerHTML = "Minecraft Modpack Survival V5 Dangerous World v0.6";
                document.getElementById("BtnDownload").name = "download_v5";
                document.getElementById("BtnDownload").value = "Download V5";
                document.getElementById("BtnDownload").className = "button is-success";
                document.getElementById("BtnDownload").disabled = false;
            } else if (versionNum == 6) {
                document.getElementById("HeaderTitle").innerHTML = "Minecraft Modpack Survival V6 Dangerous World v1.3";
                document.getElementById("BtnDownload").name = "download_v6";
                document.getElementById("BtnDownload").value = "Download V6";
                document.getElementById("BtnDownload").className = "button is-success";
                document.getElementById("BtnDownload").disabled = false;
            } else if (versionNum == 7) {
                document.getElementById("HeaderTitle").innerHTML = "Minecraft Modpack Survival V7 Custom";
                document.getElementById("BtnDownload").name = "download_v7";
                document.getElementById("BtnDownload").value = "Download V7";
                document.getElementById("BtnDownload").className = "button is-danger";
                document.getElementById("BtnDownload").disabled = true;
            } else if (versionNum == 8) {
                document.getElementById("HeaderTitle").innerHTML = "Minecraft Modpack Survival V8 MC Eternal Lite v1.3.8.1 Sam Lam Edition";
                document.getElementById("BtnDownload").name = "download_v8";
                document.getElementById("BtnDownload").value = "Download V8";
                document.getElementById("BtnDownload").className = "button is-danger";
                document.getElementById("BtnDownload").disabled = true;
            } else if (versionNum == 9) {
                document.getElementById("HeaderTitle").innerHTML = "Minecraft Modpack Survival V9 FTB Continuum v1.7.0 Sam Lam Edition";
                document.getElementById("BtnDownload").name = "download_v9";
                document.getElementById("BtnDownload").value = "Download V9";
                document.getElementById("BtnDownload").className = "button is-success";
                document.getElementById("BtnDownload").disabled = false;
            } else if (versionNum == -1) {
                document.getElementById("HeaderTitle").innerHTML = "Minecraft Modpack Survival V-1 FTB Academy v1.4.0 Sam Lam Edition";
                document.getElementById("BtnDownload").name = "download_v-1";
                document.getElementById("BtnDownload").value = "Download V-1";
                document.getElementById("BtnDownload").className = "button is-success";
                document.getElementById("BtnDownload").disabled = false;
            } else if (versionNum == -2) {
                document.getElementById("HeaderTitle").innerHTML = "Minecraft Modpack Survival V-2 FTB University v1.2.1 Sam Lam Edition";
                document.getElementById("BtnDownload").name = "download_v-2";
                document.getElementById("BtnDownload").value = "Download V-2";
                document.getElementById("BtnDownload").className = "button is-success";
                document.getElementById("BtnDownload").disabled = false;
            } else if (versionNum == 10) {
                document.getElementById("HeaderTitle").innerHTML = "Minecraft Modpack Survival V10 Custom";
                document.getElementById("BtnDownload").name = "download_v10";
                document.getElementById("BtnDownload").value = "Download V10";
                document.getElementById("BtnDownload").className = "button is-success";
                document.getElementById("BtnDownload").disabled = false;
            } else if (versionNum == 11) {
                document.getElementById("HeaderTitle").innerHTML = "Minecraft Modpack Survival V11 Divine Journey 2";
                document.getElementById("BtnDownload").name = "download_v11";
                document.getElementById("BtnDownload").value = "Download V11";
                document.getElementById("BtnDownload").className = "button is-success";
                document.getElementById("BtnDownload").disabled = false;
            }
        }
    </script>

    <?php
    include('footer.php');
    ?>
</body>

</html>
