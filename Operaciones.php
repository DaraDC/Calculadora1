<?php
$Cantidad1=$_POST['C1'];
$Cantidad2=$_POST['C2'];

$Operador=$_POST['operaciones'];

$RESULTADO= 'EL RESULTADO DE LA OPERACION ES: ';

if($Operador== 'Suma')
{
	echo $RESULTADO=($Cantidad1+$Cantidad2);
}
else if ($Operador== 'Resta')
{
    echo $RESULTADO=($Cantidad1-$Cantidad2);
}
else if ($Operador== 'Multiplicación')
{
    echo $RESULTADO=($Cantidad1*$Cantidad2);
}
else if ($Operador== 'División')
{
    echo $RESULTADO=($Cantidad1/$Cantidad2);
}

?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="Estilos.css" />
</head>
<body>
<header>
  <div align="center" id="RESULTADO">
   <h1> RESULTADO </h1>
 </div>
</header>
<section>
 <div align="center" id="mostrar">
 <p> <?php echo 'EL RESULTADO DE LA OPERACION ES: '.$RESULTADO; ?> </php>
 </div>
 </section>
</body>
</html>