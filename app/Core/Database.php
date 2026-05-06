<?php
/*
namespace App\Core;
class Database
{
    private string $host = "localhost";
    private string $db_name = "kniznica";
    private string $username = "root";
    private string $password = "";

    private string $charset = "utf8";

    public $conn;

    public function nadviazSpojenie(){
        $this->conn = null;
    
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name};charset={$this->charset}",$this->username,$this->password);
        } catch (\PDOException $e) {
            echo "Spojenie s Databázou sa nepodarilo".$e->getMessage();
        }
    return $this->conn;
    }
}
*/



namespace App\Core;

use PDO;
use PDOException;

class Database
{
    private string $host = "localhost";
    private string $dbname = "db_users";
    private string $user = "root";
    private string $password = "";
    private string $charset = "utf8mb4";

    private ?PDO $conn = null;

    public function getConnection() : PDO
    {
        if($this->conn !== null){
            return $this->conn;
        }

        $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset";

        try{
            $this->conn = new PDO($dsn,$this->user,$this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            die("Connection error: ".$e->getMessage());
        }

        return $this->conn;
    }
}















































/*
namespace App\Core;

use PDO;
use PDOException;

class Database
{
    private string $host = "localhost";
    private string $dbname = "db_users";
    private string $user = "root";
    private string $password = "";
    private string $charset = "utf8mb4";
    private ?PDO $conn = null;

    public function getConnection() :? PDO
    {
        if ($this->conn !== null) {
            return $this->conn;
        }
    $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset";

    try {
        $this->conn = new PDO($dsn,$this->password);

        $this->conn->setAttribute(PDO::ATTR_ERRPDE, PDO::ERRMODE_EXCEPTION);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Connection error:".$e->getMessage());
    }
    return $this->conn;
    }
}
*/
?>