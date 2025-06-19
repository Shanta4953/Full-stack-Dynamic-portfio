console.log(document.getElementById("test").innerText);

tags = document.querySelector(".nav-links").children;
for (i = 0; i <tags.lenght; i++){
    tags[i].addEventListener("click",function (event){
        alert(event.target.innerText);
    });
    
}

document.querySelectorAll(".title").forEach((abc) =>{
    abc.onclick = function(){
        prompt(this.innerText);
    };
}) ;