<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 01 -Operaciones con PHP</title>
</head>
<body>
    <form method="post" action="">0
        Ingresar Valor 1:<br> <input type="text" name="valor1"><br>
        Ingresar Valor 2:<br> <input type="text" name="valor2"><br>
        Resultado: <br>
        <input type="submit" name="Suma" value="Suma">
    </form>

<?php
  $numero1=$_POST['valor1'];
  $numero2=$_POST['valor2'];
  function sumar($a,$b){
      $resultado = $a - $b;
      echo "El resultado de la suma es:".$resultado;
  }
  sumar($numero1,$numero2);
        
?>
</body>
</html>