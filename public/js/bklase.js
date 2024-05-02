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
            //student-lessons
const studentlessons = document.getElementById("student-lessons");
if(studentlessons) {
    studentlessons.addEventListener('click', (e) => {
        console.log("Button clicked");
        window.location="/view-lessons";
    });
}

//student-grades
const studentgrades = document.getElementById("student-grades");
if(studentgrades) {
    studentgrades.addEventListener('click', (e) => {
        console.log("Button clicked");
        window.location="/view-grades"; // Change this to the correct URL
    });
}

            //bklase routes
            //admin
            const clessons = document.getElementById("create-lessons");
            clessons.addEventListener('click', (e) => {
                console.log("Button clicked");
                window.location="/create-lessons";
            });
            const dlessons = document.getElementById("delete-lessons");
            dlessons.addEventListener('click', (e) => {
                console.log("Button clicked");
                window.location="/delete-lessons";
            });
            const ulessons = document.getElementById("update-lessons");
            ulessons.addEventListener('click', (e) => {
                console.log("Button clicked");
                window.location="/update-lessons";
            });
            const gradding = document.getElementById("gradding");
            gradding.addEventListener('click', (e) => {
                console.log("Button clicked");
                window.location="/gradding";
            });
            const vlessons = document.getElementById("view-lessons");
            vlessons.addEventListener('click', (e) => {
                console.log("Button clicked");
                window.location="/view-lessons";
            });

        }

        function toggleDarkMode() {
            var body = document.body;
            body.classList.toggle("light-mode");
            var date = new Date();
            date.setFullYear(date.getFullYear() + 1);
            document.cookie = "lightmode=" + body.classList.contains("light-mode") + "; expires=" + date.toUTCString() + "; path=/; Secure";
        }