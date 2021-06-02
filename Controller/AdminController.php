<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/cleanInput.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/UserManager.php';


session_start();
$conn = new DB();


 /**
 * Returns a view.
 * Class AdminController
 */
class AdminController extends Controller
{
    public function displayAdmin()
    {
        $this->render('admin/administration', 'administration');
    }


    /**
     * Display the add form
     */
    public function displayAddAdmin() {

        $this->render('admin/addAdmin', 'Ajoutez un Admin');
    }

    /**
     * Display the add game
     */
    public function displayAddGame(){
        $this->render('admin/addGame', 'Ajoutez un jeux');
    }

    /**
     * Display the add server
     */
    public function displayAddServeur() {
        $manager = new GameManager();
        $var['game'] = $manager->getGames();
        $this->render('admin/addServeur', 'Ajoutez un serveur', $var);
    }

    /**
     * Display edit admin
     */
    public function displayEditAdmin() {

        $this->render('admin/editAdmin', 'Modifier un utilisateur');
    }

    /**
     * Display edit game
     */
    public function displayEditGame() {
        $this->render('admin/editGame', 'Modifier un jeux');
    }

    /**
     * Display edit server
     */
    public function displayEditServeur() {
        $this->render('admin/editServeur', 'Modifier un serveur');
    }

    /**
     * Display delete user
     */
    public function displayDeleteUser() {
        $this->render('admin/deleteUser', 'Supprimer un utilisateur');
    }

    /**
     * Display delete game
     */
    public function displayDeleteGame() {
        $this->render('admin/deleteGame', 'Supprimer un jeux');
    }

    /**
     * Display delete server
     */
    public function displayDeleteServeur() {
        $this->render('admin/deleteServeur', 'Supprimer un serveur');
    }

}

