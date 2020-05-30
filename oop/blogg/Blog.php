<?php
class Blog
{
    private $conn;
    public function __construct($connDb)
    {
        $this->conn = $connDb;
    }
    public function läsa()
    {
        $sql = "SELECT * FROM blog ORDER BY id DESC";
        $resultat = $this->conn->query($sql);
        $this->conn->close();
        if ($resultat) {
            return $resultat;
        }
    }
    public function skriva($rubriken, $inlägget)
    {
        $sql = "INSERT INTO blog SET rubrik='$rubriken', inlagg='$inlägget'";
        $resultat = $this->conn->query($sql);
        
        if ($resultat) {
            return $this->conn->insert_id;
        }

        $this->conn->close();
    }
    public function radera()
    {
    }
    public function uppdatera()
    {
    }
}
