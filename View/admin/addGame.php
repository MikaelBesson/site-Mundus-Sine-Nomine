<div id="adminBlock">
    <div id="imgLeft"></div>
    <div id="admin">
        <h4>Ajoutez un jeux</h4><br>
        <form action="/addGameFunction.php" method="post">
            <label for="gameName">Nom du jeux a ajoutez</label>
            <input type="text" name="gameName" id="gameName"><br>
            <label for="devName">Developpeur du jeux</label>
            <input type="text" name="devName" id="devName"><br>
            <label for="genreName">Genre du jeux</label>
            <input type="text" name="genreName" id="genreName"><br>
            <label for="content">Description du jeux</label><br>
            <textarea name="content" id="content" rows="6" cols="70"></textarea><br>
            <input type="submit" value="Envoyer">
        </form>
        <div id="responseSql">
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/utils/messages.php'; ?>
        </div>
        <a href="/index.php?ctrl=admin&action=admin">retour a l'administration</a>
    </div>
    <div id="imgRight"></div>
</div>

