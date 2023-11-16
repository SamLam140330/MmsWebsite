<?php
# For security reason, some methods inside the function have been removed. Just an API or template to the backend function

# Get the modpack timeline
function getTimeline()
{
    $json = json_decode(file_get_contents('../backend/timeline.json'));
    foreach ($json as $obj) {
        $color_mode = 'is-info';
        if (isset($obj->warning)) {
            if ($obj->warning == true) {
                $color_mode = 'is-warning';
            }
        }
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
}

# Check if the user has admin rights
function checkAdminAuth()
{
}

# Check if the user login success
function checkUserAuth()
{
}

# Get the username
function getUsername()
{
}

# Get the version information
function getVersion()
{
}

# Display all the modpack version button based on getVersion()
function getAllVersionButton()
{
}

# Check the os that you want to download
function checkDownloadOS()
{
}

# Download the modpack
function downloadModpack($os, $version)
{
}

# Check the modpack file path in the database
function getModpackFile($os, $version, $isCurseForge)
{
}

# Download the certificate installer
function downloadCertInstaller($os)
{
}

# Download the client certificate
function downloadCert()
{
}

# Check the client certificate file path in the database
function getCertFile($certID)
{
}

# Process the button of submit the certificate application
function submitCertAppliForm($discordID, $mcName, $websiteName, $email, $spec)
{
}

# Check the data user inputted in the certificate application form
function inputPostProcess($data)
{
}
?>
