<?php
// Connexion à la base de données
class Databases {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "gestioncontact";
    public $conn;
    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "nous somme connecter";
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }
    public function getConnection() {
        return $this->conn;
    }
}
// classe fille de Database qui va avoir comme methode AjouterContact,SelectionnerContact
//  ModifierContact, SupprimerContact,MarquerfavorieContact
class     Contact   extends Databases {
    private $nom;
    private $prenom;
    private $telephone;
    public $status;
    public $dateAjout;

    public function __construct() {
        parent::__construct();
    }
    public function AjouterContact($nom,$prenom,$telephone,$status,$dateAjout)
    {
             $sql= "INSERT INTO contact (Non,Prenon,Telephone,Status,date_ajouter) VALUE (:non,:prenon,:telephone,:status,:dateajouter)";
             $requet=$this->conn->prepare($sql);
             $requet->bindParam(':nom', $nom);
             $requet->bindParam(':prenom', $prenom);
             $requet->bindParam(':telephone', $telephone);
             $requet->bindParam(':status', $status);
             $requet->bindParam(':nom', $nom);
             $requet->bindParam(':date_ajouter', $dateAjout);
             if ($requet->execute()) {
                echo "on es bon!";
             }else {
                echo "c'est la merde!";
             }




    }



}

