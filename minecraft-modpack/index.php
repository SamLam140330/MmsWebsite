<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modpack - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-extensions@6.2.7/bulma-timeline/dist/css/bulma-timeline.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
</head>

<body>
    <?php
    include('header.php');
    ?>

    <section class="hero is-primary">
        <div class="hero-body">
            <h1 class="title">Home</h1>
        </div>
    </section>
    <section class="section">
        <div class="timeline is-centered">
            <p style="text-align:center">To be continued</p>
            <?php getTimeline(); ?>
        </div>
    </section>

    <?php
    include('footer.php');
    ?>
</body>

</html>
