
<div id="adminBlock">
    <div id="imgLeft"></div>
    <div id="admin">
        <h4>Modifier un utilisateur</h4><br>
        <form action="" method="post">
            <label for="editUser">Utilisateur a modifier</label>
            <input type="text" name="editUser" id="editUser"><br>
            <label for="roleUser">Nouveaux role de l'utilisateur : admin = 1, utilisateur = 2, invité = 3 </label><br>
            <input type="number" name="roleUser" id="roleUser"><br>
            <input type="submit" value="Envoyer">
        </form>
        <div id="responseSql">
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/utils/messages.php'; ?>
        </div>
        <a href="/index.php?ctrl=admin&action=admin">retour a l'administration</a>
    </div>
    <div id="imgRight"></div>
</div>

