<?php
?>


<div id="admin">
    <h4>Administration bienvenue : le nom ici</h4>
    <form>
        <span>Que voulez vous faire?</span>
            <button>Ajoutez</button>
            <button>Modifier</button>
            <button>Supprimer</button><br>
        <span>Modification du bouton liste</span><br>
        <label for="placement">A quel emplacement</label>
            <input id="placement" type="number"><br>
        <label for="gameName">nom du jeux</label>
            <input id="gameName" type="text"><br>
        <span>Info sur le jeux</span><br>
        <label for="dev">Devellopeur</label>
            <input id="dev" type="text"><br>
        <span>Genre</span>
            <input type="text"><br>
        <label for="infoGame">Description du jeux</label><br>
        <textarea id="infoGame"></textarea><br>
        <span>Info de connection serveur</span><br>
        <label for="servName">Nom du serveur</label>
            <input id="servName" type="text"><br>
        <label for="servIP">Son Ip</label>
            <input id="servIP" type="number"><br>
        <label for="servPassword">Son Password</label>
            <input id="servPassword" type="text"><br>
        <input type="submit" value="Envoyer">
        <div id="bddResponse">
            reponse de la requette ici
        </div>
    </form>
</div>
