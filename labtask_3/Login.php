<?php
 include 'controllers/UserController.php';

?>



<div>
<h1> Login</h1>
<h4><?php echo $err_db; ?></h4>

<form action="" method="post">
<div>



<div>
<h4>Username</h4>
<input type="text" name="username" value="<?php echo $username; ?>">
<span><?php echo $err_username; ?></span>
</div>




<div>
<h4>Password</h4>
<input type="password" name="password" value="<?php echo $password; ?>">
<span> <?php echo $err_password; ?> </span>
</div>


<div>
<br>
<input type="submit" name="btn_login" value="Login">

</div> 

<div>
    <a href="Signup.php">Not registered yet? Sign Up</a>
</div>


</form>


</div>