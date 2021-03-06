<?php

class artWork extends database {

    /**
     * Création des attributs
     */
    public $id = 0;
    public $name = '';
    public $description = '';
    public $id_tp_artWorkType = 0;
    public $id_tp_users = 0;
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
     * Fonction permettant d'ajouter oeuvre
     */
    public function addArtWork() {
        $insert = 'INSERT INTO `tp_artWorks`(`name`,`description`,`id_tp_artWorkType`,`id_tp_users`) '
                . 'VALUES(:name,:description,:id_tp_artWorkType,:id_tp_users)';
        /* une fois connectée à la base de données */
        /* je demande que la fonction prepare se charge d'exécuter */
        $queryPrepare = $this->pdo->prepare($insert);
        $queryPrepare->bindValue(':name', $this->name, PDO::PARAM_STR);
        $queryPrepare->bindValue(':description', $this->description, PDO::PARAM_STR);
        $queryPrepare->bindValue(':id_tp_artWorkType', $this->id_tp_artWorkType, PDO::PARAM_INT);
        $queryPrepare->bindValue(':id_tp_users', $this->id_tp_users, PDO::PARAM_INT);
//        if 
        $queryPrepare->execute();

        // Pour récuperer l'id de l'oeuvre
        return $this->pdo->lastInsertId('id');
    }

    /**
     * Fonction permettant de récupérer toutes les oeuvres d'un utilisateur donné 
     */
    public function showArtWork() {
        $select = 'SELECT `tp_artWorks`.`id`,`tp_artWorks`.`name`,`tp_artWorks`.`description`,'
                . '`tp_artWorks`.`id_tp_artWorkType`,`tp_artWorks`.`id_tp_users`,'
                . ' `tp_users`.`lastName`,`tp_users`.`firstName` FROM `tp_artWorks` '
                . 'INNER JOIN `tp_users` ON `tp_artWorks`.`id_tp_users` = `tp_users`.`id` '
                . 'WHERE `id_tp_users`=:id_tp_users';
        $queryPrepare = $this->pdo->prepare($select);
        $queryPrepare->bindValue(':id_tp_users', $this->id_tp_users, PDO::PARAM_INT);
        $queryPrepare->execute();
        return $queryPrepare->fetchAll(PDO::FETCH_OBJ);
    }
    /**
     * Fonction permettant de récupérer toutes les oeuvres des utilisateurs pour les afficher dans le carousel 
     */
    public function showAllArtWork() {
        $select = 'SELECT `tp_artWorks`.`id`,`tp_artWorks`.`name`,`tp_artWorks`.`description`,`tp_artWorks`.'
                . '`id_tp_artWorkType`,`tp_artWorks`.`id_tp_users`, '
                . '`tp_users`.`lastName`,`tp_users`.`firstName`, '
                . '`tp_artWorkImg`.`link`, `tp_artWorkImg`.`name` AS `imgName`'
                . ' FROM `tp_artWorks` '
                . 'INNER JOIN `tp_users` '
                . 'ON `tp_artWorks`.`id_tp_users` = `tp_users`.`id` '
                . 'LEFT JOIN `tp_artWorkImg` '
                . 'ON `tp_artWorkImg`.`id_tp_artWorks` =`tp_artWorks`.`id` '
                . 'WHERE `tp_artWorks`.`id_tp_artWorkType` = :id_tp_artWorkType';
        $queryPrepare = $this->pdo->prepare($select);
        $queryPrepare->bindValue(':id_tp_artWorkType', $this->id_tp_artWorkType, PDO::PARAM_INT);
        $queryPrepare->execute();
        return $queryPrepare->fetchAll(PDO::FETCH_OBJ);
    }

    /** Methode permettant de supprimer une oeuvre d'un utilisateur donné
     * @return boolean
     */
    public function deleteArtWork() {
        $query = 'DELETE FROM `tp_artWorks` WHERE `id_tp_users`= :id_tp_users AND `id` = :id ';
        $queryResult = $this->pdo->prepare($query);
        $queryResult->bindValue(':id_tp_users', $this->id_tp_users, PDO::PARAM_INT);
        $queryResult->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $queryResult->execute();
    }

}
