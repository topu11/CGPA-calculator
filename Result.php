<?php
class Result {
    protected $con;
    public function __construct() {
        $host="localhost";
        $user="root";
        $password="";
        $db_name="result";
        $this->con=mysqli_connect($host, $user, $password, $db_name);
    }
     public function save_data_info($data)
    {
        
        $course=$data['course'];
        $credit=$data['credit'];
        $grade=$data['grade'];
        $term=$data['term'];
        $course_name=$data['course_name'];
        if(!$this->con)
        {
        	die('connection problem'.mysqli_error($this->con));
        }
        $sql = "INSERT INTO tb_result (term,course,credit,grade,name)
VALUES ('$term','$course', '$credit','$grade','$course_name')";
        if(mysqli_query($this->con,$sql))
        {
        	 // $this->cgpa();
            
        	// $massage="inserted";
         //    return $massage;
            
        }
        else {
        	// die('connection problem'.mysqli_error($this->con));
        	 $massage="course alreday exit";
        	return $massage;
        }
    }
    public function cgpa()
       {
            if(!$this->con)
        {
        	die('connection problem'.mysqli_error($this->con));
        }
        $sql="SELECT (sum(credit*grade))/(SUM(credit)) as cgpa,(sum(credit)) as total_credit from tb_result ";
        if(mysqli_query($this->con,$sql))
        {
        	$result=mysqli_query($this->con,$sql);
            return $result;
          
        }
        else {
        	die('connection problem'.mysqli_error($this->con));
  
       }
}
  public function term()
       {
            if(!$this->con)
        {
        	die('connection problem'.mysqli_error($this->con));
        }
        $sql="SELECT *from tb_result";
        if(mysqli_query($this->con,$sql))
        {
        	$result=mysqli_query($this->con,$sql);
            return $result;
            
        }
        else {
        	die('connection problem'.mysqli_error($this->con));
  
       }
}
  public function del($data)
{
           if(!$this->con)
           {
             die('connection problem'.mysqli_error($this->con));  
           }
            $sql="DELETE FROM tb_result   WHERE course = '$data'";
             if(mysqli_query($this->con,$sql))
        {
                 
                header('Location: ' . $_SERVER['HTTP_REFERER']);
               exit();

        }
        else {
            die('connection problem'.mysqli_error($this->con));
        }

}
 public function selectForUpdate($data)
       {
            if(!$this->con)
        {
            die('connection problem'.mysqli_error($this->con));
        }
        $sql="SELECT *FROM tb_result  WHERE course ='$data'";
        if(mysqli_query($this->con,$sql))
        {
               
            $result=mysqli_query($this->con,$sql);
                return $result;
                
        }
        else {
            die('connection problem'.mysqli_error($this->con));
        }
      
           
        }
        public function Update($b,$data)
       {
      if(!$this->con)
           {
             die('connection problem'.mysqli_error($this->con));  
           }
        $grade=$data['grade'];
         $sql="UPDATE  tb_result  SET grade='$grade' WHERE course ='$b' ";
             if(mysqli_query($this->con,$sql))
        {
              
                 $massage="course Updated";
                 return $massage;
                  exit();
        }
        else {
            die('connection problem'.mysqli_error($this->con));
        }      
           
        }
}
?>