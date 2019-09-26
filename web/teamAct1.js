

function clickAlert() {
    alert("Clicked!");
}

function changeTextColor() {
    colorID = document.getElementById("colorID").value;
    div = document.getElementById("section1");
    div.innerHTML = "LOLOLOLOLOLOLOLOLOLOLOL";
    console.debug(colorID);
    console.debug('green');
    div.style.backgroundColor = colorID;
}
