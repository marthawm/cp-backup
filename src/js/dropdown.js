document.addEventListener("DOMContentLoaded", function(){

    var balloonPlus = document.getElementsByClassName("spanu");
    
    for(var i = 0; i < balloonPlus.length; i++){

        balloonPlus[i].addEventListener('click', toggleBalloon);

    }
    

})

function toggleBalloon(){
    var balloonIcon = this.getElementsByClassName("icon-methods")[0];
    var balloon = this.parentNode;
    var balloonText = balloon.getElementsByClassName("spanx")[0];
    
    if (balloonIcon.getAttribute('class') === "icon-methods fa fa-plus-circle fa-2x") {
        
        balloonIcon.setAttribute('class', "icon-methods fa fa-minus-circle fa-2x");
        balloon.classList.add("balloon-open");

    } else if (balloonIcon.getAttribute('class') === "icon-methods fa fa-minus-circle fa-2x"){

        balloonIcon.setAttribute('class', "icon-methods fa fa-plus-circle fa-2x");
        balloon.classList.remove("balloon-open");

    }
}