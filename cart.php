<?php
$product_ids = array();

// chek of de add-to-cart knop ingedrukt wordt
if (filter_input(INPUT_POST, 'add_to_cart')) {
    if (isset($_SESSION['shopping_cart'])) {

        //houd bij hoeveel producten er in de shopping cart zitten
        $count = count($_SESSION['shopping_cart']);

        // vergelijk array keys naar product id's
        $product_ids = array_column($_SESSION['shopping_cart'], 'id');

        if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)) {
            $_SESSION['shopping_cart'][$count] = array(
                'id' => filter_input(INPUT_GET, 'id'),
                'name' => filter_input(INPUT_POST, 'name'),
                'price' => filter_input(INPUT_POST, 'price'),
                'quantity' => filter_input(INPUT_POST, 'quantity')
            );
        } else { // als het product al bestaat verhoog quantity
            // match array key naar het id van het product die toegevoegd wordt aan de cart
            for ($i = 0; $i < count($product_ids); $i++) {
                if ($product_ids[$i] == filter_input(INPUT_GET, 'id')) {
                    // voeg item quantitiy toe aan het bestaande product in de array
                    $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }
    } else { // als de shopping cart niet bestaat, maak eerste product met array key 0
        // array wordt gemaakt door form data, start vanaf key 0 en full met values
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
    //loop door alle producten in de shopping cart totdat het matcht met get id variable
    foreach ($_SESSION['shopping_cart'] as $key => $product_ids) {
        if ($product_ids['id'] == filter_input(INPUT_GET, 'id')) {
            //verwijder product van de shopping cart als het matcht met get id
            unset($_SESSION['shopping_cart'][$key]);
        }
    }
    // reset session array keys zo dat ze matchen met $product_ids numerishe array
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
                <?php endif;
                endif; ?>
            </td>
        </tr>
    </table>
</div>

<h5 style="text-align:center;">Terug naar de <a href="index.php?content=shop">webshop</a>.</h5>