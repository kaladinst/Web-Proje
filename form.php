<?php
$email = $_POST['email'];
$password = $_POST['password'];
$gercekemail = "g231210004@sakarya.edu.tr";
$gercekpassword = "g231210004";

if($email == $gercekemail && $password == $gercekpassword){
    echo "Giriş Başarılı";
}
else{
    echo "E-mail veya şifre hatalı!";
}