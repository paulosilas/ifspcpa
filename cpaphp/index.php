<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        require_once ("require.php");
//        $info= new Coordenador();
//        $info->setId(1);
//        $info->setNome("Lucas");
//        print $info->getId();
//        print $info->getNome();
//        
//        $cinfo= new Curso();
//        $cinfo->setId(1);
//        $cinfo->setNome("Informática");
//        $cinfo->setCoordenador($info);
//        $conn= new Conexao();
//        $conn->testar();
        
        
        echo "teste";
        
        $coordenador = new Coordenador();
        $coordenador->setNome("Lucas");
        $coordenadorDAO = new CoordenadorDAO($coordenador);
        $coordenadorDAO->insert();
        
        ?>
    </body>
</html>



















