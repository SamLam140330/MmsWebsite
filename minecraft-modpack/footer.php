<footer class="footer">
    <div class="content has-text-centered">
        <p>Copyright &copy; 2021 - 2023 Elementblend. All Rights Reserved.</p>
    </div>
</footer>

<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
<script>
    function onNavbarButtonClicked() {
        if (document.getElementById("navbarBasic").getAttribute("class") === "navbar-menu is-active") {
            document.getElementById("navbarButton").setAttribute("class", "navbar-burger");
            document.getElementById("navbarBasic").setAttribute("class", "navbar-menu");
        } else {
            document.getElementById("navbarButton").setAttribute("class", "navbar-burger is-active");
            document.getElementById("navbarBasic").setAttribute("class", "navbar-menu is-active");
        }
    };
</script>