<?php
    function echo_product($size,$name,$flags,$img,$ingredients=null) {
        switch ($size) {
            case "small" : 
                break;
            case "medume" :
            case "md":
                ?>
                <div class="md-product">
                    <div class="md-product-title">
                        <?=$name?>
                    </div>
                    <img 
                        src="https://res.cloudinary.com/frencheska/image/upload/ar_1:1,c_fill,g_auto,e_art:hokusai/w_300/<?=$img?>"
                    >

                </div>
                <?php
                break;
            case "big":
                break;
        }

    }

?>