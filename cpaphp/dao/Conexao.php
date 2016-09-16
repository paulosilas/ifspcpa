<?php

require_once("require.php");
class Conexao implements IConexao{
    private $mysql;
    private $host= IConexao::HOST;
    private $base= IConexao::BASE;
    private $senha= IConexao::SENHA;
    private $usuario= IConexao::USUARIO;
    private static $conexao;
    
    private function __construct(){
        $this->conectar();
    }
    
    public static function getInstance(){
        if(empty(self::$conexao)){
            self::$conexao= new Conexao();
        }
        return self::$conexao;        
    }
    
    
    
    
    public function conectar() {
        $this->mysql= new mysqli($this->host, $this->usuario, 
                              $this->senha, $this->base);
        if(mysqli_connect_error()){
            die ("Falha na Conexão!!!");
        }
    }

    public function desconectar() {
        $this->mysql->close();
    }

    public function testar() {
        $this->mysql= new mysqli($this->host, $this->usuario, 
                              $this->senha, $this->base);
        if(mysqli_connect_error()){
            die ("Falha na Conexão!!!");
        }
        print ("Conexão OK!");
    }
    
    public function execute($sql){
        if($this->mysql->query($sql) == false){
            printf("Erro: %s<br/> SQL: %s <br/>", 
                      $this->mysql->error, $sql);
            return false;
        }
        return true;
    }
    
    
    
    

}
