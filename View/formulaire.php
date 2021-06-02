<?php
if (isset($_POST,$_POST['name'], $_POST['password'], $_POST['email'])) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/UserManager.php';
    $manager = new UserManager();
    $message = $manager->addUser($_POST);
}


?>

<div class="formContain">
    <!-- connection  -->
    <form action="/index.php?ctrl=formulaire" method="post">
        <h2>Connection</h2>
        <div class="form">
            <div class="label">
                <label for="email">Votre adresse mail :</label><br>
                <label for="name">Votre Nom :</label><br>
            </div>
            <div class="input">
                <input type="text" name="email" id="email" placeholder="Votre email ici" title="adresse valide merci" required><br>
                <input type="text" name="name" id="name" placeholder="Votre Nom ici" title="doit etre le meme que sur discord" required><br>
            </div>
        </div>
    </form>

    <!-- Inscription -->
    <form action="/index.php?ctrl=formulaire" method="post">
        <h2>Formulaire d'inscription</h2>
        <div class="form">
            <div class="label">
                <label for="email">Votre adresse mail :</label><br>
                <label for="name">Votre nom :</label><br>
                <label for="password">Votre password :</label><br>
            </div>
            <div class="input">
                <input type="text" name="email" id="email" placeholder="Votre email ici" title="adresse valide merci"
                       required><br>
                <input type="text" name="name" id="name" placeholder="Votre Nom ici"
                       title="Doit etre le meme que sur discord" required><br>
                <input type="password" name="password" id="password" placeholder="Votre password ici"
                       title="1,2,3,4,5 est deja prit change" required><br>
            </div>
            <div class="subMessage">
                <div class="submit">
                    <input type="submit" name="submit" value="validez l'inscription" title="Allez viend on est bien !!">
                </div>
                <div class="messageBot">
                    <?php
                    if (isset($message)) {
                        echo $message;
                    }
                    ?>
                </div>
                <div class="backAcceuil"><a href="/index.php?ctrl=acceuil">Retour a l'acceuil</a></div>
            </div>
        </div>
    </form>
</div>
