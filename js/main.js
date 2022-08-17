let about = document.getElementById("about");
let team = document.getElementById("team");
let container = document.getElementById("container");



function aboutOn() {
    about.classList.remove("hidden");
}

function closeAbout() {
    about.classList.add("hidden");
}


function teamOn() {
    team.classList.remove("hidden");
}

function closeTeam(){
    team.classList.add("hidden");
}