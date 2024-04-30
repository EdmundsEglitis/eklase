window.onload = function() {


    const logos = document.getElementById("logo");
    logos.addEventListener('click', (e) => {
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
    var date = new Date();
    date.setFullYear(date.getFullYear() + 1);
    document.cookie = "lightmode=" + body.classList.contains("light-mode") + "; expires=" + date.toUTCString() + "; path=/; Secure";
}
