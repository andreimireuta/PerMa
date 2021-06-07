
var option1 = document.getElementById("option1");
var option2 = document.getElementById("option2");
var option3 = document.getElementById("option3");

var div1=document.getElementById("option11");
var div2=document.getElementById("option22");
var div3=document.getElementById("option33");


option2.addEventListener('click',function(){
    div1.style.display="none";
    div2.style.display="block";
    div3.style.display="none";
});
option1.addEventListener('click',function(){
    div2.style.display="none";
    div1.style.display="block";
    div3.style.display="none";
});
option3.addEventListener('click',function(){
    div1.style.display="none";
    div3.style.display="block";
    div2.style.display="none";
});