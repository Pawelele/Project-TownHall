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
let option = document.querySelectorAll(".option");
let logo = document.querySelector(".logo2");
let footer = document.querySelector("#footer");
let choose = document.querySelector("#wybierz_opcje");
let actual = document.querySelector(".actual_round");
let actual_p = document.querySelector(".p_actual");

let currentStatus = false;

colors.addEventListener("click", function(){
    if(currentStatus===false)
    {
        body.style.backgroundImage = "unset";
        body.style.backgroundColor = "black";
        header.style.backgroundColor = "black";
        header.style.borderBottom = "4px solid #FFCB05";
        header.style.color = "#FFCB05";

        for(const opt of option)
        {
            opt.style.backgroundColor = "black";
            opt.style.color = "#FFCB05";
            opt.style.border = "3px solid #FFCB05";
            opt.classList.add("optionDisable");
        }

        logo.classList.add("yellowLogo");
        logo.src='img/logo_yellow.png';
        footer.style.color="#FFCB05";
        choose.style.color="#FFCB05";
        actual.style.backgroundColor="#FFCB05";
        actual_p.style.color="#FFCB05";
        actual.style.color="white";

        currentStatus = true;
    }
    else
    {
        currentStatus=false;
        location.reload();
    }



});