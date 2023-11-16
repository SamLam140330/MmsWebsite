<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Server - Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-extensions@6.2.4/bulma-switch/dist/css/bulma-switch.min.css">
</head>

<body>
    <?php
    include('header.php');
    ?>

    <section class="hero is-primary">
        <div class="hero-body">
            <h1 class="title">Application</h1>
        </div>
    </section>

    <section class="section has-background-white has-text-dark">
        <div class="tabs is-boxed is-centered">
            <ul>
                <li id="CertAppliBtn" class="is-active" onclick="onAppliBtnClicked(0)"><a>Website Login Certificate Application</a></li>
            </ul>
        </div>
    </section>

    <section class="section has-background-white has-text-dark" id="CertAppli">
        <?php
        $displayForm = true;
        if (isset($_POST['submitCertAppli'])) {
            if (isset($_POST['discordID']) && isset($_POST['mcName']) && isset($_POST['websiteName']) && isset($_POST['email']) && isset($_POST['spec'])) {
                $discordID = inputPostProcess($_POST["discordID"]);
                $mcName = inputPostProcess($_POST["mcName"]);
                $websiteName = inputPostProcess($_POST["websiteName"]);
                $email = inputPostProcess($_POST["email"]);
                $spec = inputPostProcess($_POST["spec"]);
                $displayForm = false;
                $result = submitCertAppliForm($discordID, $mcName, $websiteName, $email, $spec);
                if ($result == "success") {
                    header('Location: application.php', true, 303);
                    exit();
                } else {
                    echo '<p class="has-text-danger-dark">Your application has been submitted failed! ' . $result . '</p>';
                }
            }
        }
        if (isset($_SESSION['hasSubmitAppliForm'])) {
            $displayForm = false;
            echo '<p class="has-text-success-dark">Your application has been submitted successfully! Please wait for our staff to process your application. Thank you.</p>';
        }

        if ($displayForm) {
        ?>
            <p>Please fill in all the blanks in the form below to apply for a website login credential (certificate). After the application is approved, you will receive an email with your login credential (certificate) and information.</p>
            <form method="post" name="CertAppliForm">
                <h1 class="title">Website Login Certificate Application</h1>
                <div class="field">
                    <p class="label has-text-danger">Discord ID</p>
                    <div class="control">
                        <input class="input is-primary" name="discordID" id="discordID" type="text" placeholder="Your discord ID (eg: SamLam140330#1882)" maxlength="40" autocomplete="off" required>
                        <p>Use for assigning a role to our discord server</p>
                    </div>
                </div>
                <div class="field">
                    <p class="label has-text-danger">Minecraft Name</p>
                    <div class="control">
                        <input class="input is-primary" name="mcName" id="mcName" type="text" placeholder="Your Minecraft Name (eg: SamLam140330)" maxlength="40" autocomplete="off" required>
                        <p>Use for assigning to our server whitelist</p>
                    </div>
                </div>
                <div class="field">
                    <p class="label has-text-danger">Website Username</p>
                    <div class="control">
                        <input class="input is-primary" name="websiteName" id="websiteName" type="text" placeholder="Your Website Username (eg: SamLam140330)" maxlength="40" autocomplete="off" required>
                        <p>Use for displaying the username on our website (Just like the right top corner, should display Guess currently)</p>
                    </div>
                </div>
                <div class="field">
                    <p class="label has-text-danger">Email</p>
                    <div class="control">
                        <input class="input is-primary" name="email" id="email" type="text" placeholder="Your Email (eg: example@gmail.com)" maxlength="50" autocomplete="off" required>
                        <p>Use for receiving your login credential and information</p>
                    </div>
                </div>
                <div class="field">
                    <p class="label has-text-danger">Computer Specification</p>
                    <div class="control">
                        <textarea class="textarea is-primary" name="spec" id="spec" type="textarea" placeholder="Your Computer Specification (eg: Cpu:i5-13400, Gpu: Rtx3060, Ram: 16GB)" autocomplete="off" required></textarea>
                        <p>Use for estimating the total number of mods in the upcoming modpack</p>
                    </div>
                </div>
                <div class="control">
                    <button class="button is-success" type="submit" name="submitCertAppli">Submit</button>
                </div>
            </form>
        <?php
        }
        ?>
    </section>

    <script>
        function onAppliBtnClicked(choose) {
            if (choose == 0) {
                document.getElementById("CertAppli").className = "section";
                document.getElementById("CertAppliBtn").className = "is-active";
            }
        }
    </script>

    <?php
    include('footer.php');
    ?>
</body>

</html>
