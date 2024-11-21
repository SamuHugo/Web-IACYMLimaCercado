document.addEventListener("DOMContentLoaded", function() {
    fetch('/elements-primary/nav-bar/nav-default.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('nav-default').innerHTML = data;
        });

        fetch('/elements-primary/nav-bar/nav-light.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('nav-light').innerHTML = data;
        });

        fetch('/elements-primary/nav-bar/nav-alternative.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('nav-alt').innerHTML = data;
        });
});
