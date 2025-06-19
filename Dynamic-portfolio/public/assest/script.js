console.log(document.getElementById("test").innerText);

tags = document.querySelector(".nav-links").children;
for (i = 0; i <tags.lenght; i++){
    tags[i].addEventListener("click",function (event){
        alert(event.target.innerText);
    });
    
}

document.querySelectorAll(".title").forEach((abc) =>{
    abc.onclick = function(){
        this.innerHTML =
        <h3>
            <a href="#"> This is by JS</a>
            <p> this is assigned dynamically</p>
        </h3>
        ``;
        this.style.color = "green";
        this.style.backgroundColor = "#000000";
        this.style.borderRadius = "10px";
        this.style.padding = "20px";



        this.classList.add("card");

        avatar = document.getElementById("avatar");
        avatar.src =
        
    };
}) ;