<?php
    function echo_product($prefix,$product) {
        ?>
        <div class="<?=$prefix?>-product" >
            <div class="<?=$prefix?>-product-title">
                <?=$product['name']?>
            </div>
            <img class="<?=$prefix?>-product-img";
                src="https://res.cloudinary.com/frencheska/image/upload/ar_1:1,c_fill,g_auto,e_art:hokusai/w_300/<?=$product['imgkey']?>"
            >            
        </div>
        <?php
    }



?>