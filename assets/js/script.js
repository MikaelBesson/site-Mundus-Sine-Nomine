

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

let titles = document.getElementsByClassName('title');
let infoserv = document.getElementById('infoserv');

for(let i = 0; i< titles.length; i++) {
    titles[i].addEventListener('click', function (){
        const xhr = new XMLHttpRequest();
        xhr.open('GET', '../assets/ajax/ajaxInfo.php?title=' + titles[i].innerHTML);
        xhr.onload = function() {
            const result = JSON.parse(xhr.responseText);
            const resultHTML = result.reverse().map(function (message){
                return `
                <div>Nom : ${message.name}</div>
                <div>Devellopeur : ${message.dev}</div>
                <div>Genre : ${message.genre}</div>
                <br>
                <div>Description :<br>${message.content}</div>
                <br>
                <div>Info Serveur :</div>
                <div>Nom du serveur : ${message.serv_name}</div>
                <div>Ip du serveur : ${message.ip}</div>
                <div>Password du serveur : ${message.password}</div>
                `
            }).join('');
            infoserv.innerHTML = resultHTML;
        }
        xhr.send();
    });
}








