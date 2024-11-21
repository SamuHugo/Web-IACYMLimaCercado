
document.addEventListener("DOMContentLoaded", function () {
    //****NAV BAR****
    fetch('/elements-base/nav-bar/nav-default.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('nav-default').innerHTML = data;
        });

    fetch('/elements-base/nav-bar/nav-light.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('nav-light').innerHTML = data;
        });

    fetch('/elements-base/nav-bar/nav-alternative.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('nav-alt').innerHTML = data;
        });

    //****FOOTER****
    fetch('/elements-base/footer/footer-dark.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-dark').innerHTML = data;
        });

    fetch('/elements-base/footer/footer-light.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-light').innerHTML = data;
        });

    //****WIDGETS****
    fetch('/elements-base/widgets/wdg-oracion.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('wdg-oracion').innerHTML = data;
        });

        fetch('/elements-base/widgets/wdg-boletin.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('wdg-boletin').innerHTML = data;
        });
});
