<div id="adminBlock">
    <div id="imgLeft"></div>
    <div id="admin">
        <h4>Supprimer un jeux</h4><br>
        <form action="" method="post">
            <label for="delName">Nom du jeux a supprimer</label><br>
            <input type="text" name="delName" id="delName"><br><br>
            <input type="submit" value="Envoyer">
        </form>
        <div id="responseSql">
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/utils/messages.php'; ?>
        </div>
        <a href="/index.php?ctrl=admin&action=admin">retour a l'administration</a>
    </div>
    <div id="imgRight"></div>
</div>


