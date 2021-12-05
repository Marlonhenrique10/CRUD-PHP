<?php


class DataBase {

    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '';
    private $banco = 'projeto';
    private $porta = '3306';
    private $dbh;

    public function __construct() {
        
        $dsn = 'mysql:host='.$this->host.';port='.$this->porta.';dname='.$this->banco;
        $opcoes = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];


        try {            
            $this->dbh = new PDO($dsn, $this->usuario, $this->senha, $opcoes);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }    
}


// add o projeto ao github
?>