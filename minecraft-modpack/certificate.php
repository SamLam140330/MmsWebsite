<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modpack - Certificate</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-extensions@6.2.4/bulma-switch/dist/css/bulma-switch.min.css">
</head>

<body>
    <?php
    include('header.php');
    ?>

    <section class="hero is-primary">
        <div class="hero-body">
            <h1 class="title">Certificate</h1>
        </div>
    </section>

    <section class="section has-background-white has-text-dark">
        <p class="has-text-danger-dark">
            All content and application only work for those who already have permission to get the login certificate
            <br> Please contact the administrator for future information if you believe you have permission
        </p>
    </section>

    <section class="section has-background-white has-text-dark">
        <form method="post" action='<?php checkDownloadOS(); ?>'>
            <div class="notification is-info">
                <p>Certificate Installer <span style="color: #FFF300">(New Method)</span></p>
            </div>

            <div class="field">
                <p>For Windows</p>
            </div>
            <div class="control">
                <input type="hidden" id="certInstaller" name="certInstaller" autocomplete="off">
                <button class="button is-success" type="submit" name="downloadForWindows">Download</button>
            </div>
            <br>
            <br>
            <div class="field">
                <p>For Mac (Arm)</p>
            </div>
            <div class="control">
                <button class="button is-success" type="submit" name="downloadForMac">Download</button>
            </div>
            <br>
            <br>
            <div class="field">
                <p>For Mac (Intel Based)</p>
            </div>
            <div class="control">
                <button class="button is-success" type="submit" name="downloadForMacIntel">Download</button>
            </div>
            <br>
            <br>
            <div class="field">
                <p>For Linux</p>
            </div>
            <div class="control">
                <button class="button is-danger" disabled type="submit" name="downloadForLinux">Download</button>
            </div>
        </form>
    </section>

    <div class="tabs is-boxed is-centered has-background-white has-text-dark">
        <ul>
            <li id="stdCsrBtn" class="is-active" onclick="onCsrBtnClicked(0)"><a>Standard Certificate Signing Request</a></li>
            <li id="advCsrBtn" onclick="onCsrBtnClicked(1)"><a>Advanced Certificate Signing Request</a></li>
        </ul>
    </div>

    <section class="section has-background-white has-text-dark" id="stdCsr">
        <h1 class='title has-text-danger has-text-centered'>Deprecated</h1>
        <form method="post" name="stdCsrForm">
            <div class="field">
                <p>Certificate ID</p>
                <div class="control">
                    <input class="input is-danger" disabled name="certID" id="certID" type="text" placeholder="Please input the id that the administrator has given to you" maxlength="50" autocomplete="off">
                </div>
            </div>
            <div class="control">
                <button class="button is-danger" disabled name="stdSubmit">Submit</button>
            </div>
        </form>
    </section>

    <section class="section has-background-white has-text-dark is-hidden" id="advCsr">
        <div class="field">
            <p>Certificate Signing Request</p>
            <div class="control">
                <textarea class="textarea is-danger" disabled name="certRequest" id="certRequest" placeholder="-----BEGIN CERTIFICATE REQUEST-----&#10;xxx&#10;Content&#10;xxx&#10;-----END CERTIFICATE REQUEST-----"></textarea>
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-danger" disabled>Submit</button>
            </div>
        </div>
        <p class="has-text-danger-dark">
            * Please note that the authority may sign only if the request is correct
        </p>
    </section>

    <div class="tabs is-boxed is-centered">
        <ul>
            <li id="winBtn" class="is-active" onclick="onInstallBtnClicked(0)"><a>Windows Installing Method</a></li>
            <li id="linBtn" onclick="onInstallBtnClicked(1)"><a>Linux Installing Method</a></li>
            <li id="macBtn" onclick="onInstallBtnClicked(2)"><a>Mac Installing Method</a></li>
            <li id="andBtn" onclick="onInstallBtnClicked(3)"><a>Android Installing Method</a></li>
            <li id="iosBtn" onclick="onInstallBtnClicked(4)"><a>Ios Installing Method</a></li>
        </ul>
    </div>

    <section class="section has-background-white has-text-dark" id="winInst">
        <h1 class='title has-text-danger has-text-centered'>Not Yet Implemented</h1>
        <p>
            Placeholder
        </p>
    </section>

    <section class="section has-background-white has-text-dark is-hidden" id="linInst">
        <h1 class='title has-text-danger has-text-centered'>Not Yet Implemented</h1>
        <p>
            Placeholder
        </p>
    </section>

    <script>
        function onCsrBtnClicked(choose) {
            if (choose == 0) {
                document.getElementById("stdCsr").className = "section has-background-white has-text-dark";
                document.getElementById("advCsr").className = "section has-background-white has-text-dark is-hidden";
                document.getElementById("stdCsrBtn").className = "is-active";
                document.getElementById("advCsrBtn").className = "";
            } else {
                document.getElementById("advCsr").className = "section has-background-white has-text-dark";
                document.getElementById("stdCsr").className = "section has-background-white has-text-dark is-hidden";
                document.getElementById("advCsrBtn").className = "is-active";
                document.getElementById("stdCsrBtn").className = "";
            }
        }

        function onInstallBtnClicked(choose) {
            if (choose == 0) {
                document.getElementById("winInst").className = "section has-background-white has-text-dark";
                document.getElementById("linInst").className = "section has-background-white has-text-dark is-hidden";
                document.getElementById("winBtn").className = "is-active";
                document.getElementById("linBtn").className = "";
            }
        }
    </script>

    <?php
    include('footer.php');
    ?>
</body>

</html>
