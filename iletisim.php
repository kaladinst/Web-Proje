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