<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" />
    </head>
    <body>
        <h3>Kucing kesukaanku</h3>
        
        <!-- Nanti setiap kita isi inputannya dan klik submit, kita akan menampilkan data kucing menggunakan PHP -->
        <p>
            <?php
                // Menampilkan output menggunakan `echo`
                echo "Hello world <br>";
                echo 10 . "<br>";
                echo 10 + 20 . "<br>";
            ?>
        </p>
        <p>
            <?php
                // Variable
                $kucing = "Kucing oren";
                $nama_kucing = "tomas";
                $umur = 2;
                
                $kucingku = array('nama' => 'tomas', 'umur' => 2); // Associative array
                echo $kucingku['umur']
            ?>
        </p>
        <p>
            <?php echo $_POST['kucing']; ?> <br />
            <a href="/binus-comserv/form/">Kembali</a>
        </p>
    </body>
</html>