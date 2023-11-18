<?php

$pageTitle = 'Home';

include 'includes/config.php';
include 'includes/header.php';
?>

<div class="banner">
    <div class="content">
        <h2>Mobile Store</h2>
        <p>
            Visit Mobile Store today and embark on a journey into the world of mobile technology, where innovation meets service, and your satisfaction is our commitment.
        </p>
        <a href="" class="btn">shop now</a>
    </div>
</div>

<div class="container">

    <div class="products">

        <h1 class="heading">latest products</h1>

        <div class="box-container">

            <?php
            $select_product = mysqli_query($conn, "SELECT * FROM `products`") or die(mysqli_error($conn));
            if (mysqli_num_rows($select_product) > 0) {
                while ($fetch_product = mysqli_fetch_assoc($select_product)) {
            ?>
                    <form method="post" class="box" action="">
                        <img src="<?php echo $fetch_product['image']; ?>" alt="">
                        <div class="name"><?php echo $fetch_product['name']; ?></div>
                        <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
                        <input type="number" min="1" name="product_quantity" value="1">
                        <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                        <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                    </form>
            <?php
                };
            };
            ?>

        </div>

    </div>



</div>


<?php
include 'includes/footer.php';
?>