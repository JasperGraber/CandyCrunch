<?php
// start session
session_start();
?>

<div class="container-fluid px-0">
    <div class="banner">
        <?php
        if (isset($_SESSION["email"])) {
            switch ($_SESSION["userrole"]) {
                case 'user':
                    echo '<a href="./index.php?content=user/u-home"><img src="/img/brand.png" alt="Brand name"></a>';
                    break;
            }
        } else {
            echo '<a href="./index.php?content=home"><img src="/img/brand.png" alt="Brand name"></a>';
        }
        ?>
    </div>
</div>