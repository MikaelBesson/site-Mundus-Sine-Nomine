

/* animation du sous titre */
/* animation of the subtitle */

let textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
    .add({
        targets: '.ml2 .letter',
        scale: [4,1],
        opacity: [0,1],
        translateZ: 0,
        easing: "easeOutExpo",
        duration: 950,
        delay: (el, i) => 70*i
    }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 3000,
    easing: "easeOutExpo",
    delay: 1000
});


/* event of serveur list */

let viewInfo = document.getElementById('infoserv');
let game1 = document.getElementById('game1');
let game2 = document.getElementById('game2');
let game3 = document.getElementById('game3');
let game4 = document.getElementById('game4');
let game5 = document.getElementById('game5');
let game6 = document.getElementById('game6');


game1.addEventListener('click', function() {
    viewInfo.innerHTML = "7 days to die";
});

game2.addEventListener('click', function() {
    viewInfo.innerHTML = "Ark Survival";
});

game3.addEventListener('click', function() {
    viewInfo.innerHTML = "Valheim";
});

game4.addEventListener('click', function() {
    viewInfo.innerHTML = "Last oasis";
});

game5.addEventListener('click', function() {
    viewInfo.innerHTML = "Work 1";
});

game6.addEventListener('click', function() {
    viewInfo.innerHTML = "Work 2";
});





