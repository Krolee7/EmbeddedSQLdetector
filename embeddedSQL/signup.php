<?php
session_start();

    include("connection.php");
    include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST" )
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
			
			mysqli_query($con, $query);

			header("Location: login.php");
			die;

		}else
		{
			echo "Please enter some valid information!";
		}
	}

    

?>


<html>
<head>
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">  

<body>


    <style type="text/css">
    #text{

            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;

        }

    #button{

        padding: 10px;
        width: 100px;
        color: white;
        background-color: blue;
        border: none;
        

    }

    #box{

        background-color: whitesmoke;
        margin: auto;
        width: 300px;
        padding: 20px;
    }

    </style>

    <br><br><br><br>

    <div id="box">

        <form method="post">
            <div style="font-size: 30px;margin: 10px;color: black;">Add user</div>

            <input id="text" type="text"    name="user_name"><br><br>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="Register"><br><br>
            
            <a href="login.php">Click to login ! </a><br><br>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
    </html>
