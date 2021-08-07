
<?php

include 'controllers/CategoryController.php'


?>

<div>
<h4><?php echo $err_db;  ?></h4>

<form action="" method="post">
<div>

<h4>Name</h4>
<input type="text" name="name" value="<?php echo $name; ?>">
<span> <?php echo $err_name; ?> </span>
</div>


<div>
<br>
<input type="submit" name="add_category" value="Add Category">

</div> 


</form>


</div>