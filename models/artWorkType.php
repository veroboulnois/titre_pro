<?php
class artWorkType extends database {
    /**
     * Création des attributs
     */
    public $id = 0;
    public $name = '';
    protected $pdo;
    
     /**
     * Déclaration de la méthode magique construct.
     * Le constructeur de la classe est appelé avec le mot clé new.
     */
    public function __construct() {
        parent::__construct();
        $this->connectDB();
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