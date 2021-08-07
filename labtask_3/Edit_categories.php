<?php
include 'controllers/CategoryController.php';
$id = $_GET["id"];
$c = getCategory($id);



?>

<html>
  <body>
  <h4 class="text-danger"><?php echo $err_db;  ?></h4>
    <form action="" method="POST">
      <p><h4>Name:</h4>
      <input type="hidden" name="id" value="<?php echo $c["id"];?> ">
      <input type="text" name="name" value="<?php echo $c["name"];?> ">
      </p>

      <p><input type="submit" name="edit_category" value="Edit Category"> </p>
    </form>
  </body>
</html>