
<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "login_sample_db";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM blog";

$myfile = fopen("../sql.txt", "r") or die("Unable to open file!");
$filetest = fread($myfile,filesize("../sql.txt"));

if( isset($_GET['search']) ){
	
	$title = $_GET['search'];
	
	if($title == (null || "")){
		$sql = "SELECT * FROM blog";
	}
	else if (strpos($filetest, $title) !== false) {
		header("Location:errorpage.php");
		fclose($myfile);
	}else{
		$sql = "SELECT * FROM blog WHERE blog_title ='$title'";
	}
   
}
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic Search form using mysqli</title>
<link rel="stylesheet" type="text/css"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<label>Search</label>
<form action="" method="GET">
<input type="text" placeholder="Type the name here" name="search">&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>
<h2>List of students</h2>
<table class="table table-striped table-responsive">
<tr>
<th>ID</th>
<th>Title</th>
</tr>
<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['blog_id']; ?></td>
    <td><?php echo $row['blog_title']; ?></td>
    </tr>
    <?php
}
?>


</table>
</div>
<br><br><br><br>

<center>
<!-- <div class="d-grid gap-6 col-2 mx-auto"> -->

<div class="d-flex justify-content-center">
	<a  style="margin-right: 10px" class="btn btn-primary" href="../login.php" role="button">Logout</a>
	<a class="btn btn-primary" href="../chart.php" role="button">Analysis</a>
</div>
<br><br>
</center>

</div>
<!-- <div class="col"><a class="btn btn-primary form-control" href="../login.php" role="button">Logout</a></div>
		<div class="col"><a class="btn btn-primary form-control" href="../chart.php" role="button">Analysis</a></div> -->

</body>
</html>