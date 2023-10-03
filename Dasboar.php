<?php

//var_dump($_POST['username']);
//var_dump($_POST['Password']);

if (!empty($_POST['username']) && !empty($_POST['Password'])) {
    //apa yang akan dilakukan
    $username = "aaa";
    $Password = "123"; 

    if ($_POST['username'] == $username && $_POST['Password'] == $Password) {
        echo "<h1>Selamat datang di Dasboard</h1>"; 
    } else {
        //maka akan kembali ke halaman login
        header('Location: Login.php');
    }
} else {
    //maka akan kembali ke halaman login
    header('Location: Login.php');}
?>