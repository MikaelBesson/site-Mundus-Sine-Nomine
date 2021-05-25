<?php
?>
<div id="adminBlock">
    <div id="imgLeft"></div>
        <div id="admin">
            <h4>Administration bienvenue : le nom ici</h4><br>
            <form>
                <span>Que voulez vous faire?</span>
                <button>Ajoutez</button>
                <button>Modifier</button>
                <button>Supprimer</button><br><br>
                <label for="gameName">nom du jeux</label>
                <input id="gameName" type="text"><br><br>
                <span>Info sur le jeux</span><br>
                <label for="dev">Devellopeur</label>
                <input id="dev" type="text"><br>
                <span>Genre</span>
                <input type="text"><br><br>
                <label for="infoGame">Description du jeux</label><br>
                <textarea id="infoGame" cols="60" rows="10"></textarea><br><br>
                <span>Info de connection serveur</span><br><br>
                <label for="servName">Nom du serveur :</label>
                <input id="servName" type="text"><br>
                <label for="servIP">Son Ip</label>
                <input id="servIP" type="number"><br>
                <label for="servPassword">Son Password</label>
                <input id="servPassword" type="text"><br><br>
                <input type="submit" value="Envoyer">
                <div id="bddResponse">
                    reponse de la requete ici
                </div>
            </form>
        </div>
    <div id="imgRight"></div>
</div>


