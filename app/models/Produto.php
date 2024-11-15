<?php
require_once 'Database.php';

class Produto{
    private $coon;
    private $table='produtos';

    public function __construct($db){
        $this->coon=$db;
    }

    public function listarProdutos(){
        $query= "SELECT*FROM". $this->table;
        $stmt=$this->coon->prepare($query);
        $stmt->execute();
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }
}