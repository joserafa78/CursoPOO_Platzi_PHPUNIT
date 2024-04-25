<?php
use App\clases\form1;
use App\clases\Persona;
$estado=false;
$mensaje='';
$arregloObjetos = array();

$estu1=new Persona('Jose Rafel','m','3213251',['12.5','17','10']);
$estu1->promedioCalculo();
$arregloObjetos[]=$estu1;

$estu2=new Persona('Ana Fuenla','f','3213251',['10','16.5','16']);
$estu2->promedioCalculo();
$arregloObjetos[]=$estu2;

$estu3=new Persona('Dalila Ulloa','f','3213251',['16','16.3','15']);
$estu3->promedioCalculo();
$arregloObjetos[]=$estu3;

$estu4=new Persona('Naila Garcia','f','35102142',['15','17.3','18']);
$estu4->promedioCalculo();
$arregloObjetos[]=$estu4;



if (form1::valida($_POST)) {
    $arregloObjetos[]=form1::creaObjetoAlunno($_POST);
    $estado=true;

}else{
    $estado=false;

}

?>