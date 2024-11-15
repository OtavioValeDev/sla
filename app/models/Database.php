<?php
class Database{
    private $coon;

    public function __construct($config){
        try{
            //dps prenche com as informacoes do config.php
            $this->coon= new PDO("mysql:host=".$config['host'].";dbname=".$config['db_name'].$config['username'].$config['password']);
            $this->coon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $exception){
            echo "Erro de Conexão". $exception->getMessage();
        }
    }
    public function getConnection(){
        return $this->coon;
    }
}