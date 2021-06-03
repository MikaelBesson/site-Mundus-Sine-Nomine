
<div id="adminBlock">
    <div id="imgLeft"></div>
    <div id="admin">
        <h4>Modifier un utilisateur</h4><br>
        <form action="/editUserFunction.php" method="post">
            <label for="editUser">Utilisateur a modifier</label><br>
            <input type="text" name="editUser" id="editUser"><br>
            <label for="roleUser">Nouveaux role de l'utilisateur :</label>
            <select name="roleUser" id="roleUser">
                <?php
                foreach ($vars['role'] as $role){?>
                    <option value=' <?= $role->getId() ?> '><?= $role->getRole() ?> </option><?php
                }
                ?>
            </select><br><br>
            <input type="submit" value="Envoyer">
        </form>
        <div id="responseSql">
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/utils/messages.php'; ?>
        </div>
        <a href="/index.php?ctrl=admin&action=admin">retour a l'administration</a>
    </div>
    <div id="imgRight"></div>
</div>

