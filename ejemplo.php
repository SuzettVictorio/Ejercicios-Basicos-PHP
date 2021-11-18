<html>
///1.Solicite al usuario capturar su nombre utilizando form, al hacerlo ejecute un action que imprima el nombre al usuario.
<?php
    echo "<h1>Te damos la bienvenida <h1>";
    echo $_REQUEST["name"];
?>
 
///2.Solicite la edad del usuario, valide que este tenga o no la edad para conducir.
<!-- <?php
    $edad = $_GET["annios"];
    // se crea una funcion para calcular la edad
    function calcular_edad($fecha_nac){
        list($annio,$mes,$dia) = explode("-",$fecha_nac);
        $annio_dif  = date("Y") - $annio;
        $mes_dif = date("m") - $mes;
        $dia_dif   = date("d") - $dia;
        if ($dia_dif < 0 || $mes_dif <0)
          $annio_dif--;

        if($annio_dif >=18){
            echo "Eres mayor de edad, puedes conducir ";
        }else{
            echo "Eres menor de edad, no tienes permiso para conducir!!!";
        }
        return $annio_dif;
      }
     echo "Edad :".calcular_edad($edad); 
?> -->  -->

///3.Solicite una calificación, muestre el nombre de la categoría de dicha calificación
<!-- <?php
    $califi = intval($_REQUEST["calificacion"]);
    if($califi >= 0 and $califi < 11){
        if($califi >= 0 and $califi < 3){
            echo "<h1>. </h1>";
            echo "<h1> Muy deficiente.</h1>";
        }elseif($califi >= 3 and $califi < 5){
            echo "<h1> Insuficiente.</h1>";
        }elseif($califi >= 5 and $califi < 6){
            echo "<h1> Suficiente.</h1>";
        }elseif($califi >= 6 and $califi < 7){
            echo "<h1> Bien.</h1>";
        }elseif($califi >= 7 and $califi < 9){
            echo "<h1> Notable.</h1>";
        }elseif($califi >= 9 and $califi <= 10){
            echo "<h1> Sobresaliente.</h1>";
        }
    }else{
        echo "<h1> Digita una Calificacion del 0 al 10: </h1>";
    }
?> -->
///4.Solicite al usuario capturar 10 calificaciones, el usuario capturará la cantidad de calificaciones definida y al terminar se mostrará el promedio.
<!-- <?php
    print_r($_REQUEST);
    $promedio =0;
    foreach($_REQUEST["calificacion"] as $key => $value){
        $promedio += intval($value);
    }
    $promedio = $promedio/10;
    echo "Su promedio es: $promedio";
?> -->

///5.Imprima N números de la sucesión fibonacci. N debe estar definido por el usuario.
<!--<html>
<head>
        <title>Fibonacci</title>
</head>
<body>
    <?php
        $num=$_POST['num'];
        $x=0;
        $y=1;
        $acum=0;
        for($i=1;$i<=$num;$i++){
            echo $i."=> ".$x."<br>";
            $acum=$x+$y;
            $x=$y;
            $y=$acum;
        }
    ?>
    <a href="index.php">REGRESAR</a>
</body>
</html> -->