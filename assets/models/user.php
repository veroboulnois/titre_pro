<?php
class user {
    /**
     * Création des attributs
     */
    public $id = 0;
    public $lastName = '';
    public $firstName = '';
    public $mail = '';
    public $pwd = '';
    public $id_tp_userGroup = 1;
    private $pdo;

    /**
     * Fonction permettant de construire la classe user
     */
    public function __construct() {
        try {
            $this->pdo = new pdo('mysql:host=localhost;dbname=art;charset=utf8', 'vero', '220971');
        } catch (Exception $ex) {
            die('Erreur : ' . $ex->getMessage());
        }
    }

    /**
     * Fonction permettant l'ajout d'un utilisateur
     */
    public function addUser() {
        $insert = 'INSERT INTO `tp_users` (`lastName`,`firstName`,`mail`,`pwd`,`id_tp_userGroup`) VALUES (:lastName,:firstName,:mail,:pwd,:id_tp_userGroup)';
        $queryPrepare = $this->pdo->prepare($insert);
        $queryPrepare->bindValue(':lastName', $this->lastName, PDO::PARAM_STR);
        $queryPrepare->bindValue(':firstName', $this->firstName, PDO::PARAM_STR);
        $queryPrepare->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $queryPrepare->bindValue(':pwd', $this->pwd, PDO::PARAM_STR);
        $queryPrepare->bindValue(':id_tp_userGroup', $this->id_tp_userGroup, PDO::PARAM_STR);
        return $queryPrepare->execute();
    }
    /**
     * Fonction permettant de récupérer les informations d'un utilisateur
     */
    public function getUser(){
        $select = 'SELECT `id`, `lastName`,`firstName`,`mail`,`id_tp_userGroup` FROM `tp_users` WHERE `mail`=:mail';
        $queryPrepare = $this->pdo->prepare($select);
        $queryPrepare->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $queryPrepare->execute();
        $getUser = $queryPrepare->fetch(PDO::FETCH_OBJ);
        $this->id = $getUser->id;
        $this->lastName = $getUser->lastName;
        $this->firstName = $getUser->firstName;
        $this->id_tp_userGroup = $getUser->id_tp_userGroup;        
    }

    /**
     * Fonction permettant de récupérer le mot de passe en crypté en fonction du mail si correct
     */
    public function getHashByUser() {
        $isOk = false;
        $select = 'SELECT `pwd` FROM `tp_users` WHERE `mail`=:mail';
        $queryPrepare = $this->pdo->prepare($select);
        $queryPrepare->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        //Si la requête s'éxecute sans erreur
        if ($queryPrepare->execute()) {
            //On récupère le hash
            $result = $queryPrepare->fetch(PDO::FETCH_OBJ);
            //Si resulte est un objet (donc si on a récupéré et stocké notre résultat dans result)
            if (is_object($result)) {
                //On donne à l'attribut de notre objet créé dans le controller la valeur de l'attribut password de notre objet resultat
                $this->pwd = $result->pwd;
                //On passe notre variable à true, pour dire qu'il n'y a pas d'erreur
                $isOk = true;
            }
        }
        //Si $isOk est à false, aucune condition n'est remplie, il y a une erreur, on pourra afficher un message
        //Si elle est à true, toutes les conditions sont remplies est on pourra éxécuter la suite
        return $isOk;
    }

    /**
     * Fonction permettant de compter le nombre de personnes ayant le login donné
     * Retourne le nombre de lignes trouvées
     * 0 -> aucun utilisateur avec ce nom n'existe, on peut créer le nouvel utilisateur
     * 1 -> un utilisateur avec ce nom existe, on ne crée pas le nouvel utilisateur
     * @return INT
     */
       public function checkUser() {
       $select = 'SELECT COUNT(*) AS `exists` FROM `tp_users` WHERE `mail` = :mail';
       $queryPrepare = $this->pdo->prepare($select);
       $queryPrepare->bindValue(':mail', $this->mail, PDO::PARAM_STR);
       $queryPrepare->execute();
       $result = $queryPrepare->fetch(PDO::FETCH_OBJ);
        return $result->exists;
       }
}