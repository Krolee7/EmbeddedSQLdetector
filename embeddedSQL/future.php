<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <style>
    body{
        background: url('<?php $a = array('picture/thumb3.jpg'); echo $a[array_rand($a)];?>');
        font-family: Verdana, serif;
        
    }
    </style>
      
</head>
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
        <li class="nav-item">
          <a class="nav-link" href="login.php">Testing phase</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="chart.php">Analysis</a>
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

<br><br><br><br>
<div class="row justify-content-center">
    <div class="col-md-4 justify-content-center">
        <h1 class="row justify-content-center" style="color:yellow;"> Future Work</h1>
        <br><br>
        <div class="container text-white">
        <p style="text-align:justify">Build an application tool that can scan all the logfiles from the web requests and if have any suspicious request, this tool can block the IP address of user by using remote control</p>
        </div>
       
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>



</body>
</html>


