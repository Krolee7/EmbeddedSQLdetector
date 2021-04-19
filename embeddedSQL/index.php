    <?php
session_start();

    include("connection.php");
    include("function.php");

    $user_data = check_login($con);
        
 ?>

<!DOCTYPE html>
<html>
<head>
    <title> Web based Embedded SQL detector </title>
    <style>
    body
	{
        background: url('<?php $a = array('picture/thumb.jpg','picture/thumb3.jpg','picture/thumb4.jpg','picture/thumb5.jpg'); echo $a[array_rand($a)];?>');
        font-family: Verdana, serif;
		
        
    }
    </style>

</head>

<body>
    <a href="logout.php">Logout</a>
	<br><br>
	<div class="row justify-content-center">
    <div class="col-md-6">
    <br><br><br><br>
        <h1 class="row justify-content-center" style="color:yellow;"> Welcome to 2nd Test </h1>
    </div>
</div>

    <br><br>

<form method="post">

<label class="row justify-content-center" style="color:white">Search</label>
<input type="text" name="search" style="color:white;" >
<input type="submit" name="submit" style="color:blue;">
	
</form>


</body>

</html>


