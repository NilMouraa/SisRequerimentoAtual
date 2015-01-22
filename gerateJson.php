<?php
error_reporting(E_ERROR);
include_once 'conexao.php';
$nMirrorBar1;
$nMirrorBar2; //Criar vetor;
$nMirrorBar3;
$nMirrorBar4;
function gerateJsonArea() {

    $sql = "SELECT y, item1, item2 FROM geral";
    $sql2 = "SELECT * FROM 
(SELECT concat(concat(R.data,' '),concat('Q',R.semestre)) as y, count(*) as item1 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula com Quebra' and
 R.data='2011' and semestre=1) as T1 
 
 INNER JOIN 
 
 ( SELECT count(*) as item2 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula' and
 R.data='2011' and semestre=1) as T2
 
 UNION
 
 SELECT * FROM 
(SELECT concat(concat(R.data,' '),concat('Q',R.semestre)) as y, count(*) as item1 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula com Quebra' and
 R.data='2011' and semestre=2) as T1 
 
 INNER JOIN 
 
 ( SELECT count(*) as item2 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula' and
 R.data='2011' and semestre=2) as T2
 
 UNION
 
 SELECT * FROM 
(SELECT concat(concat(R.data,' '),concat('Q',R.semestre)) as y, count(*) as item1 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula com Quebra' and
 R.data='2012' and semestre=1) as T1 
 
 INNER JOIN 
 
 ( SELECT count(*) as item2 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula' and
 R.data='2012' and semestre=1) as T2
 
 UNION
 
 SELECT * FROM 
(SELECT concat(concat(R.data,' '),concat('Q',R.semestre)) as y, count(*) as item1 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula com Quebra' and
 R.data='2012' and semestre=2) as T1 
 
 INNER JOIN 
 
 ( SELECT count(*) as item2 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula' and
 R.data='2012' and semestre=2) as T2
 
 UNION
 
 SELECT * FROM 
(SELECT concat(concat(R.data,' '),concat('Q',R.semestre)) as y, count(*) as item1 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula com Quebra' and
 R.data='2013' and semestre=1) as T1 
 
 INNER JOIN 
 
 ( SELECT count(*) as item2 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula' and
 R.data='2013' and semestre=1) as T2
 
 UNION
 
 SELECT * FROM 
(SELECT concat(concat(R.data,' '),concat('Q',R.semestre)) as y, count(*) as item1 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula com Quebra' and
 R.data='2013' and semestre=2) as T1 
 
 INNER JOIN 
 
 ( SELECT count(*) as item2 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula' and
 R.data='2013' and semestre=2) as T2
 
 ";
    
    $res = mysql_query($sql2);
    $arrItens = array();
    while ($row = mysql_fetch_array($res)) {
        $arrItens[] = array(
            "y" => $row[0],
            "item1" => $row[1],
            "item2" => $row[2],
        );
    }
    return json_encode($arrItens);
}


function gerateJsonLine(){
    
    $sql= $sql = "SELECT concat(concat(R.data,' '),concat('Q',R.semestre)) as y, count(*) as item1 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula com Quebra' and
 R.data='2011' and semestre=1
 
 UNION

SELECT concat(concat(R.data,' '),concat('Q',R.semestre)) as y, count(*) as item1 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula com Quebra' and
 R.data='2011' and semestre=2

 
 UNION
 
SELECT concat(concat(R.data,' '),concat('Q',R.semestre)) as y, count(*) as item1 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula com Quebra' and
 R.data='2012' and semestre=1

 UNION
 
SELECT concat(concat(R.data,' '),concat('Q',R.semestre)) as y, count(*) as item1 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula com Quebra' and
 R.data='2012' and semestre=2
 
 UNION

SELECT concat(concat(R.data,' '),concat('Q',R.semestre)) as y, count(*) as item1 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula com Quebra' and
 R.data='2013' and semestre=1
 
 UNION
 
SELECT concat(concat(R.data,' '),concat('Q',R.semestre)) as y, count(*) as item1 FROM
 requerimento R,situacaorequerimento SR,tiporequerimento TR 
 WHERE R.cdTipoRequerimento = TR.cdTipoRequerimento and
 R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido' and
 nmTipoRequerimento = 'Matricula com Quebra' and
 R.data='2013' and semestre=2
";
    $res = mysql_query($sql);
    $arrItens = array();
    while ($row = mysql_fetch_array($res)) {
        $arrItens[] = array(
            "y" => $row[0],
            "item1" => $row[1],
            
        );
    }
    return json_encode($arrItens);
    
}

