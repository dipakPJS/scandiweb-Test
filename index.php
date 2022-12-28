<?php
/*  ==== including autoload php function ====== */
include("includes/class-autoload.inc.php");
 /* ====== including header file ====== */
require_once("templates/header.php");


?>


<!-- container section starts -->

<div class="container">

    <form action="post.process.php" method="post">

        <!-- navbar section starts -->

        <nav class="navbar">
            <h1>Product list</h1>

            <div class="btn-section">

                <a href="product-add.php">ADD</a>

                <button type="submit" id="delete-product-btn" name="delete_product">MASS DELETE</button>

            </div>
        </nav>

        <!-- navbar section ends -->

        <div class="product-list-section">

            <div class="product-item-list">

                <!-- ========= Product item section starts ========= -->

                <!-- fetching the data from database -->

                <!-- initiating object of class -->

                <?php $post = new post(); ?>

                <?php if ($post->getProduct()) { ?>
                    <?php foreach ($post->getProduct() as $posts) {

                        $id  = $posts['id'];
                        $sku = $posts['sku'];
                        $name = $posts['name'];
                        $price = $posts['price'];
                        $size = $posts['size'];
                        $weight = $posts['weight'];
                        $height = $posts['height'];
                        $width = $posts['width'];
                        $length = $posts['length'];

                    ?>

                        <div class="main-product-item">

                            <input type="checkbox" class="delete-checkbox" name="selector[]" value="<?= $id ?>">
                            <p><?= $sku; ?></p>
                            <p><?= $name; ?></p>
                            <p><?= $price; ?>.00 $</p>

                            <?php

                            if ($size > 0) {

                                echo "<p>Size: $size MB <p>";
                            } else if ($weight > 0) {

                                echo "<p>Weight: $weight KG</p>";
                            } else if ($height > 0 && $width > 0 && $length > 0) {

                                echo "<p> Dimensions: $height x $width x $length </p>";
                            }


                            ?>


                        </div>


                <?php    }

                }
                
                else {


                    echo "<p class = 'empty-post'>Post is empty.</p>";
                }
                ?>




                <!-- ========= Product item section ends ========= -->

            </div>

        </div>

    </form>

   <?php require_once("templates/footerframe.php"); ?>

</div>

<!-- container section ends -->



<?php require_once("templates/footer.php"); ?>