
$(document).ready(function(){console.log("Uraaaaaa!");

    //pentru a crea optiunea de a vedea descrierea si a o ascunde
    var clickedFullDesc= document.getElementById('fullDesc');
    var clickedFullDesc1= document.getElementById('fullDesc1');
    var showDescription = document.getElementById('product-description');
    clickedFullDesc.addEventListener('mousedown',function(){
        showDescription.style.display="block";
        //clickedFullDesc.innerHTML="Hide full description";
        clickedFullDesc1.style.display="block";
        clickedFullDesc.style.display="none";
        console.log("clicked it!");
    });

    clickedFullDesc1.addEventListener('mousedown',function(){
        showDescription.style.display="none";
        //clickedFullDesc.innerHTML="Hide full description";
        clickedFullDesc1.style.display="none";
        clickedFullDesc.style.display="block";
       
    });

});