function gerateJsonDonut(){
    $sql="SELECT concat(SR.nmSituacao,'s') as label, count(*) as value FROM
 requerimento R,situacaorequerimento SR
 WHERE R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Novo' 
 
 UNION
 
 SELECT concat(SR.nmSituacao,'s') as label, count(*) as value FROM
 requerimento R,situacaorequerimento SR
 WHERE R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Indeferido' 
 
 UNION
 

SELECT concat(SR.nmSituacao,'s') as label, count(*) as value FROM
 requerimento R,situacaorequerimento SR
 WHERE R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Pendente'


 UNION

SELECT concat(SR.nmSituacao,'s') as label, count(*) as value FROM
 requerimento R,situacaorequerimento SR
 WHERE R.codSituacao = SR.codSituacao and
 SR.nmSituacao = 'Deferido'
 
 ";
    $res = mysql_query($sql);
    $arrItens = array();
    while ($row = mysql_fetch_array($res)) {
        $arrItens[] = array(
            "label" => $row[0],
            "value" => $row[1],
            
        );
        
       
} // olhar situação relacionada a quant de requerimentos novos ser zero
        return json_encode($arrItens);
    
}

function novosLable(){
    
    $sql="SELECT count(*) FROM `requerimento` WHERE codSituacao=1";
    $res = mysql_query($sql);
    $row = mysql_fetch_array($res);
    
    return ($row[0]);
}

function gerateJsonBar() {
    $cont = 0;
    $sql = "select d.cdDisciplina,d.sigla, a.qtd FROM (SELECT rr.cdDisciplina, count(*) as qtd FROM requerimento r , disciplina d, req_requisito rr WHERE rr.cdRequerimento = r.cdRequerimento and r.cdDisciplina = d.cdDisciplina and r.codSituacao = '4' and r.cdTipoRequerimento = '3' and data = '2013' group by rr.cdDisciplina) a, disciplina d where a.cdDisciplina = d.cdDisciplina order by qtd desc limit 4";
    $res = mysql_query($sql);

    $arrItens = array();

    while ($row = mysql_fetch_array($res)) {
        $arrItens[] = array(
            "cdDisc" => $row[0],
            "sigla" => $row[1],
            "qtd" => $row[2],
        );
        
        if ($cont < 4) {

            if ($cont === 0) {
                $d1 = $row[0];
                $nMirrorBar1=$row[1];
            } else if ($cont === 1) {
                $d2 = $row[0];
                $nMirrorBar2=$row[1];
            } else if ($cont === 2) {
                $d3 = $row[0];
                $nMirrorBar3=$row[1];
            } else if ($cont === 3) {
                $d4 = $row[0];
                $nMirrorBar4=$row[1];
            }
            $cont++;
        }
    }
   

    $sql2 = "SELECT * FROM (SELECT '2010' as y, count(*) as a FROM requerimento R, req_requisito RR WHERE
 RR.cdRequerimento = R.cdRequerimento and
 R.cdTipoRequerimento = '3' and
 R.codSituacao = '4' and
 R.data='2010' and
 RR.cdDisciplina = $d1) as D1 
 
 INNER JOIN 
 
 (SELECT count(*) as b FROM requerimento R, req_requisito RR WHERE
 RR.cdRequerimento = R.cdRequerimento and
 R.cdTipoRequerimento = '3' and
 R.codSituacao = '4' and
 R.data='2010' and
 RR.cdDisciplina = $d2) as D2 
 
 INNER JOIN 
 
 (SELECT count(*) as c FROM requerimento R, req_requisito RR WHERE
 RR.cdRequerimento = R.cdRequerimento and
 R.cdTipoRequerimento = '3' and
 R.codSituacao = '4' and
 R.data='2010' and
 RR.cdDisciplina = $d3) as D3 
 
 INNER JOIN 
 
 (SELECT count(*) as d FROM requerimento R, req_requisito RR WHERE
 RR.cdRequerimento = R.cdRequerimento and
 R.cdTipoRequerimento = '3' and
 R.codSituacao = '4' and
 R.data='2010' and
 RR.cdDisciplina = $d3) as D4

UNION

SELECT * FROM (SELECT '2011' as y, count(*) as a FROM requerimento R, req_requisito RR WHERE
 RR.cdRequerimento = R.cdRequerimento and
 R.cdTipoRequerimento = '3' and
 R.codSituacao = '4' and
 R.data='2011' and 
 RR.cdDisciplina = $d1) as D1 
 
 INNER JOIN 
 
 (SELECT count(*) as b FROM requerimento R, req_requisito RR WHERE
 RR.cdRequerimento = R.cdRequerimento and 
 R.cdTipoRequerimento = '3' and
 R.codSituacao = '4' and
 R.data='2011' and RR.cdDisciplina = $d2) as D2 
 
 INNER JOIN 

