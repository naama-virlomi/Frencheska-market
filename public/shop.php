<?php
    $page_name = "FRENCHESKA";

    include ("../common/db.php");

?>



<!DOCTYPE html>
<html lang="en">
<?php include ( "../components/page_head.php"); ?>
<body>
<?php include ( "../components/page_header.php"); ?> 
<div>
    <h1> המוצרים שלנו </h1>
    <div class="products">
        <?php
        $pdo=db_connect();

        $stmt = $pdo->query('SELECT * FROM products WHERE `recomnded` = 1');

        while ($row = $stmt->fetch())
        {
            echo_product("md",$row['name'],$row['flags'],$row['imgkey']);
        }
        ?>
    </div>
</div>
<?php include ("../components/page_footer.php") ?>
</body>
</html>