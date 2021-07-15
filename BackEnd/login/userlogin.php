<?php
include('../core.php');
if ($_POST) {
    $out = "";

    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];

    $chkmail = $connect->query("SELECT * FROM `users` WHERE `Email` = '$email'");
    if ($chkmail->num_rows == 1) {
//Authorize virfication
        $mainSql = $connect->query("SELECT * FROM 'users' WHERE 'Email' = '$email' AND 'Password' = '$password'");
        if ($mainSql->num_rows == 1) {
            $value = $mainSql->fetch_assoc();
            $_SESSION['userId'] = $value['ID'];
            $_SESSION['Type'] = $value['Type'];
            $_SESSION['Active'] = $value['Active'];
            //location
            header('location: ../../index.php');
        } else {
            $out = "password is incorrect";
        }
    } else {
        $out = "email is not in system";
    }
}
echo ($out);
