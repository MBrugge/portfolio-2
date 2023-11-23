//Font Changer
let header = document.querySelector("#header")
let content = document.querySelector("#content")
//Pop-up
const popup = document.querySelector(".pop-up");
const closeButton = document.querySelector(".close-button");
//Random Movement

//Font Changer
setInterval(function() {
    var header = document.getElementById("header");
    header.classList.toggle("header-changer");
}, 150);

setInterval(function() {
    var content = document.getElementById("content");
    content.classList.toggle("content-changer");
}, 150);

//Pop-up
setInterval(togglePopup, 2000)

function togglePopup() {
    popup.classList.toggle("show-pop-up");
}

function windowOnClick(event) {
    if (event.target === popup) {
        togglePopup();
    }
}

closeButton.addEventListener("click", togglePopup);

//Random Movement
$(document).ready(function() {
    $("div[name=animate]").each(function() {
        animateDiv($(this));
    });
});

function makeNewPosition() {
    var h = $(window).height() - 150;
    var w = $(window).width() - 150;
  
    var nh = Math.floor(Math.random() * h);
    var nw = Math.floor(Math.random() * w);
  
    return [nh, nw];
}
  
function animateDiv(c) {
    var newq = makeNewPosition();
    $(c).animate({ top: newq[0], left: newq[1] }, 
    function() {
      animateDiv(c);
    });
};