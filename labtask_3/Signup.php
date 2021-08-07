<?php

include 'controllers/UserController.php';

?>




<div>
<h1> Sign Up</h1>
<h4><?php echo $err_db;  ?></h4>
<form action="" method="post">
<div>

<h4>Name</h4>
<input type="text" name="name" value="<?php echo $name; ?>">
<span> <?php echo $err_name; ?> </span>
</div>

<div>
<h4>Username</h4>
<input type="text" name="username" value="<?php echo $username; ?>">
<span><?php echo $err_username; ?></span>
</div>

<div>
<h4>Email</h4>
<input type="text" name="email" value="<?php echo $email; ?>">
<span> <?php echo $err_email; ?> </span>
</div>


<div>
<h4>Password</h4>
<input type="password" name="password" value="<?php echo $password; ?>">
<span> <?php echo $err_password; ?> </span>
</div>


<div>
<br>
<input type="submit" name="sign_up" value="Sign Up">

</div> 


</form>


</div>