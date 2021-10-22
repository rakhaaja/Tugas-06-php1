<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php 
        if (isset($_GET['nama']) AND isset($_GET['email'])) 
        {
            $nama =$_GET['nama'];
            $email =$_GET['email'];
        }        
        else
        {
            echo "maaf, anda harus mengakses halaman ini dari form.html<br><br>";
        }

        if (!empty($nama))
        {
            echo "nama : $nama <br/> email : $email";
        }
        else
        {
            die("maaf, anda harus mengisi nama");
        }

    
    
    ?>
    
</body>
</html>