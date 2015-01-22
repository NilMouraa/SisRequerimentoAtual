<?php

error_reporting(E_ERROR);

include_once "../../conexao.php";

function dataAlunos() {
    $sql= " SELECT a.nmAluno as nome,a.periodo as periodo, a.email as email, a.telefone  FROM aluno a ";
    $res = mysql_query($sql);

      while ($row = mysql_fetch_array($res)) {
    
        $arrItens [] = array(
            "nome" => $row[0],
            "periodo" => $row[1],
            "email" => $row[2],
            "telefone" => $row[3],
            "cod" => $row[4],
        );
    }
        
        //print_r($arrItens);
       
        echo( json_encode($arrItens));
    }
    dataAlunos();
    

?>