document.getElementById("nav-responsive").onclick = (e) =>
{
    var nav = document.getElementById("navbarNav");
    if(nav.style.display == "block"){
        nav.style.display = "none";

        document.getElementsByTagName("body")[0].style.overflow = "";
    }else{
        nav.style.display = "block";
        nav.style.animation = "menu_display .3s";
        document.getElementsByTagName("body")[0].style.overflow = "hidden";
    }
};

var logo = document.getElementById("logo");
document.onscroll = () => resize();

var pos = logo.getBoundingClientRect().y;

function resize() {
    x = window.scrollY;
    if(x > pos/2){
        logo.style.animation = "stick .5s normal";
        logo.style.width="100px";
    }else if( x < pos && logo.style.animation == "0.5s ease 0s 1 normal none running stick" ){
        logo.style.animation = "unstick .5s normal";
        logo.style.width="250px";
    }
}


$(document).ready(function () {
    $('#nav-responsive').click(function () {
        $(this).toggleClass('open');
    });
});

