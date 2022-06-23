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
            <?php
            $json = json_decode(file_get_contents('dev-timeline.json'));
            foreach ($json as $obj) {
                $color_mode = $obj->warning == true ? 'is-warning' : 'is-info';
                foreach ($obj->timeline as $date => $info) {
                    $formatted_date = preg_replace("/(\d{1,2})(st|nd|th) (\w+,) (\d{4})/", "$1<sup>$2</sup> $3 $4", $date);
                    echo '<div class="timeline-item ' . $color_mode . '">';
                    echo '<div class="timeline-marker ' . $color_mode . '"></div>';
                    echo '<div class="timeline-content">';
                    echo '<p class="heading">' . $formatted_date . '</p>';
                    echo '<p><b>' . $info . '</b></p></div></div>';
                }
                echo '<header class="timeline-header"><span class="tag is-large ' . $color_mode . '">' . $obj->title . '</span></header>';
            }
            ?>
        </div>
    </section>

    <?php
    include('footer.php');
    ?>
</body>

</html>
