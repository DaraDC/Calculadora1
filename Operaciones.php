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
 else if($Operador== 'Multiplicación')
 {
     echo"EL RESULTADO DE LA OPERACION A REALIZAR ES:".($Cantidad1*$Cantidad2);
 }
 else if($Operador== 'División')
 {
     echo"EL RESULTADO DE LA OPERACION A REALIZAR ES:".($Cantidad1/$Cantidad2);
 }

?>