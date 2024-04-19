<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" />
    </head>
    <body>
        <h3>Kucing kesukaanku</h3>

        <?php

            // Condition
            // Kalo input kucing isinya "Kucing Oren",
            // Kasih pesan "Itu kucing kesukaan aku!!!"
            // Tapi kalo selain itu
            // Keluarin data normal (nama + gambar)

            if ($_POST['kucing'] === "kucing oren"):
        ?>
            Itu kucing kesukaan aku!!!"
        <?php else: ?>
            <p>
                <?php echo $_POST['kucing']; ?> <br />
            </p>
            <img src="<?php echo $_POST['gambar']; ?>"/>
        <?php endif; ?>

        <a href="/binus-comserv/form/">Kembali</a>
    </body>
</html>