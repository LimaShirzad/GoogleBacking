<?php
session_start();
include("code.php");
$obj=new rigester();

$id=$_GET["id"];
$show=$obj->select($id);
while($row=$show->fetch_assoc())
{


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootcss/bootstrap.min.css">
    <link rel="stylesheet" href="fontasowm/all.css">
    <link rel="stylesheet" href="fontasowm/all.min.css">
    <title>Document</title>
    <style>
        body{
            background:white;
        }
    </style>
    
</head>
<body>

   <div class="container-fluid mt-2">
      <div class="row p-2">
        <div class="col  p-3 show shadow m-auto col-lg-5 col-md-7  col-xl-5">
         <a href="google.php"
          style="float:right; color:darkblue;text-decoration:none;"
         >google</a>
            <h1 class="mt-3"><?php echo $row["title"];  ?></h1>
        
              <p class="m-2">
                <?php     
                   
                  echo $row["topic"];
                
                ?>
              </p>

              <?php }?>
                    

        </div>
      </div>

   </div>










<script src="jquery-3.7.1.js"></script>
<script src="script.js"></script>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>