<?php
session_start();
include('config.php');

function loginverify()
{
    //isset=check the undifind
    //if=check the session data have or not
    if (isset($_SESSION['userId']) && ($_SESSION['Active'] == 'active')) {
        return true;
    } else {

        return false;
    }
}
function activechk(){
    if (isset($_SESSION['userId']) && ($_SESSION['Active'] == 'Non')) {
        return true;
    } else {

        return false;
    }
}