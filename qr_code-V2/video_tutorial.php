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
    $chl = urlencode("https://www.youtube.com/watch?v=wKoGImLA2KA&list=PLsyeobzWxl7oBxHp43xQTFrw9f1CDPR6C");

    // Chart Output Encoding (optional)
    $choe = "UTF-8";

    $qrcode = 'https://chart.googleapis.com/chart?cht=' . $cht . '&chs=' . $chs . '&chl=' . $chl . '&choe=' . $choe;

    ?>

    <img src="<?php echo $qrcode ?>" alt="My QR code">
</body>

</html>