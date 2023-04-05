function MoreLess(){
    var dots=document.getElementById("dots");
    var invisibleText=document.getElementById("invisible-text");
    var btnText=document.getElementById("readmorebtn1");
    if (dots.style.display!="none"){
        dots.style.display="none";
        invisibleText.style.display="inline";
        btnText.innerHTML="Read Less"
    }
    else{
        dots.style.display="inline";
        invisibleText.style.display="none";
        btnText.innerHTML="Read More";
    }
}