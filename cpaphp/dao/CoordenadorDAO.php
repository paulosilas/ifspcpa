<?php
require_once("require.php");

class CoordenadorDAO {
    private $conexao;
    private $coord;
    
    public function __construct($coordenador){
        $this->conexao = Conexao::getInstance();
        $this->coord= $coordenador;
    }
    
    public function insert(){
       $nome= (string)$this->coord->getNome();
       $sql= "INSERT INTO coordenador "
               . "(nome)"
               . " VALUES ('$nome')";
       $this->conexao->execute($sql);        
    }
    
    
}
