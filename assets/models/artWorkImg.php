<?php
class artWorkImg {
    /**
     * Création des attributs
     */
    public $id = 0;
    public $name = '';
    public $description = '';
    public $id_tp_artWorks = 0;
    public $id_tp_users = 0;
    public $link = '';
    private $pdo;
    
     /**
     * Fonction permettant de construire la classe artWorkImg
     */
    public function __construct() {
        try {
            $this->pdo = new pdo('mysql:host=localhost;dbname=art;charset=utf8', 'vero', '220971');
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }
    /**
     * Fonction permettant l'ajout d'une photo d'une oeuvre
     */
    public function addImg() {
        $insert = 'INSERT INTO `tp_artWorkImg` (`name`,`link`,`id_tp_artWorks`,`id_tp_users`) VALUES (:name,:link,:id_tp_artWorks,:id_tp_users)';
        $queryPrepare = $this->pdo->prepare($insert);
        $queryPrepare->bindValue(':name', $this->name, PDO::PARAM_STR);
        $queryPrepare->bindValue(':link', $this->link, PDO::PARAM_STR);
        $queryPrepare->bindValue(':id_tp_users', $this->id_tp_users, PDO::PARAM_INT);
        $queryPrepare->bindValue(':id_tp_artWorks', $this->id_tp_artWorks, PDO::PARAM_INT);
        return $queryPrepare->execute();
    }
    public function showImg() {
        $select = 'SELECT `name`,`link`,`id_tp_artWorks`,`id_tp_users` FROM `tp_artWorkImg` WHERE `id_tp_artWorks`= :id_tp_artWorks';
        $queryPrepare = $this->pdo->prepare($select);
        $queryPrepare->bindValue(':id_tp_artWorks', $this->id_tp_artWorks,PDO::PARAM_INT);
        $queryPrepare->execute();
        return $queryPrepare->fetchAll(PDO::FETCH_OBJ);
}
/**
     * Methode permettant de supprimer une photo
     * @return boolean
     */
    /*public function deleteImg() {
        $query = 'DELETE FROM `tp_artWorkImg` WHERE `id_tp_users` = :id_tp_users AND `id_tp_artWorks` = :id_tp_artWorks ';
        $queryResult = $this->pdo->prepare($query);
        $queryResult->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $queryResult->execute();
    }*/
}