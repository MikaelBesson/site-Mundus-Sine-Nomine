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
    })
    .add({
    targets: '.ml2',
    opacity: 0,
    duration: 3000,
    easing: "easeOutExpo",
    delay: 1000
});


/* event of serveur list */

let titles = document.getElementsByClassName('title');
let infoserv = document.getElementById('infoserv');
let connectServ = document.getElementById('connectServ')

for(let i = 0; i< titles.length; i++) {
    titles[i].addEventListener('click', function (){
        const xhr = new XMLHttpRequest();
        xhr.open('GET', '../assets/ajax/ajaxInfo.php?title=' + titles[i].innerHTML);
        xhr.onload = function() {
            const result = JSON.parse(xhr.responseText);
            const resultHTML = result.reverse().map(function (message) {
                return `
                    <div>Nom : ${message.name}</div>
                    <div>Devellopeur : ${message.dev}</div>
                    <div>Genre : ${message.genre}</div>
                    <br>
                    <div id="description">Description :<br>${message.content}</div>
                `
            }).join('');
            infoserv.innerHTML = resultHTML;


            const xhr2 = new XMLHttpRequest();
            xhr2.open('GET', '../assets/ajax/ajaxInfo.php?title=' + titles[i].innerHTML + "&action=serv");
            xhr2.onload = function () {
                const result2 = JSON.parse(xhr2.responseText);
                const resultHTML2 = result2.map(function (message2) {
                    return `
                        <div>Info Serveur :
                        <div>Nom du serveur :<br> ${message2.serv_name}</div>
                        <div>Ip du serveur :<br> ${message2.ip}</div>
                        <div>Password du serveur :<br> ${message2.password}</div><br><br>
                </div>
                    `
                }).join('');
                connectServ.innerHTML = resultHTML2;
            }
            xhr2.send();
        }
        xhr.send();
    })
}














