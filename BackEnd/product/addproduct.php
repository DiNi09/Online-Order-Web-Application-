<?php
require_once('../core.php');
$name = $_POST['Txtname'];
$des =  $_POST['Txtdes'];
$price = $_POST['Txtprice'];

$sql = $connect->query("INSERT INTO `product` (`PID`, `Name`, `Description`, `Price`, `Stock`) VALUES (NULL, '$name', '$des', '$price', '0');");
//check did this insert
if ($sql === true) {
    $prodsql = $connect->query("SELECT * FROM `product`");
    if ( $prodsql->num_rows > 0) {
        while ($row =  $prodsql->fetch_array()) {
            $pid = $row['PID'];
        } 

    }

    if (count($_FILES["file"]["name"]) > 0) {
        for ($count = 0; $count < count($_FILES["file"]["name"]); $count++) {
            $file_name = $_FILES["file"]["name"][$count];
            $tmp_name = $_FILES["file"]['tmp_name'][$count];

            $location = 'upload/' . $file_name;
            $Types = array('jpg', 'png', 'jpeg');

            $pathType = pathinfo($tmp_name, PATHINFO_EXTENSION);

            if (move_uploaded_file($tmp_name, $location)) {
                $imgsql = $connect->query("INSERT INTO `pimage` (`ImgID`, `PID`, `Image`, `Dis`) VALUES (NULL, '$pid', '$location', 'des');");
            }
        }
    }
    echo'success';
} else {
    echo 'error';
}
