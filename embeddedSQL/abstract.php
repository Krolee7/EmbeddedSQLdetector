<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <style>
          body{
              background: url('<?php $a = array('picture/thumb.jpg','picture/thumb3.jpg','picture/thumb4.jpg','picture/thumb5.jpg'); echo $a[array_rand($a)];?>');
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
<nav class="navbar navbar-expand-lg navbar-light bg-blue">
  <div class="container-fluid">
  
    </button>
    <div class="collapse navbar-collapse text-primary" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="abstract.php">Abstract</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light"  href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
          Testing phase
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="login.php">Test 1</a></li>
            <li><a class="dropdown-item" href="Searchbox/index.php">Test 2</a></li>
          </ul>
          <li class="nav-item">
          <a class="nav-link text-light" href="analysis.php">Analysis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="future.php">Future Work</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>

<div class="row justify-content-center">
    <div class="col-md-4">
        <h1 class="row justify-content-center" style="color:yellow;"> Abstract</h1>
    
        <p1 element style="color:white;">Lack of secure codes implemented in the web apps is a vulnerability that will lead to cyber-attack. Statistic shows highest record of the cyber-attack are by using SQL injection technique.
         Hence, an effective embedded SQL injection detector into web system is essential to counter this threat. This research focuses on the detection by comparing the text that user put in the parameter of web system with signature based inside the detector. 
         This negative selection technique research relies on the signature-based detection. The dataset used is divided into two parts. First, the testing dataset it used to evaluate the performance of the detector. Second, the results of the evaluation indicated that the proposed technique has the ability to detect malicious and benign web requests with high accuracy. The aim at the end of this project is to evaluate the performance of classifier. </element> </p1>
    </div>
</div>
<br><br><br><br>
<div class="d-grid gap-10 col-2 mx-auto">

  <button class="btn btn-primary" type="button" >Start</button>
  
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>



</body>
</html>