<?php
    $page_name = "FRENCHESKA";

    include ("../common/db.php");


    if (!is_int($_GET["product"]))
        throw new Exception("SQL Ijection alert");

    $pdo=db_connect();

    $productid = $_GET["product"];
    $stmt = $pdo->query('SELECT * FROM products WHERE `idProducts` ='.$productid);

    $product = $stmt->fetch();
        


?>



<!DOCTYPE html>
<html lang="en">
<?php include ( "../components/page_head.php"); ?>
<body>
<?php include ( "../components/page_header.php"); ?> 
<div>
    <div class="product-content" >
                <img class="product-page-img";
                    src="https://res.cloudinary.com/frencheska/image/upload/ar_1:1,c_fill,g_auto,e_art:hokusai/w_300/<?=$product['imgkey']?>"
                >
                <div class="product-page-detailes">
                    <div>
                    <h1> <?=$product['name']?> </h1>
                    </div>
                    <hr>
                    <h2> מרכיבים: </h2>
                    <p > 
                        <?=$product['ingredients']?> 
                    </p>
                </div>
            </div>
     
</div>
<?php include ("../components/page_footer.php") ?>
</body>
</html>