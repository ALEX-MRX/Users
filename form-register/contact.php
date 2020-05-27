<?php 

session_start();
   
    $id_contact = $_POST['id_contact'];
    $id_users = $_POST['id_users'];
    $content = $_POST['content'];

    $phoneNumber = $_POST['phoneNumber'];
    $street = $_POST['street'];
    $mail = $_POST['mail'];

    require "connect.php";
    $mysql->query("INSERT INTO `contacts` (`id_user`, `id_contact`, `content`, `phoneNumber`, `street`, `mail`) VALUES('$id_users', '$id_contact', '$content', '$phoneNumber', '$street', '$mail')");
    $mysql->close();
?>

<p>fheawui</p>