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
        //read from database
        $query = "select * from users where user_name = '$user_name' limit 1";
        
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

            $user_data = mysqli_fetch_assoc($result);
            
                if($user_data['password'] === $password)
                {

                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location:Searchbox/index.php");
                die;
                echo "Welcome to test 2!";
                }

            }
        }
        echo "Wrong username or password!";
    }else
    {
        echo "Wrong username or password!";
    }
}


    

?>


<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Login</title>

<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-white bg-white">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="abstract.php">Abstract</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Testing phase
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="login.php">Test 1</a></li>
            <li><a class="dropdown-item" href="#">Test 2</a></li>
          </ul>
          <li class="nav-item">
          <a class="nav-link" href="#">Analysis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="future.php">Future Work</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>

<h1> Test 1 : Login Page </h1>


<div class="d-grid gap-10 col-3 mx-auto">

  <button class="btn btn-primary" type="button" >Analysis</button>

  
</div>
          
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

    <div id="box">

        <form method="post">
            <div style="font-size: 30px;margin: 10px;color: black;">Login</div>

            <input id="text" type="text"    name="user_name"><br><br>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="Submit"><br><br>
            
            <a href="signup.php">Add user </a><br><br>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


    <div fan="ok">
    <div class="d-grid gap-10 col-6 mx-auto">
  <button class="btn btn-primary" type="button">Add Knowlegde Base</button>
  
</div>



    </body>
    </html>
