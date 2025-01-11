<?php
session_start();
include("code.php");
$obj=new rigester();
$user="";
$pas="";
$id="";
$err="";
if(isset($_SESSION["user"],$_SESSION["pas"]))
{
    $user=$_SESSION["user"];
    $pas=$_SESSION["pas"];
    $id= $obj->student_id($user,$pas);
 
    while($row=$id->fetch_assoc())
    {
          $c_id=$row["id"];
    
          if(isset($_POST["send"]))
          {
           
              $title=$_POST["title"];
              $topic=$_POST["topic"];
              // $c_id=(int) $id;
              $insert=$obj->insert_data($c_id,$title,$topic);
              if($insert)
              {
                 $err="Reocrd INserted Succfully";
              }else{
                $err= "pleas fill all input filed";
              }
          }
    }
   
  $_SESSION["id"]=$id;



}
else{
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootcss/bootstrap.min.css">
    <link rel="stylesheet" href="fontasowm/all.min.css">
    <title>Document</title>
</head>
<body>
    
      <div class="container-fluid info shadow w-100">
            <div class="row">
                <div class="col">
                    <h3 class="navbar-brand">host your website</h3>
                      <nav>
                          <a href="google.php">home</a>
                          <a href="logout.php">logo out</a>
                          <a href="other.php">
                           <div class="img">
                                  <img src="picture/girl.jpg" class="img-fluid">
                           </div>
                           </a>
                      </nav>
                </div>
            </div>
      </div>

<!-- heade of your info end -->
<br>
<div class="container-fluid yourinfo">
        <div class="row">
            <div class="col shadow col-lg-8 col-md-7  col-xl-5 col-sm-9 m-auto">
                     <form class="p-3 " method="POST">
                           <h3 class="text-center">host website</h3>
                             <div class="lin "></div>
                             <p><?php  echo $err  ?></p>
                           <div class="form-group mt-4">
                            <label>website title</label>
                            <input type="text" class="form-control mt-2" 
                            name="title"
                            placeholder="Websit title">
                           
                           </div>

                                <div class="form-group mt-4">
                                    <label >website topic</label>
                                      <textarea name="topic" id="" cols="30" rows="6" class="form-control mt-2"
                                      placeholder="Enter Website Topic"
                                     
                                      ></textarea>
                                </div>



                           <!-- <div class="form-group mt-4">
                            <label >chose website</label>
                            <input type="file" class="form-control mt-2">
                           
                           </div> -->
                            
                           <div class="form-group mt-4">
                              <button class="btn" type="submite" name="send">send website</button>
                           </div>


                           
                        

                     </form>
            </div>
        </div>
</div>




<script src="script.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>