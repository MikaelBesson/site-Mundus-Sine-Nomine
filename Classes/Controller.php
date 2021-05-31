<?php


class Controller {
    /**
     * Returns a view.
     * @param string $view The view to render
     */
    public function render(string $view, string $title, array $vars = []) {
        //We make the partial header.
        require_once $_SERVER['DOCUMENT_ROOT'] . '/View/header.php';


        //We return the requested view.
        require_once $_SERVER['DOCUMENT_ROOT'] . '/View/' . $view . '.php';

        //We return the partial footer.
        require_once $_SERVER['DOCUMENT_ROOT'] . '/View/footer.php';
    }
}