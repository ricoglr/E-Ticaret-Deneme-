<?php
/*
ob_start();
session_start();

require 'baglan.php';

    $mail = $_POST["mail"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!$username){
        echo "Kullanıcı Adını Giriniz";
    }elseif(!$password){
        echo "Şifrenizi Giriniz";
    }else{
        $kullanici_sor = $db ->prepare('INSERT INTO uyeler SET user_name=?, user_password=?, user_mail=? ');
        $kullanici_sor->execute([
            $username, $password
        ]);

        $say = $kullanici_sor->rowCount();
        if ($say==1){
            $_SESSION['username']= username;
            echo "Başarıyla Giriş Yaptınız, Yönlendiriliyorsunuz";
            header('Refresh:2; index.php');
        }else{
            echo "Bir Hata Oluştu Kontrol Edin";
        }

}

?>

