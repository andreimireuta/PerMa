function showDiv(){
    var checkBox=document.getElementById("checkBox");
    var divToShow=document.getElementById("destinatie");
    var textCheckBox=document.getElementById("textCheckBox");
    if(checkBox.checked == true){
        divToShow.style.display="none";
    }
    else{
        divToShow.style.display="block";
    }
    
}