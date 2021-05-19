let icon = document.querySelector(".icon");
let colors = document.querySelector(".change-colors");
let cursor = document.querySelector(".change-cursor");

let clicked = false;

icon.addEventListener("click", function(){
    if(clicked === false)
    {
        colors.style.display="block";
        cursor.style.display="block";
        clicked="true";
    }
    else
    {
        colors.style.display="none";
        cursor.style.display="none";
        clicked=false;
    }
});