<!-- ----- debut ModelVin -->

<?php
require_once 'Model.php';

class ModelVin
{
    private $id, $cru, $annee, $degre;

    public function __construct($id = NULL, $cru = NULL, $annee = NULL, $degre = NULL)
    {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($id)) {
            $this->id = $id;
            $this->cru = $cru;
            $this->annee = $annee;
            $this->degre = $degre;
        }
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setCru($cru)
    {
        $this->cru = $cru;
    }

    function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    function setDegre($degre)
    {
        $this->degre = $degre;
    }

    function getId()
    {
        return $this->id;
    }

    function getCru()
    {
        return $this->cru;
    }

    function getAnnee()
    {
        return $this->annee;
    }

    function getDegre()
    {
        return $this->degre;
    }


// retourne une liste des id
    public static function getAllId()
    {
        try {
            $database = Model::getInstance();
            $query = "select id from vin";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getMany($query)
    {
        try {
            $database = Model::getInstance();
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelVin");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getAll()
    {
        try {
            $database = Model::getInstance();
            $query = "select * from vin";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelVin");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getOne($id)
    {
        try {
            $database = Model::getInstance();
            $query = "select * from vin where id = :id";
            $statement = $database->prepare($query);
            $statement->execute([
                    'id' => $id
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelVin");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function insert($cru, $annee, $degre)
    {
        try {
            $database = Model::getInstance();

            // recherche de la valeur de la clé = max(id) + 1
            $query = "select max(id) from vin";
            $statement = $database->query($query);
            $tuple = $statement->fetch();
            $id = $tuple['0'];
            $id++;

            // ajout d'un nouveau tuple;
            $query = "insert into vin value (:id, :cru, :annee, :degre)";
            $statement = $database->prepare($query);
            $statement->execute([
                    'id' => $id,
                    'cru' => $cru,
                    'annee' => $annee,
                    'degre' => $degre
            ]);
            return $id;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return -1;
        }
    }

    public static function update()
    {
        echo("ModelVin : update() TODO ....");
        return null;
    }

    public static function delete($id)
    {
        try {
            $database = Model::getInstance();
            $query = "SELECT * FROM recolte WHERE vin_id = :id";
            $testExistence = $database->prepare($query);
            $testExistence->execute([
                    'id' => $id
            ]);
            if ($testExistence->rowCount() > 0) {
                return null;
            } else {
                $results = ModelVin::getOne($id);
                $query = "DELETE FROM vin WHERE id = :id";
                $statement = $database->prepare($query);
                $statement->execute([
                        'id' => $id
                ]);
                return $results[0];
            }
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return -1; // Error exit code
        }
    }

}

?>
<!-- ----- fin ModelVin -->