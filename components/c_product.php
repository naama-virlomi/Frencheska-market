<?php
    function echo_product($classname,$product,$modal=null) {


        // foreach ($product as $key => $value) {
        //     echo $key.":".$value."<br>";
        // }


        ?>
        
        <div class="<?=$classname?> product" onclick="setModalProduct(<?=$product['idProducts']?>)" >
           
            <div class="product-title">
                <?=$product['name']?>
            </div>
            <img class="product-img";
                src="https://res.cloudinary.com/frencheska/image/upload/ar_1:1,c_fill,g_auto,e_art:hokusai/w_300/<?=$product['imgkey']?>"
            >
           
        </div>
        <?php
    }


    function echo_modal_product($product) {
        ?>

        <input type="checkbox" id="show-modal" class="modal-check" />
        <div class="modal">
        <!-- the overlay will enable to close the dialog by pressing outside -->
            <label for="show-modal" class="overlay"></label>
            <!-- the dailog window it self -->   
            <div class="modal-content">
            
            </div>
        </div>

        <?php
    }
?>