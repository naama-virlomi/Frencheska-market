<?php
    function echo_product($classname,$product,$modal=null) {


        // foreach ($product as $key => $value) {
        //     echo $key.":".$value."<br>";
        // }
        ?>
        
        <div class="<?=$classname?> product" >
            <?php if ($modal) {
                ?>
                    <label for="modal-<?$product['id']?>" class="open-modal"></label>
                <?php
            }?>
            <a href="product.php?product=<?=$product['idProducts']?>">
            <div class="product-title">
                <?=$product['name']?>
            </div>
            <img class="product-img";
                src="https://res.cloudinary.com/frencheska/image/upload/ar_1:1,c_fill,g_auto,e_art:hokusai/w_300/<?=$product['imgkey']?>"
            >
            </a>
        </div>
        <?php
    }


    function echo_modal_product($product) {
        ?>

        <input type="checkbox" id="modal-<?$product['id']?>" class="modal-check" />
        <div class="modal">
        <!-- the overlay will enable to close the dialog by pressing outside -->
            <label for="show-modal" class="overlay"></label>
            <!-- the dailog window it self -->   
            <div class="modal-content">
        <!--  put the dailog contant hear -->
        <!--  label.close is nessery for closing but you can change the contant -->
        <label class="close" for="show-modal">&times;</label>
     
            <div class="show-modal" >
                <img class="modal-product-img";
                    src="https://res.cloudinary.com/frencheska/image/upload/ar_1:1,c_fill,g_auto,e_art:hokusai/w_300/<?=$product['imgkey']?>"
                >
                <div class="modal-product-detailes">
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
        </div>

        <?php
    }
?>