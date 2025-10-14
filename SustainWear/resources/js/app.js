import './bootstrap';

function generateHamburgerLinks() {
    var x = document.getElementById("hamburgerLinksVisor");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

window.generateHamburgerLinks = generateHamburgerLinks;