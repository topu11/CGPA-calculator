<?php
         require_once 'Result.php';
         $course=$_GET['id'];
         $obj=new Result();
         $obj->del($course);

?>
