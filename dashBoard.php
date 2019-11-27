<?php
session_start();
require_once 'Result.php';
$obj= new Result();
$result=$obj->term();
$result2=$obj->cgpa();	
$b=mysqli_fetch_assoc($result2);

?>
<script type="text/javascript">
           <?php
              if(isset($_SESSION['massage'])) {
           ?>
           var jFoo = <?php echo  json_encode($_SESSION['massage']); ?>;
           alert(jFoo); // test
           <?php } ?>
        </script>
<?php
if(isset($_SESSION['massage']))
{
unset($_SESSION['massage']);
}
?>        
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
  <title>

    </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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
            <th style="color: blue"><?php echo $b['total_credit'];?></th>
            <th style="color:blue"><?php echo $b['cgpa'];?></th>
        </tr>
          
  </table>
 </div>
<table class="table table-responsive table-hover table-bordered">
        <tr>
            <th>Sl_No</th>
            <th>Term</th>
            <th>Course</th>
            <th>Course_Name</th>
            <th>Credit</th>
            <th>Grade</th>
            <th>Action</th>
        </tr>
        <?php $i=1;$total_credit=0;while($a=  mysqli_fetch_assoc($result)) {?>
        <tr>
            <th><?php echo $i++;?></th>
            <th><?php echo $a['term'];?></th>
            <th><?php echo $a['course'];?></th>
            <th><?php echo $a['name'];?></th>
            <th><?php echo $a['credit'];?></th>
            <th> <?php echo $a['grade'];?></th>
           <th>
      <a href="update.php?id=<?php echo $a['course'];?>"><button class="btn btn-success">Edit</button></a>
    <a href="delete.php?id=<?php echo $a['course'];?>" onclick="return checkDelete();"><button class="btn btn-danger"; onclick="return delCheck();" >delete</button></a>
      </th>
        </tr>
        <?php  $total_credit=$total_credit+$a['credit']; ?> <?php }?>
    </table>
    <h1 style="color:green"><?php echo $total_credit;?></h1>
</body>
<script src="js/jquery-3.4.1.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="js/ie10-viewport-bug-workaround.js"></script>
       <script src="js/script.js"></script>
       <script type="text/javascript">
       	function checkDelete()
       	{
       		if(confirm("Are you sure to delete"))
       			{ return true;}
       		else
       			{ return false;}
       	}
       </script>
 </html>