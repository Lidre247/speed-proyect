var boton= document.getElementById("boton")
boton.addEventListener("click",function(evento){
    evento.preventDefault()
    //alert ("hiciste click")
    var cajaemail=  document.getElementById("email").value;
    if (cajaemail == ""){
        alert ("Rellene ambos campos")
        

    
    }else{
       console.log("oe")
        window.location.href="index.html"

    }
    
        

})
