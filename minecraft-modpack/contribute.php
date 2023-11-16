<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modpack - Contribute</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-extensions@6.2.4/bulma-switch/dist/css/bulma-switch.min.css">
</head>

<body>
    <?php
    include('header.php');
    ?>

    <section class="hero is-primary">
        <div class="hero-body">
            <h1 class="title">Contribute</h1>
        </div>
    </section>

    <section id="desktop" class="section has-background-white has-text-dark">
        <div class="columns">
            <div class="column has-text-centered">
                <figure class="image is-128x128 is-inline-block">
                    <img class="is-rounded" src="https://avatars.githubusercontent.com/u/48656764?v=4">
                </figure>
            </div>
            <div class="column is-1"></div>
            <div class="column has-text-centered">
                <figure class="image is-128x128 is-inline-block">
                    <img class="is-rounded" src="https://avatars.githubusercontent.com/u/37017127?v=4">
                </figure>
            </div>
            <div class="column is-1"></div>
            <div class="column has-text-centered">
                <figure class="image is-128x128 is-inline-block">
                    <img class="is-rounded" src="https://avatars.githubusercontent.com/u/65012377?v=4">
                </figure>
            </div>
        </div>

        <div class="columns">
            <div class="column has-text-centered has-background-light">
                <a href="https://github.com/SamLam140330" target="_blank" class="has-text-link is-clickable">SamLam140330</a>
            </div>
            <div class="column is-1"></div>
            <div class="column has-text-centered has-background-light">
                <a href="https://github.com/LHemon412" target="_blank" class="has-text-link is-clickable">LHemon412</a>
            </div>
            <div class="column is-1"></div>
            <div class="column has-text-centered has-background-light">
                <a href="https://github.com/HongKongMapping" target="_blank" class="has-text-link is-clickable">HongKongMapping</a>
            </div>
        </div>

        <div class="columns">
            <div class="column has-text-centered">
                <p class="is-size-5">Founder, Owner</p>
            </div>
            <div class="column is-1"></div>
            <div class="column has-text-centered">
                <p class="is-size-5">Code optimization</p>
            </div>
            <div class="column is-1"></div>
            <div class="column has-text-centered">
                <p class="is-size-5">Timeline maintainer</p>
            </div>
        </div>
    </section>

    <section class="section is-hidden has-background-white has-text-dark" id="mobile">
        <div class="box has-text-centered">
            <figure class="image is-128x128 is-inline-block">
                <img class="is-rounded" src="https://avatars.githubusercontent.com/u/48656764?v=4">
            </figure>
        </div>
        <div class="column has-text-centered has-background-light">
            <a href="https://github.com/SamLam140330" target="_blank" class="has-text-link is-clickable">SamLam140330</a>
        </div>
        <div class="column has-text-centered has-background-light">
            <p class="is-size-5">Founder, Owner</p>
        </div>

        <div class="column is-1"></div>
        <div class="box has-text-centered">
            <figure class="image is-128x128 is-inline-block">
                <img class="is-rounded" src="https://avatars.githubusercontent.com/u/37017127?v=4">
            </figure>
        </div>
        <div class="column has-text-centered has-background-light">
            <a href="https://github.com/LHemon412" target="_blank" class="has-text-link is-clickable">LHemon412</a>
        </div>
        <div class="column has-text-centered has-background-light">
            <p class="is-size-5">Code optimization</p>
        </div>

        <div class="column is-1"></div>
        <div class="box has-text-centered">
            <figure class="image is-128x128 is-inline-block">
                <img class="is-rounded" src="https://avatars.githubusercontent.com/u/65012377?v=4">
            </figure>
        </div>
        <div class="column has-text-centered has-background-light">
            <a href="https://github.com/HongKongMapping" target="_blank" class="has-text-link is-clickable">HongKongMapping</a>
        </div>
        <div class="column has-text-centered has-background-light">
            <p class="is-size-5">Timeline maintainer</p>
        </div>
    </section>

    <section class="section has-background-white has-text-dark">
        <div class="has-text-centered">
            <p class="is-size-4 is-inline-block">Have some idea? Feel free to contribute through&nbsp;</p><a href="https://github.com/SamLam140330/MmsWebsite" target="_blank" class="is-size-4 has-text-link">GitHub</a>
        </div>
    </section>

    <script>
        function checkWindowSize() {
            var width = window.innerWidth;
            if (width <= 768) {
                document.getElementById("desktop").setAttribute("class", "section has-background-white has-text-dark is-hidden");
                document.getElementById("mobile").setAttribute("class", "section has-background-white has-text-dark");
            } else {
                document.getElementById("desktop").setAttribute("class", "section has-background-white has-text-dark");
                document.getElementById("mobile").setAttribute("class", "section has-background-white has-text-dark is-hidden");
            }
        }

        var onResizeWindow = function(e) {
            checkWindowSize();
        }
        window.addEventListener("resize", onResizeWindow);
        checkWindowSize();
    </script>

    <?php
    include('footer.php');
    ?>
</body>

</html>
