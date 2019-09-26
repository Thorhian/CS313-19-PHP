

function clickAlert() {
    alert("Clicked!");
}

function changeTextColor() {
    colorID = document.getElementById("colorID").value;
    div = document.getElementById("section1");
    console.debug(colorID);
    div.style.color = colorID;
}
