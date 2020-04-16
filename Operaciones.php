<?php
 $Cantidad1=$_POST['C1'];
 $Cantidad2=$_POST['C2'];

 $Operador=$_POST('operaciones')

 if($Operador== 'suma')
 {
     echo"EL RESULTADO DE LA OPERACION A REALIZAR ES:".($Cantidad1+$Cantidad2);
 }
 else if($Operador== 'resta')
 {
     echo"EL RESULTADO DE LA OPERACION A REALIZAR ES:".($Cantidad1-$Cantidad2);
 }
 else if($Operador== 'multiplicacion')
 {
     echo"EL RESULTADO DE LA OPERACION A REALIZAR ES:".($Cantidad1*$Cantidad2);
 }
 else if($Operador== 'division')
 {
     echo"EL RESULTADO DE LA OPERACION A REALIZAR ES:".($Cantidad1/$Cantidad2);
 }
?>