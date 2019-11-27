<?php 

require_once 'Result.php';
$obj= new Result();
$result=$obj->term();
$result2=$obj->cgpa();	
$b=mysqli_fetch_assoc($result2);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php include('master.php');?>  
<div style="padding-left:115px;padding-right: 115px">
<table class="table table-striped table-dark">
    <tr>
      <th>Total_credit</th>
      <th>CGPA</th>
    </tr>
  
        <tr>
            <th><?php echo $b['total_credit'];?></th>
            <th><?php echo $b['cgpa'];?></th>
        </tr>
          
  </table>
 </div>
</body>
       <script src="js/jquery-3.4.1.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="js/ie10-viewport-bug-workaround.js"></script>
       <script src="js/script.js"></script>
</html>