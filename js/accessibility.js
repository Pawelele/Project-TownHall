let icon = document.querySelector(".icon");
let colors = document.querySelector(".change-colors");
let cursor = document.querySelector(".change-cursor");

let clicked = false;

icon.addEventListener("click", function(){
    if(clicked === false)
    {
        colors.style.display="block";
        cursor.style.display="block";
        clicked=true;
    }
    else
    {
        colors.style.display="none";
        cursor.style.display="none";
        clicked=false;
    }
});




let bigCursor = document.querySelector(".bigCursor");
let cursorStatus = false;

cursor.addEventListener("click", function(){
    if(cursorStatus===false)
    {
        bigCursor.style.cursor = "url('img/xd.png'), default";
        cursorStatus = true;
    }
    else
    {
        bigCursor.style.cursor = "default";
        cursorStatus = false;
    }
})




let body = document.querySelector("body");
let header = document.querySelector("header");
let signup = document.querySelector(".sign_up");
let peselCheck = document.querySelector("#pesel_check_p");
let option = document.querySelectorAll(".option");
let submitMainSite = document.querySelector("#main_site_submit");
let yellow = document.querySelector(".yellow");
let logo = document.querySelector(".logo2");

let currentStatus = false;

colors.addEventListener("click", function(){
    if(currentStatus===false)
    {
        body.style.backgroundImage = "unset";
        body.style.backgroundColor = "black";
        header.style.backgroundColor = "black";
        header.style.borderBottom = "4px solid #FFCB05";
        header.style.color = "#FFCB05";
        signup.style.color = "#FFCB05";
        signup.style.backgroundColor = "black";
        signup.style.border = "3px solid #FFCB05";
        peselCheck.style.color = "#FFCB05";

        for(const opt of option)
        {
            opt.style.backgroundColor = "black";
            opt.style.color = "#FFCB05";
            opt.style.border = "3px solid #FFCB05";
            opt.classList.add("optionDisable");
        }

        submitMainSite.style.backgroundColor = "black";
        submitMainSite.style.border = "3px solid #FFCB05";
        submitMainSite.style.color = "#FFCB05";
        yellow.style.color = "#FFCB05";
        logo.classList.add("yellowLogo");
        logo.src='img/logo_yellow.png';




        currentStatus = true;
    }
    else
    {
        currentStatus=false;
        location.reload();
    }



});