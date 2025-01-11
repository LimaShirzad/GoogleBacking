<?php
session_start();
include("code.php");
$obj=new rigester();
$err="";
if(isset($_POST["login_btn"]))
{
  $user=$_POST["user"];
  $pas=$_POST["pas"];
    



   $result=$obj->cheack_login($user,$pas);
   if($result)
   {
    $_SESSION["user"]=$user;
    $_SESSION["pas"]=$pas;
    header("location:yourinfo.php");
   }else
   {
      $err="Record Not Found";
   }

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
  
<div class="container-fluid creat_acount text-capitalize">
    <div class="row m-auto " >
        <div class="col  col-lg-5 col-md-7  col-xl-5 m-auto" id="creat_acoun">
             <form class="shadow p-3" method="POST">
                   <h4 class="m-3 text-center fw-bold">login</h4>
                  <p>  <?php  echo $err;                ?>   </p>               

                     <div class="form-group">
                        <i class="fa-solid fa-user"></i>
                          <input type="text" name="user" class="form-control"
                          id="user"

                          placeholder="username"
                          
                          >
                     </div>


                     <div class="form-group">
                        <i class="fa-solid fa-lock"></i>
                          <input type="password" name="pas" 
                          id="pas"

                          class="form-control"
                          placeholder="password"
                          
                          >
                     </div>


             

                       <button class="btn"  type="submite" name="login_btn">login</button>
                       <a href="creat.php">
                        <span >creat acount

                        </span></a>
             </form>

           <!-- creat acount end -->





        </div>

     
    </div>
               
   </div>





<script src="script.js"></script>
<script src="jquery-3.7.1.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>