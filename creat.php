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
        <div class="col  col-lg-5 col-md-7  col-xl-5 m-auto" id="acount_form">
             <form class="shadow p-3" method="POST" id="form" >
                   <h4 class="m-3 text-center fw-bold">creat acount</h4>
                     <div class="form-group mt-4">
                        <i class="fa-solid fa-user"></i>
                          <input type="text" name="name" 
                          id="name"
                          class="form-control"
                          placeholder="Name"
                          
                          >
                     </div>

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


                     <div class="form-group">
                 
                          <input type="file" name="file" 
                          id="file"

                          class="form-control">
                    <input type="hidden" class="form-control" name="insert" value="insert" id="insert">

                     </div>

                       <button class="btn"  type="submite">submite</button>
                       <a href="login.php">
                        <span id="login_btn">allready have acount ?  login

                        </span></a>
             </form>

           <!-- creat acount end -->





        </div>

     
    </div>
               
   </div>







    
<script src="script.js"></script>
<script src="jquery-3.7.1.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function()
{
   
 $("#form").submit(function(e)
 {
     e.preventDefault();
    $("#insert").val("insert");
    $.ajax({
      url:"joinajax.php",
      type:"POST",
      data:new FormData(this),
      contentType:false,
      processData:false,
      success:function(data){
        $("#form")[0].reset();
        // alert("Data inserted sunccfully");

      }



    }); 
    
 })


});
</script>


















</body>
</html>