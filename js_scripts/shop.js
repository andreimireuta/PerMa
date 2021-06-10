$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        } else{
            $('.navbar').removeClass("sticky");
        }
    });

    var hoverPesteCos =document.getElementById('cart-link');
    var schimbareCuloare = document.getElementById('cart-show');
    hoverPesteCos.addEventListener('mouseover',function(){
        schimbareCuloare.style.display="block";
        //schimbareCuloare.style.backgroundColor= "white";
        
    });
    hoverPesteCos.addEventListener('mouseleave',function(){
        schimbareCuloare.style.display="none";
        //schimbareCuloare.style.backgroundColor= "white";
        
    });

    var hoverPesteAccount = document.getElementById('account-link');
    var schimbareAccount = document.getElementById('account-show');
    hoverPesteAccount.addEventListener('mouseover',function(){
        schimbareAccount.style.display="block";
        //schimbareCuloare.style.backgroundColor= "white";
        
    });
    // schimbareAccount.addEventListener('mouseleave',function(){
    //     schimbareAccount.style.display="none";
    //     //schimbareCuloare.style.backgroundColor= "white";
        
    // });

    //pentru a face inima de wishlist rosie
    var clickedWishlist = document.getElementsByTagName("i");
    clickedWishlist.addEventListener('mousedown',function(){
        clickedWishlist.style.color='red';
        console.log("merge baaaaaa!");
    })
});
