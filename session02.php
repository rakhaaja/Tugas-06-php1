<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php session_start();
    
    echo "nama anda adalah".$_SESSION['nama'];
    echo "</br><a href='session01.php'>kembali ke halaman pertama</a> "
    ?>
    
</body>
</html>