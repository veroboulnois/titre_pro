<?php
class artWorkType {
    /**
     * Création des attributs
     */
    public $id = 0;
    public $name = '';
    private $pdo;
    
     /**
     * Fonction permettant de construire la classe artWorkType
     */
    public function __construct() {
        try {
            $this->pdo = new pdo('mysql:host=localhost;dbname=art;charset=utf8', 'vero', '220971');
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }
    /**
     * Fonction permettant de sélectionner type d'oeuvre
     */
    public function showType() {
        $insert = 'SELECT `id`, `name` FROM `tp_artWorkType`';
        /*une fois connectée à la base de données */
        /*je demande que la fonction query se charge d'exécuter*/
        /* et me retourne les valeurs sous forme de tableau d'objet */
        $queryPrepare = $this->pdo->query($insert);
        return $queryPrepare->fetchAll(PDO::FETCH_OBJ);
    }
}