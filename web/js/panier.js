let quantite = document.getElementById("quantity");
let moins = document.getElementById("button-moins-panier");
let plus = document.getElementById("button-plus-panier");
let count = 0;

plus.onclick = () => {
    count = quantite.innerText;
    console.log(count);
    count = parseInt(count,10);
    count += 1;
    quantite.innerText = count;
};

moins.onclick = () => {
    count = quantite.innerText;
    console.log(count);
    count = parseInt(count,10);
    count -= 1;
    quantite.innerText = count;
};