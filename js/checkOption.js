// Zaznaczanie wybranego działu w kroku pierwszym
function RadioCheck()
{
radio1 = document.getElementById("option1");
radio2 = document.getElementById("option2");
radio3 = document.getElementById("option3");
radio4 = document.getElementById("option4");

if(radio1.checked == true)
{
    document.getElementById("checked1").style.backgroundColor = "#5AB7FF";
    document.getElementById("checked1").style.transform = "scale(1.03,1.03)"
}
else
{
    document.getElementById("checked1").style.backgroundColor = "#FFFFFF";
    document.getElementById("checked1").style.transform = "scale(1,1)"
}

if(radio2.checked == true)
{
    document.getElementById("checked2").style.backgroundColor = "#5AB7FF";
    document.getElementById("checked2").style.transform = "scale(1.03,1.03)"
}
else
{
    document.getElementById("checked2").style.backgroundColor = "#FFFFFF";
    document.getElementById("checked2").style.transform = "scale(1,1)"
}

if(radio3.checked == true)
{
    document.getElementById("checked3").style.backgroundColor = "#5AB7FF";
    document.getElementById("checked3").style.transform = "scale(1.03,1.03)"
}
else
{
    document.getElementById("checked3").style.backgroundColor = "#FFFFFF";
    document.getElementById("checked3").style.transform = "scale(1,1)"
}

if(radio4.checked == true)
{
    document.getElementById("checked4").style.backgroundColor = "#5AB7FF";
    document.getElementById("checked4").style.transform = "scale(1.03,1.03)"
}
else
{
    document.getElementById("checked4").style.backgroundColor = "#FFFFFF";
    document.getElementById("checked4").style.transform = "scale(1,1)"
}

}