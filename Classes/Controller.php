<?php


class Controller {
    /**
     * Rend une vue.
     * @param string $view La vue à rendre
     */
    public function render(string $view, string $title, array $vars = []) {
        // On rend le partial header.
        require_once $_SERVER['DOCUMENT_ROOT'] . '/View/header.php';


        // On rend la vue demandée.
        require_once $_SERVER['DOCUMENT_ROOT'] . '/View/' . $view . '.php';

        // On rend le partial footer.
        require_once $_SERVER['DOCUMENT_ROOT'] . '/View/footer.php';
    }
}