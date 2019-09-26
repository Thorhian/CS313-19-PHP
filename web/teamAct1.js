

function clickAlert() {
    alert("Clicked!");
}

function changeTextColor() {
    colorID = Document.getElementByID("changeColorButton").value;
    Document.getElementByID("section1").color = colorID;
}
