
<div id="adminBlock">
    <div id="imgLeft"></div>
        <div id="admin">
            <h4>Administration bienvenue : <?= $_SESSION['user']->getName()?></h4><br>
            <form>
                <span>Que voulez vous faire?</span><br><br>
                <a href="/index.php?ctrl=admin&action=addGame">Ajoutez un jeux</a><br>
                <a href="/index.php?ctrl=admin&action=addServeur">Ajoutez un serveur</a><br><br>
                <a href="/index.php?ctrl=admin&action=editUser">Modifier un utilisateur</a><br><br>
                <a href="/index.php?ctrl=admin&action=deleteUser">Supprimer un utilisateur</a><br>
                <a href="/index.php?ctrl=admin&action=deleteGame">Supprimer un jeux</a><br>
                <a href="/index.php?ctrl=admin&action=deleteServeur">Supprimer un serveur</a><br>
            </form><br>
            <a href="/index.php">retour a l'acceuil</a>
        </div>
    <div id="imgRight"></div>
</div>

