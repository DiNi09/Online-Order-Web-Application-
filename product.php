
<!--this for the css -->

<link rel="stylesheet" href="./custom/css/style.css">


<div class="mainregclass">
    <form action="./BackEnd/product/addproduct.php" method="POST" id="form1" enctype="multipart/form-data" style="margin-left: auto; margin-right: auto;">
        
        <input type="text" name="Txtname" id="Txtname" placeholder="Product Name">
        <br><br>

        <input type="text" name="Txtdes" id="Txtdes" placeholder="type something...">
        <br><br>
        
        <input type="text" name="Txtprice" id="Txtprice" placeholder="price">
        <br><br>
       
        <input type="text" name="Txtstock" id="Txtstock" placeholder="stock">
        <br><br>
  <!--multiple =get multiple photos at onece -->
        <input type="file" name="file[]" id="multiImage_file" multiple>
        <br>
        <input type="submit" name="SubmitBtn" id="SubmitBtn" value="Submit Order">
    </form>

</div>



<script src="./custom/js/register.js"></script>
<?php require_once './Includes/footer.php' ?>