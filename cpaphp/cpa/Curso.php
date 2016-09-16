<?php
require_once("require.php");

class Curso {
   private $id;
   private $nome;
   private $Coordenador;
   
   public function __construct() {
       
   }

   public function getId() {
       return $this->id;
   }

   public function getNome() {
       return $this->nome;
   }

   public function getCoordenador() {
       return $this->Coordenador;
   }

   public function setId($id) {
       $this->id = $id;
   }

   public function setNome($nome) {
       $this->nome = $nome;
   }

   public function setCoordenador($Coordenador) {
       $this->Coordenador = $Coordenador;
   }


   
   
}
