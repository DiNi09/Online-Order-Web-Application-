<?php
//adduser.php
include('../core.php');
if ($_POST) {
    $out = "";
    $fname = $_POST['txtFname'];
    $lname = $_POST['txtLname'];
    $email = $_POST['txtEmail'];
    $contactnumber = $_POST['txtCnumber'];
    $address = $_POST['txtAddress'];
    //prevent sql injection code
    $password =mysqli_real_escape_string ($connect,$_POST['txtPassword']);

    $today = date('Y-m-d');
    $activecode = rand(1000, 10000);

    $chkmail = $connect->query("SELECT * FROM `users` WHERE `Email` = '$email'");
    if ($chkmail->num_rows == 0) {
        $sql = $connect->query("INSERT INTO `users` (`ID`, `FName`, `LName`, `Email`, `CNumber`, `Address`, `Password`, `Type`, `Active`, `ActiveCode`, `RegDate`) VALUES (NULL, '$fname', '$lname', '$email', '$contactnumber', '$address', '$password', 'normal', 'Non', '$activecode', '$today');");
        if ($sql === true) {
            $out = 'Sucess';
            $mainSql = $connect->query("SELECT * FROM users WHERE Email = '$email' AND password = '$password'");
            if ($mainSql->num_rows == 1) {
                $value = $mainSql->fetch_assoc();
                $_SESSION['userId'] = $value['ID'];
                $_SESSION['Type'] = $value['Type'];
                $_SESSION['Active'] = $value['Active'];
            }
        } else {
            $out = 'false';
        }
    } else {
        $out = "This mail allready taken";
    }

    echo ($out);
}
