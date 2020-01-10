document.getElementById("nav-responsive").onclick = (e) =>
{
    var nav = document.getElementById("navbarNav");
    if(nav.style.display == "block"){
        nav.style.display = "none";
        document.getElementsByTagName("body")[0].style.overflow = "";
    }else{
        nav.style.display = "block";
        document.getElementsByTagName("body")[0].style.overflow = "hidden";
    };
}

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

/**************slider***************/

var slider = tns({
    container: '.my-slider',
    items: 1,
    autoplay: true,
    autoplayHoverPause: true,
    speed: 1500,
    autoplayTimeout: 5500,
    //swipeAngle: false,
    nav: false,
    controlsContainer: "#customize-controls",
   // controls: false,
    autoHeight: "50vh",
    autoplayText: ["",""],
    autoplayButton: ".test"
});

