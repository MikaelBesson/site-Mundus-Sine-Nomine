<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';

class AdminController extends Controller {
    public function displayAdmin() {
        $this->render('administration', 'administration');
    }
}
