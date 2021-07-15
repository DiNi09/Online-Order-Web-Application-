<?php
include('BackEnd/core.php');
if(loginverify() == false){
    
    header('location: index.php');
}
require_once './Includes/header.php' ?>
<h1>Active Email</h1>

<?php  require_once './Includes/footer.php' ?>