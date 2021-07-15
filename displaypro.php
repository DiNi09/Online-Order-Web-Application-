<?php
include('./BackEnd/core.php');
require_once './Includes/header.php' ?>
<br>
<?php
$sql = $connect->query("SELECT * FROM `product`");
if ($sql->num_rows > 0) {
    while ($row = $sql->fetch_array()) {
        $id = $row['PID'];
        $psql = $connect->query("SELECT * FROM `pimage` WHERE PID = '$id' LIMIT 1");
        if ($psql->num_rows > 0) {
            while ($s = $psql->fetch_array()) {
                $image = $s['Image'];
            }  

        } 
        
        $name = $row['Name'];
        
        $price = $row['Price'];
?> 

<div class="card" >
        <img src="./BackEnd/product/<?php echo $image ?>" alt="aa" width="75px" height="75px">
        <h3>Name : <?php echo $name ?></h3>
        <h3>Price : <?php echo $price ?></h3>
        


        <form action="AddCart.php?idTxt=<?php echo $id ?>" method="POST" style="margin-left: auto; margin-right: auto;">
            <input type="hidden" name="idTxt" value="<?php echo $id ?>">
            <input type="hidden" name="nameTxt" value="<?php echo $name ?>">
            <input type="hidden" name="ImageTxt" value="<?php echo $image ?>">
            <input type="hidden" name="PriceTxt" value="<?php echo $price ?>">
            <input type="text" name="QtyTxt" value="1">
            <button><input type="submit" name="SubMintBtn" id="SubMintBtn" value="Add to cart"></button>
        </form>
        <br>
        </div>
    
        <br><br><br><br> <br><br><br>
<?php
    }
}

?>


<?php require_once './Includes/footer.php' ?>