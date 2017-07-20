<?php
class artWork {
    /**
     * Création des attributs
     */
    public $id = 0;
    public $name = '';
    public $description = '';
    public $id_tp_artWorkType =  0;
    public $id_tp_users = 0;
    private $pdo;
    
     /**
     * Fonction permettant de construire la classe artWork
     */
    public function __construct() {
        try {
            $this->pdo = new pdo('mysql:host=localhost;dbname=art;charset=utf8', 'vero', '220971');
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }
    /**
     * Fonction permettant d'ajouter oeuvre
     */
    public function addArtWork() {
        $insert = 'INSERT INTO `tp_artWorks`(`name`,`description`,`id_tp_artWorkType`,`id_tp_users`) '
                . 'VALUES(:name,:description,:id_tp_artWorkType,:id_tp_users)';
        /*une fois connectée à la base de données */
        /*je demande que la fonction query se charge d'exécuter*/
        /* et me retourne les valeurs sous forme de tableau d'objet */
        $queryPrepare = $this->pdo->prepare($insert);
        $queryPrepare->bindValue(':name', $this->name, PDO::PARAM_STR);
        $queryPrepare->bindValue(':description', $this->description, PDO::PARAM_STR);
        $queryPrepare->bindValue(':id_tp_artWorkType', $this->id_tp_artWorkType, PDO::PARAM_INT);
        $queryPrepare->bindValue(':id_tp_users', $this->id_tp_users, PDO::PARAM_INT);
        $queryPrepare->execute();
        
        // Pour récuperer l'id de l'oeuvre
        return $this->pdo->lastInsertId('id');
        
    }
     /**
     * Fonction permettant de récupérer toutes les oeuvres d'un utilisateur donné 
     */
    public function showArtWork() {
        $select = 'SELECT `tp_artWorks`.`id`,`tp_artWorks`.`name`,`tp_artWorks`.`description`,`tp_artWorks`.`id_tp_artWorkType`,`tp_artWorks`.`id_tp_users`, `tp_users`.`lastName`,`tp_users`.`firstName` FROM `tp_artWorks` '
                . 'LEFT JOIN `tp_users` ON `tp_artWorks`.`id_tp_users` = `tp_users`.`id` '
                . 'WHERE `id_tp_users`=:id_tp_users';
        $queryPrepare = $this->pdo->prepare($select);
        $queryPrepare->bindValue(':id_tp_users', $this->id_tp_users, PDO::PARAM_INT);
        $queryPrepare->execute();
        return $queryPrepare->fetchAll(PDO::FETCH_OBJ);
    }
}