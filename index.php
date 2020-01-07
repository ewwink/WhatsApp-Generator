<?php require_once("init.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo empty(trim($nomor)) ? 'WhatsApp Generator v1.0 :: ewwink': 'Kirim Whatsapp ke ' . $nomor ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="aset/style.css">
</head>

<body>
    <div class="header"><span></span></div>
    <div class="content">
        <?php if (empty(trim($nomor))) { ?>
            <h1>WhatsApp Link Generator</h1>
            <div class="generator">
                <p><span>Nomor</span><input type="number" placeholder="628XXXXXXXXXX" id="nomorWA"></p>
                <p><span>Pesan</span><textarea id="pesanWA"></textarea></p>
                <p><span>WhatsApp Link</span><input type="text" id="urlWA"></p>
                <div class="tombol"><a href="#" target="_blank" id="linkWA">Tes Link</a></div>
            </div>

        <?php } else {
            $nomorFormat = preg_replace('#(..)(...)(....)(.+)#', '+$1 $2-$3-$4', $nomor);
            ?>
            <h1>Kirim pesan di WhatsApp ke<br> <span class="nomor"><?php echo $nomorFormat; ?></span></h1>
            <div class="tombol"><a id="tombolWA" href="https://web.whatsapp.com/send?phone=<?php echo $nomor; ?>&text=<?php echo urlencode($text); ?>">KIRIM</a></div>
            <div class="waerror"></div>
            <div class="text"><?php echo nl2br($text); ?></div>
            <iframe id="launcher" src="whatsapp://send/?phone=<?php echo $nomor; ?>&amp;text=<?php echo urlencode($text); ?>" style="display: none;"></iframe>
        <?php } ?>
    </div>
    <?php require_once("footer.php"); ?>
    <script src="aset/script.js" async></script>
</body>

</html>