<!DOCTYPE html>
<html>
<head>
    <title>İletişim Formu</title>
    <link rel="stylesheet" href="iletisimform.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Poetsen+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            padding: 20px;
            text-align: center;
            font-family: 'Open Sans', sans-serif;
            background-color: #151515;
            color: #EEEEEE;
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["ad"];
    $surname = $_POST["soyad"];
    $email = $_POST["email"];
    $gender = $_POST["cinsiyet"];
    $country = $_POST["country"];
    $message = $_POST["message"];

    echo "Ad: $name<br>";
    echo "Soyad: $surname<br>";
    echo "E-posta: $email<br>";
    echo "Cinsiyet: $gender<br>";
    echo "Ülke: $country<br>";
    echo "Mesaj: $message";

}
?>
</body>
</html>