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
        $insert = 'INSERT INTO `tp_artWorkImg` (`name`,`id_tp_users`,`id_tp_artWorks`) VALUES (:name, :id_tp_users, :id_tp_artWorks)';
        $queryPrepare = $this->pdo->prepare($insert);
        $queryPrepare->bindValue(':name', $this->name, PDO::PARAM_STR);
        $queryPrepare->bindValue(':id_tp_users', $this->id_tp_users, PDO::PARAM_INT);
        $queryPrepare->bindValue(':id_tp_artWorks', $this->id_tp_artWorks, PDO::PARAM_INT);
        return $queryPrepare->execute();
    }
}