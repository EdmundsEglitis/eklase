window.onload = function() {
    const divItem0 = document.getElementById("divItem-0");
    divItem0.addEventListener('click', (e) => {
        window.location="/";
    });

    const divItem1 = document.getElementById("divItem-1");
    divItem1.addEventListener('click', (e) => {
        window.location="/";
    });

    const divItem2 = document.getElementById("divItem-2");
    divItem2.addEventListener('click', (e) => {
        window.location="/";
    });

    const divItem3 = document.getElementById("divItem-3");
    divItem3.addEventListener('click', (e) => {
        window.location="/";
    });
    //logo
    const logo = document.getElementById("logo");
    logo.addEventListener('click', (e) => {
        window.location="/";
    });
    //end

    //darkmode
    var darkmode = document.cookie.replace(/(?:(?:^|.*;\s*)darkmode\s*\=\s*([^;]*).*$)|^.*$/, "$1") === "true";
    if (darkmode) {
        document.body.classList.add("light-mode");
        document.getElementById("lightmode-toggle").checked = true;
    }
}

function toggleDarkMode() {
    var body = document.body;
    body.classList.toggle("light-mode");
    document.cookie = "lightmode=" + body.classList.contains("light-mode");
}
//end