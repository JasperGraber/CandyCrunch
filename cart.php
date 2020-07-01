<?php
$product_ids = array();


// chek if add-to-cart button has been submitted
if (filter_input(INPUT_POST, 'add_to_cart')) {
    if (isset($_SESSION['shopping_cart'])) {

        //keep track of how many products are in the shopping cart
        $count = count($_SESSION['shopping_cart']);

        // matching array keys to product id's
        $product_ids = array_column($_SESSION['shopping_cart'], 'id');

        if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)) {
            $_SESSION['shopping_cart'][$count] = array(
                'id' => filter_input(INPUT_GET, 'id'),
                'name' => filter_input(INPUT_POST, 'name'),
                'price' => filter_input(INPUT_POST, 'price'),
                'quantity' => filter_input(INPUT_POST, 'quantity')
            );
        } else { // product already exists, increase quantity
            // match array key to id of the product being added to the cart
            for ($i = 0; $i < count($product_ids); $i++) {
                if ($product_ids[$i] == filter_input(INPUT_GET, 'id')) {
                    // add item quantity to the existing product in the array
                    $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }
    } else { // if shopping cart doesnt exist, create first product with array key 0
        // creating array using submitted form data starting from key 0 and fill it with values
        $_SESSION['shopping_cart'][0] = array(
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
    }
}

// chekck of er op remove button wordt geklikt
if (filter_input(INPUT_GET, 'action') == 'delete') {
    //loop trough all products in the shopping cart until it matches with get id variable
    foreach ($_SESSION['shopping_cart'] as $key => $product_ids) {
        if ($product_ids['id'] == filter_input(INPUT_GET, 'id')) {
            //remove product fro mthe shopping cart when it matches with get id
            unset($_SESSION['shopping_cart'][$key]);
        }
    }
    // reset session array keys so they match with $product_ids numeric array
    $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}
?>
<!-- hier wordt de table gemaakt -->
<div style="clear:both"></div>
        <br />
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th colspan="5">
                        <h3>Order Details</h3>
                    </th>
                </tr>
                <tr>
                    <th width="40%">Product Name</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price</th>
                    <th width="15%">Total</th>
                    <th width="5%">Action</th>
                </tr>
                <?php

                if (!empty($_SESSION['shopping_cart']));

                $total = 0;

                foreach ($_SESSION['shopping_cart'] as $key => $product) :

                ?>
                    <tr>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['quantity']; ?></td>
                        <td>$ <?php echo $product['price']; ?></td>
                        <td>$ <?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>
                        <td>
                            <a href="index.php?content=cart&action=delete&id=<?php echo $product['id']; ?>">
                                <div class="btn-danger">Remove</div>
                            </a>
                        </td>
                    </tr>
                <?php

                    $total = $total + ($product['quantity'] * $product['price']);
                endforeach;

                ?>
                <tr>
                    <td colspan="3" style="text-align:right">Total</td>
                    <td>$ <?php echo number_format($total, 2); ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="5">
                        <?php
                        if (isset($_SESSION['shopping_cart'])) :
                            if (count($_SESSION['shopping_cart']) > 0) :
                        ?>
                        <?php endif; endif; ?>
                    </td>
                </tr>
        </div>