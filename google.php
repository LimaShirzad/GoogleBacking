<?php


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
    <title>google</title>
</head>
<body>
    
  <div class="container-fluid google_home  ">

       <div class="row " >
        <div class="col  heade mt-3">

               <span class=" w-100" ><a href="creat.php" id="link"
               style="float:right;"
               >creat acount</a></span>


               <!-- <div class="img">
               <img src="picture/girl.jpg" class="img-fluid">
              </div> -->
        </div>
       </div>



    <div class="row m-auto ">
        <div class="col col-sm-9 col-lg-5 col-xl-5  col-md-7  mt-5 m-5text-center m-auto">

               
     
                   <form class="mt-5" id="form">
                    <h1 id="text">
                        <span>g</span>
                        <span>o</span>
                        <span>o</span>
                        <span>g</span>
                        <span>l</span>
                        <span>e</span>
                       </h1>
                        <div class="form-group shadow  mt-5">
                            <i class="fa-solid fa-search"></i>
                            <input type="text" class="form-control"
                            id="search-input" name="search-input"
                            placeholder="Serach Google or Type URL"
                            >

                        




                           <div class="img">
                         
                            <img src="picture/speak.png" class="img-fluid">
                            <img src="picture/lens.png" class="img-fluid">
                        </div>

                        </div>
                            
                          <div class="form-group mt-1" id="allbox">
                                <div class="serach-box p-1 shadow ">
                                      <div id="serach-item" name="serach-item">
                                          <!-- <span><i class="fa-solid fa-search"></i></span> -->
                                          
                                      </div>

                                    
                                </div>
                          </div>

                   </form>
        </div>



      

    </div>
      

 
  </div>




  <div class="colorbox shadow">
        
    <i class="fa-solid fa-x" id="close"></i>
 
    <div class="button mt-5 shadow">
            <div class="btn-class" id="lightbox">
             <i class="fa-solid fa-sun"></i>
             <button class="btn" id="light">light</button>
            </div>
            <div class="btn-class" id="darkbox">
             <i class="fa-solid fa-moon"></i>

             <button class="btn " id="dark">dark</button>
            </div>
    </div>


    <h5 class="mt-3 m-4 text-center">change color</h5>
    <div class="color mt-1 ">
       
           <div class="blue text-center" style="background: rgb(80, 154, 179);">

           </div>

           <div class="orange" style="background: orange;">
               
           </div>
           <div class="pink" style="background: darkcyan;">
               
           </div>
    </div>



</div>

















  


  <div class="change-them">
    <i class="fa-solid fa-pen"></i>
    <span>customize chorme</span>
 </div>


<br>



<!-- search-input -->
<script src="jquery-3.7.1.js"></script>
<script src="script.js"></script>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
  $(document).ready(function()
  {
    // alert();

     $("#search-input").on("keyup",function()
     {
        var seach=$(this).val();
      
        $.ajax({
          url: "joinajax.php",
          type: "POST",
          data:{search:seach},
          success:function(data)
          {
             $("#serach-item").html(data);
            
            
          }

        });
     });

  });
</script>



</body>
</html>