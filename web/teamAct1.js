

function clickAlert() {
    alert("Clicked!");
}

function changeTextColor() {
    colorID = document.getElementByID("changeColorButton").value;
    document.getElementByID("section1").color = colorID;
}
