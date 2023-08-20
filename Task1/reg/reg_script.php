<?php
    require_once('../boot.php');
    if (isset($POST['login']) && isset($_POST['password']))
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $sql = "INSERT INTO users(login, password) VALUES ('$login', '$password')";
        $stmt = get_mysqli()->query($sql);
        header("Location: ../login/login.php");
    }
?>