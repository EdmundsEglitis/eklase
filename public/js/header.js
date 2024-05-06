window.onload = function() {
    const logos = document.getElementById("logo");
    logos.addEventListener('click', (e) => {
        window.location="/";
    });

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
// Function to set a cookie
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Check cookie for dark mode preference
var lightmode = document.cookie.replace(/(?:(?:^|.*;\s*)lightmode\s*\=\s*([^;]*).*$)|^.*$/, "$1") === "true";
if (!lightmode) {
    document.body.classList.add("light-mode"); // Default mode is dark mode
}

// Function to toggle dark mode
function toggleDarkMode() {
    var lightmodeToggle = document.getElementById("darkmode-toggle");
    if (lightmodeToggle.checked) {
        document.body.classList.remove("light-mode");
        setCookie("lightmode", "true", 30); // Set cookie for 30 days
    } else {
        document.body.classList.add("light-mode");
        setCookie("lightmode", "false", 30); // Set cookie for 30 days
    }
}