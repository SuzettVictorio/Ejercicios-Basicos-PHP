<!DOCTYPE html>
<html lang"en">
<title>Ejercicios básicos PHP</title>
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<!-- ///1.Solicite al usuario capturar su nombre utilizando form, al hacerlo ejecute un action que imprima el nombre al usuario.
 <h1>Captura de datos</h1>
 <form method=post action="ejemplo.php">
        <label>Ingrese su nombre :</label>
        <input type="text"  name="name"  placeholder="Nombre" />
        <input type="submit" value="Enviar">
    </form> -->

 <!-- ///2.Solicite la edad del usuario, valide que este tenga o no la edad para conducir.
 <!-- <h2>Calcular la edad </h2>
    <form method ="get" action="ejemplo.php">
        <label >Ingrese su año de nacimiento</label>
        <input type="date" name="annios"/>
        <input type="submit" value="Enviar">
    </form> -->

<!-- ///3.Solicite una calificación, muestre el nombre de la categoría de dicha calificación
    <h3>Calificacion</h3>
    <h3>Ingrese una Calificacion del 0 al 10.</h3>
    <form method="get" action="/calificaciones.php">
        <input type="text" name="calificacion"/>
        <input type="submit" value="Enviar"/>
    </form> -->

<!-- ///4.Solicite al usuario capturar 10 calificaciones, el usuario capturará la cantidad de calificaciones definida y al terminar se mostrará el promedio.
<h4>Calcular la edad </h4>
</head>
<body>
    <form method="get" action="ejemplo.php">
    <?php for ($i=1; $i<=10; $i++) { ?>
        <div> 
            <label for="calificacion<?=$i?>">Agregue su calificacion:</label>
            <input type="number" name="calificacion[]" id="calificacion<?=$i?>"/>
        </div>
    
    <?php }?>
        <input type="submit" value="Enviar"/> 
    </form>
</body>
</html>  -->

<!--///5.Imprima N números de la sucesión fibonacci. N debe estar definido por el usuario.
<!-- <html>
<head>
    <title>Fibonacii</title>
</head>

<body>
    <form  action="ejemplo.php" method="POST">
        <table>
            <tr>
               <td colspan="2"> 
                   <center><h3>Fibonacci</h3></center>
                </td>
            </tr>
            <tr> 
                <td>Escriba un número</td>
                <td><input type="number" name="num" required="true"></td>
            </tr>
            <tr>
                <td>
                   <input type="submit" value="Obtener">
                </td>
                <td>
                    <input type="reset" value="Cancelar">
                </td>
            </tr>
        </table>
    </form>
 </body> -->
 
</html> 