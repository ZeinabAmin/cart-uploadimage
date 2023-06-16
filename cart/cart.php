<?php
session_start();
$cartItems = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];

// if (isset($_SESSION['cart'])) {
//     $cartItems = $_SESSION['cart'];
// } else {
//     $cartItems = [];
// }
?>
<?php
require_once "inc/header.php";
require_once "inc/navbar.php";
?>
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-md-2 offset-md-3">
            <h3>your cart items:</h3>
            <?php foreach ($cartItems as $cartItem) { ?>
                <p><?php echo $cartItem ?></p>
            <?php } ?>
        </div>
    </div>
</div>

<?php
require_once "inc/footer.php";
?>