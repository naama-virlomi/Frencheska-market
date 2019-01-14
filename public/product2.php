<?php
    $page_name = "FRENCHESKA";

    include ("../common/db.php");


    // if (!is_in($_GET["product"])){
    //     throw new Exception("SQL Ijection alert");
    // }

    $pdo=db_connect();

    $productid = $_GET["product"];
    $stmt = $pdo->query('SELECT * FROM products WHERE `idProducts` ='.$productid);

    $product = $stmt->fetch();

?>



<div>
    <label for="show-modal" class="close_modal">&times;</label>
    <div class="product-modal-content" >
                <img class="product-modal-img";
                    src="https://res.cloudinary.com/frencheska/image/upload/ar_1:1,c_fill,g_auto,e_art:hokusai/w_300/<?=$product['imgkey']?>"
                >
                <div class="product-modal-detailes">
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
