<?php
 $Cantidad1=$_POST['C1'];
 $Cantidad2=$_POST['C2'];

$Operador=$_POST['operaciones'];

 if($Operador== 'Suma')
 {
     echo"EL RESULTADO DE LA OPERACION A REALIZAR ES:".($Cantidad1+$Cantidad2);
 }
 else if($Operador== 'Resta')
 {
     echo"EL RESULTADO DE LA OPERACION A REALIZAR ES:".($Cantidad1-$Cantidad2);
 }
 else if($Operador== 'Multiplicaci�n')
 {
     echo"EL RESULTADO DE LA OPERACION A REALIZAR ES:".($Cantidad1*$Cantidad2);
 }
 else if($Operador== 'Divisi�n')
 {
     echo"EL RESULTADO DE LA OPERACION A REALIZAR ES:".($Cantidad1/$Cantidad2);
 }

?>