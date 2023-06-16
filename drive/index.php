<?php
require_once "inc/header.php";
require_once "inc/navbar.php";
?>

<?php
$dir = "uploads/";
$images  = scandir($dir);
// echo "<pre>";
// print_r($images);
// echo "</pre>";
$images = array_slice($images, 2);

?>
<div class="container-fluid pt-4">

    <div class="row">
        <?php foreach ($images as $image) { ?>
            <div class="col-md-2">
                <div class="card">

                    <img src="uploads/<?php echo $image; ?>" alt="" width="200" height="200" class="card-img-top">
                    <div class="card-body">
                        <a href="uploads/<?php echo $image; ?>" class="btn btn-sm btn-primary" download="">Download</a>
                    </div>

                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php
require_once "inc/footer.php";
?>