(SELECT count(*) as c FROM requerimento R, req_requisito RR WHERE
 RR.cdRequerimento = R.cdRequerimento and
 R.cdTipoRequerimento = '3' and
 R.codSituacao = '4' and
 R.data='2011' and
 RR.cdDisciplina = $d3) as D3 
 
 INNER JOIN 

(SELECT count(*) as d FROM requerimento R, req_requisito RR WHERE
 RR.cdRequerimento = R.cdRequerimento and
 R.cdTipoRequerimento = '3' and
 R.codSituacao = '4' and
 R.data='2011' and
 RR.cdDisciplina = $d4) as D4

UNION

SELECT * FROM (SELECT '2012' as y, count(*) as a FROM requerimento R, req_requisito RR WHERE
 RR.cdRequerimento = R.cdRequerimento and
 R.cdTipoRequerimento = '3' and
 R.codSituacao = '4' and
 R.data='2012' and
 RR.cdDisciplina = $d1) as D1 
 
 INNER JOIN 

(SELECT count(*) as b FROM requerimento R, req_requisito RR WHERE
 RR.cdRequerimento = R.cdRequerimento and
 R.cdTipoRequerimento = '3' and
 R.codSituacao = '4' and
 R.data='2012' and
 RR.cdDisciplina = $d2) as D2 
 
 INNER JOIN 
 
 (SELECT count(*) as c FROM requerimento R, req_requisito RR WHERE
 RR.cdRequerimento = R.cdRequerimento and
 R.cdTipoRequerimento = '3' and
 R.codSituacao = '4' and
 R.data='2012' and RR.cdDisciplina = $d3) as D3 
 
 INNER JOIN 
 
 (SELECT count(*) as d FROM requerimento R, req_requisito RR WHERE
 RR.cdRequerimento = R.cdRequerimento and
 R.cdTipoRequerimento = '3' and
 R.codSituacao = '4' and
 R.data='2012' and
 RR.cdDisciplina = $d4) as D4

UNION

SELECT * FROM (SELECT '2013' as y, count(*) as a FROM requerimento R, req_requisito RR WHERE
 RR.cdRequerimento = R.cdRequerimento and
 R.cdTipoRequerimento = '3' and
 R.codSituacao = '4' and
 R.data='2013' and
 RR.cdDisciplina = $d1) as D1 
 
 INNER JOIN 

(SELECT count(*) as b FROM requerimento R, req_requisito RR WHERE
 RR.cdRequerimento = R.cdRequerimento and
 R.cdTipoRequerimento = '3' and
 R.codSituacao = '4' and
 R.data='2013' and
 RR.cdDisciplina = $d2) as D2 
 
 INNER JOIN 
 
 (SELECT count(*) as c FROM requerimento R, req_requisito RR WHERE
 RR.cdRequerimento = R.cdRequerimento and
 R.cdTipoRequerimento = '3' and
 R.codSituacao = '4' and
 R.data='2013' and
 RR.cdDisciplina = $d3) as D3 
 
 INNER JOIN 
 
 (SELECT count(*) as d FROM requerimento R, req_requisito RR WHERE
 RR.cdRequerimento = R.cdRequerimento and
 R.cdTipoRequerimento = '3' and
 R.codSituacao = '4' and
 R.data='2013' and
 RR.cdDisciplina = $d4) as D4";

    $res2 = mysql_query($sql2);

    $arrItens2 = array();

    while ($row = mysql_fetch_array($res2)) {
        $arrItens2[] = array(
            "y" => $row[0],
            "a" => $row[1],
            "b" => $row[2],
            "c" => $row[3],
            "d" => $row[4],
        );
    }
    //print_r($arrItens2);
    //echo (json_encode($arrItens2));
   
    return json_encode($arrItens2);
}
 

function returna_NameMirroBar($var) {

    $res = "select d.sigla as '' FROM (SELECT rr.cdDisciplina, count(*) as qtd FROM requerimento r , disciplina d, req_requisito rr WHERE rr.cdRequerimento = r.cdRequerimento and r.cdDisciplina = d.cdDisciplina and r.codSituacao = '4' and r.cdTipoRequerimento = '3' and data = '2013' group by rr.cdDisciplina) a, disciplina d where a.cdDisciplina = d.cdDisciplina order by qtd desc limit 4";


    $res32 = mysql_query($res);

    $arrItens3 = array();

    while ($row = mysql_fetch_array($res32)) {
        $arrItens3[] =
         $row[0]
        ;

      
        //echo(json_encode($arrItens3));
        //echo $nMirrorBar4;
    }
      if($var === 1 )
      return $arrItens3[0];
      else if($var === 2 )
      return $arrItens3[1];
      else if($var === 3 )
      return $arrItens3[2];
      else if($var === 4 )
      return $arrItens3[3];
      else return '';
}





?>

<script></script>
