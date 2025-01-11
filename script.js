// let login_btn=document.querySelector("#login_btn");
// let login_form=document.querySelector("#login_form");

// let acount_form=document.querySelector("#acount_form");
// let acount_btn=document.querySelector("#acount_btn");

// acount_btn.addEventListener("click",function()
// {
//        login_form.style.display="none";
//        acount_form.style.display="block";

// });


// login_btn.addEventListener("click",() =>
// {
     
//        login_form.style.display="block";
//        acount_form.style.display="none";
// });

// display login form end


let search_input=document.getElementById("search-input");
let input_value=search_input.value;
console.log(input_value);



let serach_box=document.querySelector(".serach-box ");
search_input.addEventListener("keyup",function()
{
    
       serach_box.style.display="block";
       if(search_input.value=="")
       {
       serach_box.style.display="none";

       }
       
});


































// color 
let open=document.querySelector(".change-them");
let colorbox=document.querySelector(".colorbox");
open.addEventListener("click",function()
{
  
   colorbox.style.right="0";
});
let colos=document.querySelector("#close");
colos.addEventListener("click",function()
{
       colorbox.style.right="-100%";
       
});
// color end 
// change color start
let dark=document.getElementById("dark");
let light=document.getElementById("light");
let body=document.querySelector(".google_home");

let box=document.getElementById("darkbox");
let i=document.querySelector("#darkbox i ");
let span=document.querySelector("#darkbox button ");

let box2=document.getElementById("lightbox");
let i2=document.querySelector("#lightbox i ");
let span2=document.querySelector("#lightbox button ");

dark.addEventListener("click",function()
{
   body.style.background="black";
   
    span.style.color="white";
    i.style.color="white";
    box.style.background="blue";


    span2.style.color="black";
    i2.style.color="black";
    box2.style.background="white";
});
light.addEventListener("click",function()
{
   body.style.background="white";

    
   span2.style.color="white";
   i2.style.color="white";
   box2.style.background="blue";

   span.style.color="black";
   i.style.color="black";
   box.style.background="white";


});

































// change color end
let h1text=document.querySelector("#text");
let themcolor=document.querySelectorAll(".color div");
themcolor.forEach(color => color.addEventListener("click",()=>
{
       let bodycolor =color.style.background;
       body.style.background=bodycolor;
}
   
));
// change the  end






