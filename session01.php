<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php
    /*************************************************
    nama file :session.php
    halaman ini merupakan halaman contoh penciptaan session.
     perintah session_start() harus ditaruh di perintah pertama
     tanpa spasi di depanya.
     perintah session_start() harus ada pada setiap halaman
     yang berhubungan dengan session 

     **************************************************/
     
     session_start();

    $_SESSION['nama'] = "Achmad Solichin";
    echo "<a href='session02.php'>menuju halaman kedua</a>"
    
    ?>

    
</body>
</html>