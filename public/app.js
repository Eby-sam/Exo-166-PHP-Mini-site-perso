console.log('js loaded');

let buttonBio = document.getElementById("bio");

buttonBio.addEventListener("click", function (){
    let containerDescription = document.getElementById("containerDescription");
    containerDescription.style.display = "block";
});