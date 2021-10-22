<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP-2</title>
</head>
<body>
    
    <?php
      print ("<b>Perulangan</b>");
      echo ("</br>");
      echo ("</br>");
      date_default_timezone_set('Asia/Jakarta');
      echo date('d-m-Y H:i:s');

      echo ("</br>");
      echo ("</br>");
      $jumlah = 6;
      echo ("</br>");
      for($a=1; $a<=$jumlah; $a++){
          for($c=$jumlah; $c>=$a; $c-=1){
              echo '*';
          }
          echo ("</br>");
      }    

    
    ?>
    
</body>
</html>