<?php

error_reporting(E_ERROR);

include_once "../../conexao.php";

function dataDeferidos() {
    $sql= " SELECT a.nmAluno as nome,a.periodo as periodo,sr.nmSituacao as situacao, a.matricula as cod  FROM aluno a, requerimento r, situacaorequerimento sr WHERE a.matricula = r.matricula and sr.codSituacao = r.codSituacao and sr.codSituacao = 4 ";
    $res = mysql_query($sql);

      while ($row = mysql_fetch_array($res)) {
    
        $arrItens [] = array(
            "nome" => $row[0],
            "periodo" => $row[1],
            "situacao" => $row[2],
            "cod" => $row[3],
        );
    }
        
        //print_r($arrItens);
       
        echo( json_encode($arrItens));
    }
    dataDeferidos();
    

?>