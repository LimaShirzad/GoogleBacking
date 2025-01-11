<?php
session_start();
include("code.php");
$obj=new rigester();

if(isset($_SESSION["user"],$_SESSION["pas"]))
{
    $user=$_SESSION["user"];
    $pas=$_SESSION["pas"];

     $show=$obj->show_profile($user,$pas);
    
 
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
   
    <div class="container-fluid  profile text-capitalize">
            <!-- <div class="row">
                <div class="col">

                </div>
            </div> -->
      

           <div class="row">
            <div class="col col-lg-5 col-md-7  col-xl-5 col-sm-9 m-auto mt-5">
                  <?php
     while($row=$show->fetch_assoc())
     {

?>
            <div class="card p-2 shadow ">
            
                            <div class="card-img">
                                   <img src="picture/girl.jpg"
                                   class="img-fluid "
                                   >
                            </div>
                             <div class="card-body">
                                <div class="text">
                                    <span>name: </span>
                                    <span><?php echo $row["name"]  ?></span>
                                </div>

                                <div class="text">
                                    <span>username: </span>
                                    <span><?php echo $row["user"]  ?></span>
                                </div>

                                <div class="text">
                                    <span>pasword: </span>
                                    <span><?php echo $row["pas"]  ?></span>
                                </div>
                                

                   </div>
                   <a href="yourinfo.php"   
                  
                
                  >upload somthing new</a>
            </div>
           
           </div>
    </div>
    <?php }?>

<script src="script.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>