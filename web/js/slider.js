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



var slider_news = tns({
    container: '.slider-news',
    responsive: {
        0: {
            items: 3,
        },
        991: {
            items: 5
        }
    },
    slideBy: "page",
    edgePadding: 50,
    // autoplay: true,
    speed: 800,
    mouseDrag: true,
    swipeAngle: false,
    nav: false,
    controlsContainer: "#customize-controls",
    // controls: false,
    // autoplayText: ["",""],
    // autoplayButton: ".test"
});

