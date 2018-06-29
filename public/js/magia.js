function cambiarColor() {
document.getElementById("header").style.background = "pink";

}

function swapStyleSheet(sheet) {
    document.getElementById("pagestyle").setAttribute("href", sheet);
}

function initate() {
    var style2 = document.getElementById("magia");

    style2.onclick = function () { swapStyleSheet("/css/pride.css"); };
}

window.onload = initate;
