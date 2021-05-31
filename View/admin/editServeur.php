<div id="adminBlock">
    <div id="imgLeft"></div>
    <div id="admin">
        <h4>Modifier un serveur</h4><br>
        <form action="" method="post">
            <label for="servName">Nom du serveur a Modifier</label>
            <input type="text" name="servName" id="servName"><br>
            <label for="IpAdress">Adresse IP du serveur</label>
            <input type="number" name="IpAdress" id="IpAdress"><br>
            <label for="servPass">Mot de passe du serveur</label>
            <input type="text" name="servPass" id="servPass"><br>
            <input type="submit" value="Envoyer">
        </form>
        <div id="responseSql"></div>
        <a href="/index.php?ctrl=admin&action=admin">retour a l'administration</a>
    </div>
    <div id="imgRight"></div>
</div>

