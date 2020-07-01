<div class="container">
    <div class="row">
        <?php

        $connect = mysqli_connect('localhost', 'root', '', 'cart');
        $query = 'SELECT * FROM products ORDER BY id ASC';
        $result = mysqli_query($connect, $query);

        // dit loopt door alle data uit $result
        if ($result) :
            if (mysqli_num_rows($result) > 0) :
                while ($product = mysqli_fetch_assoc($result)) :
                    // print_r($product);

        ?>
                    <div class="col-3">
                        <form method="post" action="index.php?content=cart&id=<?php echo $product["id"]; ?>">
                            <div class="products">
                                <img src="<?php echo $product["image"]; ?>" class="img-responsive" width="50%" />
                                <h4 class="text-info"><?php echo $product["name"]; ?></h4>
                                <div style="position: absolute; bottom:16px;">
                                    <h4>$ <?php echo $product["price"]; ?></h4>
                                    <input type="text" name="quantity" class="form-control" value="1" />
                                    <input type="hidden" name="name" value="<?php echo $product["name"]; ?>" />
                                    <input type="hidden" name="price"  value="<?php echo $product["price"]; ?>" />
                                    <input type="submit" name="add_to_cart" style="margin-top:5px" class="btn btn-info" value="Add to cart" />
                                </div>
                            </div>
                        </form>
                    </div>
        <?php
                endwhile;
            endif;
        endif;
        ?>
    </div>


    <style>
        .products {
            margin-top: 10px;
            position:relative;
            height: 320px;
            border: 1px solid #333;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 16px;
            margin-bottom: 20px;
        }
    </style>