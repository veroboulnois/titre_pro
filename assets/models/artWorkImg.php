<?php
class artWorkImg {
    /**
     * Création des attributs
     */
    public $id = 0;
    public $name = '';
    public $description = '';
    public $id_tp_artWorkImg = 1;
    private $pdo;
    
     /**
     * Fonction permettant de construire la classe artWorkImg
     */
    public function __construct() {
        try {
            $this->pdo = new pdo('mysql:host=localhost;dbname=art;charset=utf8', 'root', 'laenopsis13');
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }
    /**
     * Fonction permettant l'ajout d'une photo d'une oeuvre
     */
    public function addImg() {
        $insert = 'INSERT INTO `tp_artWorkImg` (`id`,`name`,`description`,`tp_artWorkImg`) VALUES (:name,:description,:id_tp_artWorkImg)';
        $queryPrepare = $this->pdo->prepare($insert);
        $queryPrepare->bindValue(':name', $this->name, PDO::PARAM_STR);
        $queryPrepare->bindValue(':description', $this->description, PDO::PARAM_STR);
        $queryPrepare->bindValue(':id_tp_artWorkImg', $this->id_tp_artWorkImg, PDO::PARAM_STR);
        return $queryPrepare->execute();
    }
}