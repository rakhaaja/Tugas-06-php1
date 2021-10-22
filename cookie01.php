<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <?php
    $value = 'achmatim';
    $value2 = 'achmad solichin';

    setcookie("username", $value);
    setcookie("namalengkap", $value2, time()+3600);

    echo "<h1>ini halaman pengesetan cookie</h1>";
    
    echo "<h2>klik<a href='cookie02.php'>disini</a>untuk pemeriksaan cookies</h2>"
    
    ?>
    
</body>
</html>