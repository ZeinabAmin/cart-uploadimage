<?php
require_once "inc/header.php";
require_once "inc/navbar.php";
?>

<div class="container-fluid pt-4">
  <div class="row">
    <div class="col-md-6 offset-md-3">

      <form action="handlers/handle-upload.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="form-file" class="form-label"> Image </label>
          <input name="image" class="form-control" type="file" id="form-file">
        </div>

        <div class="mb-3">
          <label for="formText" class="form-label"> Image Name</label>
          <input name="name" class="form-control" type="text" id="formText">
        </div>
        <button class="btn btn-primary" type="submit" name="submit">upload</button>
      </form>
    </div>
  </div>
</div>

<?php
require_once "inc/footer.php";
?>