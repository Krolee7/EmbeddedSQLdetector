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

          /* .navbar
          {
            color:"blue";
          } */
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

<br><br>
<div class="row justify-content-center">
    <div class="col-md-4 justify-content-center">
        <h1 class="row justify-content-center" style="color:yellow;"> Abstract</h1>
        <div class="container text-white">
        <p style="text-align:justify">Lack of secure codes implemented in the web apps is a vulnerability that will lead to cyber-attack. Statistic shows highest record of the cyber-attack are by using SQL injection technique.
         Hence, an effective embedded SQL injection detector into web system is essential to counter this threat. This research focuses on the detection by comparing the text that user put in the parameter of web system with signature based inside the detector. 
         This n-gram sequence relies on the signature-based detection. The dataset used is divided into two parts. First, the SQL detector will be embedded on the login page because the login  is a door that users must open in order to get the best out of their user experience with a website.
         Second, the results of the evaluation indicated that the proposed technique has the ability to detect malicious and benign web requests with high accuracy. The aim at the end of this project is to evaluate the number of SQL injection input that has been detected by embedded SQL detector.</p>
        </div>
      
    </div>
</div>
<br>
<div class="d-grid gap-10 col-2 mx-auto">

<a class="btn btn-primary" href="login.php" role="button">Start</a>
  
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>



</body>
</html>