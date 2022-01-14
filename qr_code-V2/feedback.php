
    <?php
    function qrcode(){
    // Google Charts Documentation: https://developers.google.com/chart/infographics/docs/qr_codes?csw=1#overview

    // Chart Type
    $cht = "qr";

    // Chart Size
    $chs = "98x98";

    // Chart Link
    // the url-encoded string you want to change into a QR code
    $chl = urlencode("https://docs.google.com/forms/d/e/1FAIpQLSfs2kHvHHDn1-pDwkkRF6EBS17nIuUbaKtD0KLPjz-Y9JIjFw/viewform?usp=pp_url");

    // Chart Output Encoding (optional)
    $choe = "UTF-8";

    $qrcode = 'https://chart.googleapis.com/chart?cht=' . $cht . '&chs=' . $chs . '&chl=' . $chl . '&choe=' . $choe;
    
    echo "<img src='$qrcode' alt='My QR code'/>";
    }
    qrcode();
    ?>


