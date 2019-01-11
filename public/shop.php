<?php
    $page_name = "FRENCHESKA";

    include ("../common/db.php");
    
?>




<!DOCTYPE html>
<html lang="en">

<?php 
$page_name = "SHOP";
$links = '<link rel="stylesheet" href="./styles/shop.css">';
include ( "../components/page_head.php"); ?>
<body>
<?php include ( "../components/page_header.php"); ?> 
<div>
    <h1> המוצרים שלנו </h1>
    <div class="products">
        <?php
        $pdo=db_connect();

        $stmt = $pdo->query('SELECT * FROM products ');

        while ($row = $stmt->fetch())
        {
            echo_product("medium",$row);
        }
        ?>
    </div>
</div>
<?php include ("../components/page_footer.php") ?>
<input type="checkbox" id="show-modal" class="modal-check" />
    <div class="modal">
      <!-- the overlay will enable to close the dialog by pressing outside -->
      <label for="show-modal" class="overlay"></label>
      <!-- the dailog window it self -->   
      <div class="modal-content">
        <!--  put the dailog contant hear -->
        <!--  label.close is nessery for closing but you can change the contant -->
        <label class="close" for="show-modal">&times;</label>
      </div>
    </div>
</body>
</html>