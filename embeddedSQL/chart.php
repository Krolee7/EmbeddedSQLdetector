<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <meta charset="utf-8">
    
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

    <div id="piechart" style="width: 900px; height: 500px;"></div>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

        <?php
            include("connection.php");
            $query="SELECT count(a_attempt) as total from attempt WHERE a_attempt = 0";
            

            $result = mysqli_query($con, $query);
            $data = mysqli_fetch_assoc($result);
        ?>
            
        var fail = 
            <?php
                echo $data['total'];
            ?>;

        <?php
            $query="SELECT count(a_attempt) as suc from attempt WHERE a_attempt = 1";
            

            $result = mysqli_query($con, $query);
            $data = mysqli_fetch_assoc($result);
       ?>

        var suc = 
            <?php
                echo $data['suc'];
            ?>;

        
       
      
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Non SQL Injection',  suc],
          ['SQL Injection',  fail],
          
        ]);

        var options = {
          title: 'Malicious Code Activities Analysis'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
