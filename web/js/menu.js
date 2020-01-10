document.getElementById("nav-responsive").onclick = () =>
{
    var nav = document.getElementById("navbarNav");
    if(nav.style.display == "block"){
        nav.style.display = "none";
    }else{
        nav.style.display = "block";

    };
}

var logo = document.getElementById("logo");
document.onscroll = () => resize();

var pos = logo.getBoundingClientRect().y;

function resize() {
    x = window.scrollY;
    console.log(x);
    console.log(pos/2);

    if(x > pos){
        logo.style.animation = "stick .5s normal";
        logo.style.width="100px";


    }else if( x < pos && logo.style.animation == "0.5s ease 0s 1 normal none running stick" ){
        logo.style.animation = "unstick .5s normal";
        logo.style.width="250px";
    }
}

