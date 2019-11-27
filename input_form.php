<?php
   $a['total_credit']=" ";
   $a['cgpa']=" ";
   // $b=" ";
   if(isset($_POST['button1']))
     {
     	   require_once 'Result.php';
         $obj=new Result();
         $b=$obj->save_data_info($_POST);
         $result=$obj->cgpa();	
         $a=mysqli_fetch_assoc($result);

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

	<?php include('master.php');?>     
  <script type="text/javascript">
           <?php
              if(isset($b)) {
           ?>
           var jFoo = <?php echo  json_encode($b); ?>;
           alert(jFoo); // test
           <?php } ?>
        </script>

 


<div style="padding-left:115px;padding-right: 115px">
<table class="table table-striped table-dark">
    <tr>
      <th>Total_credit</th>
      <th>CGPA</th>
    </tr>
  
        <tr>
            <th><?php echo $a['total_credit'];?></th>
            <th><?php echo $a['cgpa'];?></th>
        </tr>
          
  </table>
 </div>

<form action=" "   method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="term">TERM SELECT</label>
        <div class="col-sm-10">
        <select class="form-control" id="slct1" name="term" onchange="populate(this.id,'slct2')" required>
  <option value="" disabled selected>please select term</option>    	
  <option value="L1T1">L1T1</option>
  <option value="L1T2">L1T2</option>
  <option value="L2T1">L2T1</option>
  <option value="L2T2">L2T2</option>
  <option value="L3T1">L3T1</option>
  <option value="L3T2">L3T2</option>
  <option value="L4T1">L4T1</option>
  <option value="L4T2">L4T2</option>
</select>
        </div>
      </div>

  <div class="form-group">
        <label class="control-label col-sm-2" for="COURSE">COURSE SELECT</label>
        <div class="col-sm-10">
     <select id="slct2" name="course" class="form-control"  required></select>
        </div>
      </div> 
      <div class="form-group">
        <label class="control-label col-sm-2" for="CREDIT">CREDIT</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="std" name="credit" readonly="readonly" required>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-2" for="COURSE_NAME">COURSE_NAME</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="course_name" name="course_name" readonly="readonly" required>
        </div>
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
      <input type="hidden" name="name" id="name">
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" id="submit" name="button1">Submit</button>
        <button type="submit" class="btn btn-success" id="cancel" name="button2">Cancel</button>
    </div>
</div>
</div>
</form>
</body>
        <script src="js/jquery-3.4.1.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="js/ie10-viewport-bug-workaround.js"></script>
       <script src="js/script.js"></script>
      <!--  script er khela -->
       <script type="text/javascript">
       	function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "L1T1"){
		var optionArray = ["|","CSE_141|Computer Basis & Programming","ME_143|Basic Mechanical Engineering","Phy_141|Physics",
"Math_141|Differentiation and Integration","Hum_141|English and Economics",
"CSE_142|Computer Basis & Programming(sessional)","Phy_142|Physics(sessional)","ME_144|Basic Mechanical Engineering(sessional)"];
	} else if(s1.value == "L1T2"){
		var optionArray = ["|","CSE_143|Object Oriented Programing","EE_181|Basic Electrical Engineering ","Chem_141|Chemistry","Math_143|Co ordinate Geometry and Ordinary diffencial equation","Hum_143|Sociology and Government","CSE_144|Object Oriented Programming (Sessional)","EE_182|Basic Electrical Engineering (Sessional)","ME_146|Engineering Drawing  (Sessional)","Chem_142|Chemistry(sessional)"];
	} else if(s1.value == "L2T1"){
		var optionArray = ["|","CSE_221|Digital Logic Design","CSE_241|Data Structure","EE_281|Electronics Devices and Circuits","Math_241|Vector ,Matrix and Fourier Transform ","Hum_241|Industrial Management and Accountancy","CSE_222|Digital Logic Design(Sessional)","EE_282|Electronics Devices and Circuits(Sessional)","CSE_242|Data Structure(Sessional)"];
  }
  else if(s1.value=="L2T2")
  {
    var optionArray = ["|","CSE_211|Discrete Mathematics","CSE_243|Algorithm Analysis and Design",
"CSE_223|Digital Electronics and Pulse Techniques","EE_283|Electrical Drives and Instrumentation",
"Math_243|Complex variable and Laplace Transformation ","CSE_244|Algorithm Analysis and Design (Sessional)","EE_284|Electronics Drives and Instrumentation(Sessional)",
"CSE_224|Digital Electronics and Pulse Techniques(Sessional)"] }
else if(s1.value=="L3T1")
  {
    var optionArray = ["|","CSE_323|Applied Statistics and Queuing Theory","CSE_331|Theory of computing ","CSE_333|Microprocessor and Assembly Language Programming ","CSE_341|Numerical Analysis ","CSE_351|Data Base Management System","CSE_342|Numerical Analysis (Sessional) ","CSE_334|Microprocessor and Assembly Language Programming(Sessional)","CSE_352|Data Base Management System (Sessional)"]
  }
  else if(s1.value=="L3T2")
  {
    var optionArray = ["|","CSE_313|Data Communication","CSE_321|Computer Architecture","CSE_335|Operating System","CSE_345|Artificial Intelligence","CSE_353|System Analysis and Design ","CSE_314|Data Communication(Sessional)","CSE_336|Operating System (Sessional)","CSE_346|Artificial Intelligence (Sessional )","CSE_354|System analysis and Design (Sessional )"]
  }
  else if(s1.value=="L4T1")
  {
    var optionArray = ["|","CSE_411|Computer Network ","CSE_431|Compiler Design","CSE_437|Computer peripherals and Interfacing ","CSE_487|Communication Engineering","CSE-447|Neural Networks and Fuzzy Logic","CSE_412|Computer Network(Sessional)","CSE_432|Compiler Design(Sessional )","CSE_438|Computer peripherals and Interfacing(Sessional)","CSE_488|Communication Engineering (Sessional)","CSE_448|Neural Networks and Fuzzy Logic(Sessional)","CSE_402|Industrial Attachment"]
  }
  else if(s1.value=="L4T2")
  {
    var optionArray = ["|","CSE_419|VLSI Design","CSE_421|Digital System Design ","CSE_433|Software Engineering ","CSE_457|Computer Graphics ","CSE_451|Digital image Processing ","CSE_422|Digital System Design (Sessional) ","CSE_458|Computer Graphics (Sessional )","CSE_434|Software Engineering (sessional)","CSE_400|Project&Thesis"]
  }
 
	for(var i in optionArray){
		var pair = optionArray[i].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
    
	}
               
      
}
document.getElementById("slct2").onclick=function()
{
   var x=document.getElementById("slct2");
  if(x.value=="CSE_400"||x.value=="Hum_241"||x.value=="Hum_141")
  {
    document.getElementById("std").value="4.0";
  }
  else if(x.value=="ME_144"||x.value=="Chem_142"||x.value=="CSE_242"||x.value=="CSE_314"||x.value=="CSE_346"||x.value=="CSE_354"||x.value=="CSE_412"||x.value=="CSE_438"||x.value=="CSE_448"||x.value=="CSE_488"||x.value=="CSE_434")
  {
    document.getElementById("std").value="0.75";
  }
  else if(x.value=="CSE_142"||x.value=="Phy_142"||x.value=="CSE_144"||x.value=="EE_182"||x.value=="ME_146"||x.value=="CSE_222"||x.value=="EE_282"||x.value=="CSE_224"||x.value=="CSE_244"||x.value=="EE_284"||x.value=="CSE_342"||x.value=="CSE_334"||x.value=="CSE_352"||x.value=="CSE_336"||x.value=="CSE_432"||x.value=="CSE_458"||x.value=="CSE_422")
  {
   document.getElementById("std").value="1.5";
  }
  else if(x.value=="CSE_402")
  {
    document.getElementById("std").value="1.0";
  }
  else if(x.value=="CSE_331")
  {
    document.getElementById("std").value="2.0";
  }
  else
  {
    document.getElementById("std").value="3.0";
  }
  
}
</script>
<script type="text/javascript">
$(document).ready(function()
{
	$('#slct2').change(function() {
    //Use $option (with the "$") to see that the variable is a jQuery object
    var $option = $(this).find('option:selected');
    //Added with the EDIT
    var value = $option.val();//to get content of "value" attrib
    var text = $option.text();//to get <option>Text</option> content
    document.getElementById('course_name').value=text;
});
});	

</script>
<script type="text/javascript">
  document.getElementById('submit').onclick=function()
  {
    if(confirm("are u sure to insert")){return true;}
  }
</script>

</html>