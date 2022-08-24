<?php
function calc($num1,$oper,$num2){
    switch($oper){
        case "+":
            echo $num1+$num2;
            break;
         case "-":
            echo $num1-$num2;
            break; 
         case "x":
            echo $num1*$num2;
            break;
        case "/":
            echo $num1/$num2;
            break;       
   } 
}
$num1= $_POST["num1"];
$oper=$_POST["oper"];
$num2=$_POST["num2"];
calc($num1,$oper,$num2);
?>