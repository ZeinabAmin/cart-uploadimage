<?php
session_start();
require_once "inc/header.php";
require_once "inc/navbar.php";
?>

<?php
$products = [
    [
        "name" => "iphone",
        "price" => "20000",
        "image" => "1.png",
    ],
    [
        "name" => "samsung",
        "price" => "10000",
        "image" => "2.png",
    ],
    [
        "name" => "sony",
        "price" => "20000",
        "image" => "3.jpg",
    ],
];
?>

<div class="container-fluid pt-4">

    <div class="row">
        <?php foreach ($products as $product) { ?>
            <div class="col-md-3">
                <div class="card">
                    <img src="uploads/<?php echo $product['image'] ?>" alt="" width="200" height="200" class="card-img-top">

                    <div class="card-body">

                        <h1 class="card-title"><?php echo $product['name'] ?></h1>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $product['price'] ?></h6>
                        <a href="handlers/handle-add-cart.php?productname=<?php echo $product['name'] ?>" class="btn btn-success">Add to cart</a>


                    </div>

                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php
require_once "inc/footer.php";
?>