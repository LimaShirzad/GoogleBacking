<?php
include("code.php");
$creat=new rigester();


if(isset($_POST["insert"]) && $_POST["insert"]=="insert")
{
    
    $file=$_FILES['file']['name'];
    $name=$_POST["name"];
    $user=$_POST["user"];
    $pas=$_POST["pas"];
    $creat->creat_acount($name,$user,$pas,$file);

    move_uploaded_file($_FILES['file']['tmp_name'],$file);

}

if(isset($_POST["search"]))
{
    $serach_value=$_POST["search"];
    $res=$creat->select_all_inf($serach_value);
    // <span><i class="fa-solid fa-search"></i></span>
    $out="";
    while($row=$res->fetch_assoc())
    {
      $out.='

      <span><i class="fa-solid fa-search"></i></span>


        <a href="websit.php?id='.$row["w_id"].'" style="    text-decoration: none; color:black;">'.$row["title"].'</a>
        <input type="hidden" value="'.$row["w_id"].'" name="h_id">
<br>
       
       ';
      
    
    
    
         
    }
  
    echo $out;
    
}






?>