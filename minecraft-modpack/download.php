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
            <?php getAllVersionButton(); ?>
        </div>
    </section>

    <section class="section">
        <form method="post" action='<?php checkDownloadOS(); ?>'>
            <div class="notification is-info" id="TitleModpack">
            </div>

            <div class="field">
                <label class="label" id="TitleDownloadWindows"></label>
            </div>
            <div class="control">
                <input type="hidden" id="selectedVersion" name="selectedVersion">
                <button class="button is-success" id="temp_win" type="submit" name="downloadForWindows">Download</button>
            </div>
            <br>
            <br>
            <div class="field">
                <label class="label" id="TitleDownloadMac"></label>
            </div>
            <div class="control">
                <button class="button is-success" id="temp_mac" type="submit" name="downloadForMac">Download</button>
            </div>
            <br>
            <br>
            <div class="field">
                <label class="label" id="TitleDownloadLinux"></label>
            </div>
            <div class="control">
                <button class="button is-danger" disabled type="submit" name="downloadForLinux">Download</button>
            </div>
        </form>
    </section>

    <script>
        const minVer = -2;
        const maxVer = 15;
        onVerBtnClicked(maxVer);

        function onVerBtnClicked(versionNum) {
            for (var i = minVer; i <= maxVer; i++) {
                if (i == versionNum) {
                    document.getElementById("Btn" + i).className = "button is-success is-selected";
                    document.getElementById("selectedVersion").value = i;
                    changeContent(i);
                } else if (i != 0) {
                    document.getElementById("Btn" + i).className = "button is-info";
                }
            }
        }

        function changeContent(versionNum) {
            document.getElementById("TitleModpack").innerHTML = "Minecraft Modpack Survival <b>V" + versionNum + "</b> ";
            document.getElementById("TitleDownloadWindows").innerText = "V" + versionNum + " Installer For Windows";
            document.getElementById("TitleDownloadMac").innerText = "V" + versionNum + " Installer For Mac";
            document.getElementById("TitleDownloadLinux").innerText = "V" + versionNum + " Installer For Linux";
            switch (versionNum) {
                case 1:
                    document.getElementById("TitleModpack").innerHTML += "Custom";
                    break;
                case 2:
                    document.getElementById("TitleModpack").innerHTML += "Enigmatica 2 Expert v1.75";
                    break;
                case 3:
                    document.getElementById("TitleModpack").innerHTML += "Custom";
                    break;
                case 4:
                    document.getElementById("TitleModpack").innerHTML += "Custom";
                    break;
                case 5:
                    document.getElementById("TitleModpack").innerHTML += "Dangerous World v0.6";
                    break;
                case 6:
                    document.getElementById("TitleModpack").innerHTML += "Dangerous World v1.3";
                    break;
                case 7:
                    document.getElementById("TitleModpack").innerHTML += "Custom";
                    break;
                case 8:
                    document.getElementById("TitleModpack").innerHTML += "MC Eternal Lite v1.3.8.1 Sam Lam Edition";
                    break;
                case 9:
                    document.getElementById("TitleModpack").innerHTML += "FTB Continuum v1.7.0 Sam Lam Edition";
                    break;
                case -1:
                    document.getElementById("TitleModpack").innerHTML += "FTB Academy v1.4.0 Sam Lam Edition";
                    break;
                case -2:
                    document.getElementById("TitleModpack").innerHTML += "FTB University v1.2.1 Sam Lam Edition";
                    break;
                case 10:
                    document.getElementById("TitleModpack").innerHTML += "Custom";
                    break;
                case 11:
                    document.getElementById("TitleModpack").innerHTML += "Divine Journey 2";
                    break;
                case 12:
                    document.getElementById("TitleModpack").innerHTML += "SkyFactory 4 v4.2.4 Sam Lam Edition";
                    break;
                case 13:
                    document.getElementById("TitleModpack").innerHTML += "All the Mods 8 v1.0.11 Sam Lam Edition";
                    document.getElementById("TitleDownloadWindows").innerText = "V" + versionNum + ".1 Installer For Windows";
                    document.getElementById("TitleDownloadMac").innerText = "V" + versionNum + ".1 Installer For Mac";
                    document.getElementById("TitleDownloadLinux").innerText = "V" + versionNum + ".1 Installer For Linux";
                    break;
                case 14:
                    document.getElementById("TitleModpack").innerHTML += "FTB Interactions v2.12.1 Sam Lam Edition";
                    break;
                case 15:
                    document.getElementById("TitleModpack").innerHTML += "RE V1 Custom Modpack";
                    break;
                default:
                    console.error("Unknown version number: " + versionNum);
                    return;
            }

            // temp for disable and can be remove soon, same as "temp" id attribute
            if (versionNum != 15 && versionNum != 14 && versionNum != 13) {
                document.getElementById("temp_mac").className = "button is-danger";
                document.getElementById("temp_mac").disabled = true;
                document.getElementById("temp_win").className = "button is-danger";
                document.getElementById("temp_win").disabled = true;
            } else {
                document.getElementById("temp_mac").className = "button is-success";
                document.getElementById("temp_mac").disabled = false;
                document.getElementById("temp_win").className = "button is-success";
                document.getElementById("temp_win").disabled = false;
            }
        }
    </script>

    <?php
    include('footer.php');
    ?>
</body>

</html>
