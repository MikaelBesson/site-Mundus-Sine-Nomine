
<div id="adminBlock">
    <div id="imgLeft"></div>
    <div id="admin">
        <h4>Ajoutez un Serveur</h4><br>
        <form action="/addServerFunction.php" method="post">
            <label for="gameName">pour quel jeux voulez vous un serveur</label>
            <select name="gameName" id="gameName">
            <?php
            foreach ($vars['game'] as $game){
                echo "<option value='" . $game->getId() . "'>". $game->getName(). "</option>";
            }
            ?>
            </select> <br><br>
            <label for="servName">Nom du serveur a ajoutez</label>
            <input type="text" name="servName" id="servName"><br>
            <label for="IpAdress">Adresse IP du serveur</label>
            <input type="number" name="IpAdress" id="IpAdress"><br>
            <label for="servPass">Mot de passe du serveur</label>
            <input type="text" name="servPass" id="servPass"><br>
            <input type="submit" value="Envoyer">
        </form>
        <div id="responseSql">
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/utils/messages.php'; ?>
        </div>
        <a href="/index.php?ctrl=admin&action=admin">retour a l'administration</a>
    </div>
    <div id="imgRight"></div>
</div>

