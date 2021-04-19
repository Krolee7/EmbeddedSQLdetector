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
          <a class="nav-link text-light" href="chart.php">Analysis</a>
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
        <h1 class="row justify-content-center" style="color:yellow;"> Analysis</h1>
     
    </div>
</div>
<br><br><br><br>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Non SQL injection',     2],
          ['SQL injection',     11],
          
        ]);

        var options = {
          title: 'Malware Activities Analysis'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>



</body>
</html>