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
        window.location="brivlaiki";
    });
    //logo
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


//register
const register = document.getElementById("register");
if(register) {
    register.addEventListener('click', (e) => {
        console.log("Button clicked");
        window.location="/register";
    });
}
//end

//logout
const logouts = document.getElementById("logout");
if(logouts) {
    logouts.addEventListener('click', (e) => {
        console.log("Button clicked");
        window.location="/logout";
    });
}
//end

//bklase
const bklase = document.getElementById("B-klase");
if(bklase) {
    bklase.addEventListener('click', (e) => {
        console.log("Button clicked");
        window.location="/bklase";
    });
}
//end
}

function toggleDarkMode() {
    var body = document.body;
    body.classList.toggle("light-mode");
    var date = new Date();
    date.setFullYear(date.getFullYear() + 1);
    document.cookie = "lightmode=" + body.classList.contains("light-mode") + "; expires=" + date.toUTCString() + "; path=/; Secure";
}
//end