<?php

/**
 * return a view of form
 * Class InscriptionController
 */
class InscriptionController extends Controller {
    public function displayFormulaire() {
        $this->render('formulaire', 'Rejoindre Mundus Sine Nominé ');
    }
}