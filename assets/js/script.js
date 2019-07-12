
function hideDetailProfile() {
    document.getElementsById("email").style.visibility = "hidden";
    document.getElementsById("birth").style.visibility = "hidden";
    document.getElementsById("occupation").style.visibility = "hidden";
}

function showDetailProfile(){
    document.getElementsByClassName("email").style.visibility = "visible";
    document.getElementsByClassName("birth").style.visibility = "visible";
    document.getElementsByClassName("occupation").style.visibility = "visible";
}

