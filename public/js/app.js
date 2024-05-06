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


//end