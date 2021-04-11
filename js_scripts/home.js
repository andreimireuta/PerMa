var clickedInput= document.getElementById('radio1');
var clickedImage= document.getElementById('slide1');
var clickedInput2= document.getElementById('radio2');
var clickedImage2= document.getElementById('slide2');
var clickedInput3= document.getElementById('radio3');
var clickedImage3= document.getElementById('slide3');
var clickedInput4= document.getElementById('radio4');
var clickedImage4= document.getElementById('slide4');
clickedInput.addEventListener('mousedown',function(){
    clickedImage.style.display="block";
    clickedImage2.style.display="none";
    clickedImage3.style.display="none";
    clickedImage4.style.display="none";
    console.log("merge baaaaaa!");
});

clickedInput2.addEventListener('mousedown',function(){
    clickedImage.style.display="none";
    clickedImage2.style.display="block";
    clickedImage3.style.display="none";
    clickedImage4.style.display="none";
    document.getElementById('img2').style.display="block";
    console.log("merge baaaaaa!");
});
clickedInput3.addEventListener('mousedown',function(){
    clickedImage.style.display="none";
    clickedImage2.style.display="none";
    clickedImage3.style.display="block";
    clickedImage4.style.display="none";
    document.getElementById('img3').style.display="block";
    console.log("merge baaaaaa!");
});
clickedInput4.addEventListener('mousedown',function(){
    clickedImage.style.display="none";
    clickedImage2.style.display="none";
    clickedImage3.style.display="none";
    clickedImage4.style.display="block";
    document.getElementById('img4').style.display="block";
    console.log("merge baaaaaa!");
});