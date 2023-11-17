<footer class="footer has-background-light has-text-black">
    <div class="content has-text-centered">
        <p>Copyright &copy; 2021 - 2023 Elementblend. All Rights Reserved.</p>
    </div>
</footer>

<script>
    function onNavbarButtonClicked() {
        if (document.getElementById("navbarBasic").classList.contains("is-active")) {
            document.getElementById("navbarButton").classList.remove("is-active");
            document.getElementById("navbarBasic").classList.remove("is-active");
        } else {
            document.getElementById("navbarButton").classList.add("is-active");
            document.getElementById("navbarBasic").classList.add("is-active");
        }
    };

    function onDarkModeSwitchClicked() {
        if (document.getElementById("darkModeSwitch").checked) {
            document.querySelectorAll(".has-background-white").forEach(element => {
                element.classList.remove("has-background-white");
                element.classList.remove("has-text-dark");
                element.classList.add("has-background-dark");
                element.classList.add("has-text-white");
            });
            document.querySelectorAll(".has-background-light").forEach(element => {
                element.classList.remove("has-background-light");
                element.classList.remove("has-text-black");
                element.classList.add("has-background-black");
                element.classList.add("has-text-light");
            });
            document.getElementById("darkModeSwitchText").innerHTML = "Light mode";
        } else {
            document.querySelectorAll(".has-background-dark").forEach(element => {
                element.classList.remove("has-background-dark");
                element.classList.remove("has-text-white");
                element.classList.add("has-background-white");
                element.classList.add("has-text-dark");
            });
            document.querySelectorAll(".has-background-black").forEach(element => {
                element.classList.remove("has-background-black");
                element.classList.remove("has-text-light");
                element.classList.add("has-background-light");
                element.classList.add("has-text-black");
            });
            document.getElementById("darkModeSwitchText").innerHTML = "Dark mode";
        }
    };
</script>