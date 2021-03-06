function openNav() {
    document.getElementById("mySidebar").style.width = "200px";
    document.getElementById("main").style.marginLeft = "200px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
window.onload = openNav();
window.onload = closeNav();
/* Set comment */
function openComment() {

    var x = document.getElementById("comment");
    if (x.style.visibility === "hidden") {
        x.style.visibility = "visible"
        x.style.height = "auto"
        x.style.padding = "20px"
    } else {
        x.style.visibility = "hidden"
        x.style.height = "0"
        x.style.padding = "0"
    }

}

function miniChat() {
    var full = document.getElementById("chat-full");
    var chatMini = document.getElementById("chat-mini");
    full.style.visibility = "hidden";
    chatMini.style.visibility = "visible";
}

function openChat() {
    var full = document.getElementById("chat-full");
    var chatMini = document.getElementById("chat-mini")
    full.style.visibility = "visible";
    full.style.height = "345px";
    chatMini.style.visibility = "hidden";
}

function closeChat() {
    var full = document.getElementById("chat-full");
    full.style.visibility = "hidden"
}