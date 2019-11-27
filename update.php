<?php
session_start();
 require_once 'Result.php';
$course=$_GET['id'];
$obj=new Result();
$info=$obj->selectForUpdate($course);
$a=  mysqli_fetch_assoc($info);    
  if(isset($_POST['button1']))
     {
         require_once 'Result.php';
        $course=$_GET['id'];
        $obj=new Result();
        $b=$obj->update($course,$_POST);
        $_SESSION['massage']=$b;
        if(isset($b))
        {
             header("Location: dashBoard.php");
        }

     }
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
  <title>

    </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
<?php include('master2.php');?>
<form action=" "   method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="term">TERM SELECT</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="term" readonly="readonly" value="<?php echo $a['term'];?>" required>
        </div>
      </div>

  <div class="form-group">
        <label class="control-label col-sm-2" for="COURSE">COURSE SELECT</label>
        <div class="col-sm-10">
     <input type="text" class="form-control" name="course" readonly="readonly" value="<?php echo $a['course'];?>" required>
        </div>
      </div> 
      <div class="form-group">
        <label class="control-label col-sm-2" for="CREDIT">CREDIT</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="credit" readonly="readonly" value="<?php echo $a['credit'];?>" required>
        </div>
      </div>
       <!-- <div class="form-group">
        <label class="control-label col-sm-2" for="COURSE_NAME">COURSE_NAME</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="course_name" readonly="readonly" value="<?php echo $a['course_name'];?>" required>
        </div> -->
      </div>
     <div class="form-group">
        <label class="control-label col-sm-2" for="grade">GRADE</label>
        <div class="col-sm-10">
        <select class="form-control"  name="grade"  required>
  <option value="" disabled selected>please select term</option>      
  <option value="4.00">A+</option>
  <option value="3.75">A</option>
  <option value="3.50">A-</option>
  <option value="3.25">B+</option>
  <option value="3.00">B</option>
  <option value="2.75">B-</option>
  <option value="2.50">C+</option>
  <option value="2.25">C</option>
  <option value="2.00">D</option>
</select>
        </div>
      </div>   
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" id="submit" name="button1">Submit</button>
        <button type="submit" class="btn btn-success" id="cancel" name="button2">Cancel</button>
    </div>
</div>
</form>
</body>
        <script src="js/jquery-3.4.1.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="js/ie10-viewport-bug-workaround.js"></script>
       <script src="js/script.js"></script>
      <!--  script er khela -->
       
 
</html>