<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 01 -Empresa PHP</title>
    <link rel="stylesheet" href="stilo.css">
</head>
<body>
    <form id="for" method="post"  action="">
        <h2>Numero de hijos del vendedor</h2>
        
        <input type="text" name="hijos">
        <br>
        <h2>Importe de mes del vendedor</h2>
        
         
        <input type="text" name="import">
        <br>
        <h2>Generar resultado</h2>
        <br>
        <input class="bt" type="submit" name="Calcular" value="Calcular">
        
        <br>
        <ul class="lista">
            <li class="a">COMISION</li>
            <li class="b">BONIFICACION</li>
            <li class="c">SUELDO BRUTO</li>
            <li class="d">DESCUENTO</li>
            <li class="e">SUELDO NETO</li>
        </ul>



    </form>

<?php
if(isset($_POST['hijos'])){


  $varhijos=$_POST['hijos'];
  $varimporte=$_POST['import'];

  $suebasico = 600;
  $comision = 0.075;
  $descuento = 0.11;
  $boni = 50;



  /*------------------Comision-------------------*/ 
  function comision($a , $b){
      $resulc = $a * $b;
      return $resulc;
  }
  $Rcomision = comision($varimporte , $comision);
  echo "<p>S/$Rcomision </p>";
  /*echo " La comision es: \n ".$Rcomision ."<br>" ."<p>yyhh    g</p>";*/
  

  
  /*------------------Bonificacion-------------------*/ 
  function bonificacion($a , $b){
      $resulb = $a * $b;
      return $resulb;
  }
  $Rbonificacion = bonificacion($varhijos , $boni);
  echo "<p>S/$Rbonificacion </p>";
  /*echo "La Bonificacion es:".$Rbonificacion ."<br>" ;*/
  
  /*--------------------------------------------------*/
 /* function total($a,$b){
      $result = $a + $b ;
      return $result;
  }
  echo "tttttt" .total($Rcomision , $Rbonificacion);
  
  function prueva(){
      $resulp = 8 + 10 ;
      return $resulp;
  }
  echo "habe como va esto" .prueva(); */

   /*--------------------------------------------------*/
  function Sueldobruto($a,$b,$c){
      $resultsbruto =  $a + $b + $c ;
      return $resultsbruto;
  }
  $RSuledobruto = Sueldobruto( $suebasico , $Rcomision , $Rbonificacion);
  echo "<p>S/$RSuledobruto </p>";
  /*echo "El sueldo bruto es" .$RSuledobruto ."<br>";*/


  /*---------------Descuento---------------------*/ 

  function Descuento($a,$b){
      $resultdesc = $a * $b;
      return $resultdesc;
  }
  $RDescuento = Descuento($RSuledobruto ,$descuento  );
  echo "<p>S/$RDescuento </p>";
  /*echo " El Dedcuento es de: " .$RDescuento ."<br>";*/

  /*---------------Sueldo Neto---------------------*/ 

  function Sueldoneto($a , $b){
      $resulsneto = $a - $b;
      return $resulsneto;
  }
  $RSueldoneto = Sueldoneto($RSuledobruto , $RDescuento);
  echo "<p>S/$RSueldoneto </p>";
  /*echo " El Sueldo final es de : " .$RSueldoneto ."<br>" ;*/
}



  
        
?>
</body>
</html>