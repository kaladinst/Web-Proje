<!DOCTYPE html>
<html>
<head>
    <title>Giriş Sayfası</title>
    <link rel="stylesheet" href="form.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        h1 {
            font-family: 'Oswald', sans-serif;
            font-size: 30px;
            color: #DFD0B8;
            text-align: center;
            margin-top: 20%;
        }
    </style>
</head>
<body>
    <?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gercekemail = "g231210004@sakarya.edu.tr";
    $gercekpassword = "g231210004";

    if($email == $gercekemail && $password == $gercekpassword){
        echo "<h1>Giriş Başarılı.Hoşgeldiniz G231210004 <br> <br> Anasayfaya yönlendiriliyorsunuz.</h1>";
        echo "<script>setTimeout(function(){window.location.href='index.html'}, 3000);</script>";
    }
    else{
        echo "<h1>E-mail veya şifre hatalı!. Lütfen tekrar deneyiniz.</h1>";
        echo "<script>setTimeout(function(){window.location.href='login.html'}, 3000);</script>";
    }
    ?>
</body>
</html>