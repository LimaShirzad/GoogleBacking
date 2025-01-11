<?php

class rigester{
    private $host_name="localhost";
    private $username="root";
    private $pasword="";
    private $db_name="google";
    public $con;
    // start of connecting Database
    public function __construct()
    {
    $this->con=new mysqli($this->host_name,$this->username,$this->pasword,$this->db_name);
     if($this->con->connect_error)
     {
        echo $this->con->connect_error ;
        exit();
     }
     else
     {
       return $this->con;
     }
    }


    public function creat_acount($name,$user,$pas,$file)
    {
      $sql="INSERT INTO student(name,user,pas,img)VALUES('$name','$user','$pas','$file')";
      $run=$this->con->query($sql);
  
    }
    
    public function cheack_login($user,$pas)
    {
        $sql="SELECT user,pas FROM student";
        $run=$this->con->query($sql);
  
        while($row=$run->fetch_assoc())
        {
          if($user==$row["user"] && $pas==$row["pas"])
          {
            // return $run;
            // header("location:login.php");
            return $run;
          }
          
  
  
  
        }
      }


    public function student_id($user,$pas)
    {
        $sql="SELECT id FROM student WHERE user='$user' and pas='$pas'";
        $run=$this->con->query($sql);
        return $run;
    }
    
    public function insert_data($s_id,$title,$topic)
    {
      if($title=="" || $topic==""){
        
      }
      else{
        $sql="INSERT INTO make_acount(s_id,title,topic)VALUES('$s_id','$title','$topic')";
        $run=$this->con->query($sql);
        return $run;
      }
    }

    public function select_all_inf($item)
    {
        $sql="SELECT w_id,title,topic FROM make_acount WHERE title LIKE '%{$item}%'";
        $run=$this->con->query($sql);
        return $run;
    }
     
    public function select($item)
    {
      $sql="SELECT w_id,title,topic FROM make_acount WHERE w_id='$item'";
      $run=$this->con->query($sql);
      return $run;
    }

     public function  show_profile($user,$pas)
     {
         $sql="SELECT * FROM  student WHERE user='$user' and pas='$pas' ";
         $run=$this->con->query($sql);
         return $run;
     }


}

?>