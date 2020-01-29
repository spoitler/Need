let quantite = document.getElementById("quantity");
let moins = document.getElementById("button-moins-panier");
let plus = document.getElementById("button-plus-panier");
let count = 0;

plus.onclick = () => {
    count = quantite.innerText;
    count = parseInt(count,10);
    count += 1;
    quantite.innerText = count;
};

moins.onclick = () => {
    count = quantite.innerText;
    count = parseInt(count,10);
    count -= 1;
    quantite.innerText = count;
};

function promoCode() {
    let code = document.getElementsByClassName("container-promo-code");

    console.log(code);
    console.log(code[0].style.display);

    if (code[0].style.display === "none" || code[0].style.display === ""){
        code[0].style.display = "flex";
    }else {
        code[0].style.display = "none";
    }

}