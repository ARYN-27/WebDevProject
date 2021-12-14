<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <?php
    // Google Charts Documentation: https://developers.google.com/chart/infographics/docs/qr_codes?csw=1#overview

    // Chart Type
    $cht = "qr";

    // Chart Size
    $chs = "200x200";

    // Chart Link
    // the url-encoded string you want to change into a QR code
    $chl = urlencode("https://www.facebook.com/pages/category/Interest/Jennys-Lectures-CSIT-Netjrf-316814368950701/");

    // Chart Output Encoding (optional)
    $choe = "UTF-8";

    $qrcode = 'https://chart.googleapis.com/chart?cht=' . $cht . '&chs=' . $chs . '&chl=' . $chl . '&choe=' . $choe;

    ?>

    <img src="<?php echo $qrcode ?>" alt="My QR code">
</body>

</html>