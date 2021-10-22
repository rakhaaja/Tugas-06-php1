<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>

<?php

if(isset($_COOKIE['username'])) {
    echo "<h1>cookie 'username' ada. isinya :" .$_COOKIE
    ['username']."</h1>";

} else {
    echo "<h1>cookie 'username' tidak ada.</h1>";
}
if(isset($_COOKIE['namalengkap'])) {
    echo "<h1>cookie 'namalengkap' ada. isinya : " . $_COOKIE
    ['namalengkap']. "</h1>";
} else {
    echo "<h1>cookie 'namalengkap' tidak ada.</h1>";
} 

 echo "<h2>klik <a href='cookie01.php'>disini</a> untuk
 penciptaan cookies</h2>";



?>
    
</body>
</html>