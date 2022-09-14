<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Potrero Digital</title>



</head>

<body>
    <header>

        <h1>Trabajo practico N°2
        </h1>
        <h2>Programación: Backend Developer <br>Potrero Digital</h2>
        <h2>Alumno: Javier D'Alessandro</h2>

        <h3>Introduccion a PHP</h3>
        <h4>EJERCICIOS</h4>


    </header>

    <ol>
        <li>
            <p> Crear una variable n y validar que sea un número positivo.</p>
        </li>
        <li>
            <p> Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</p>
        </li>
        <li>
            <p> Crear una variable n y validar que sea un número mayor a 10 o menor a 2</p>
        </li>
        <li>
            <p> Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
                mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
                mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
                numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”</p>
        </li>

    </ol>

    <h4>Ejercicio 1</h4>
    <?php
$n=7;
echo "N es igual a " . $n . "<br>";

if($n>=0){
    echo "El numero " . $n . " es positivo ";

}else{
    echo "El numero " . $n . "no es positivo";
}
?>
    <h4>Ejercicio 2</h4>
    <?php
$n=6;

echo "N es igual a " . $n . "<br>";


 if($n>1 & $n<10){
   echo "El numero " . $n . " Es mayor a 2 y menor a 10";
 }else{

echo "El numero " . $n . " no cumple con la consigna";
 }
?>
    <h4>Ejercicio 3</h4>
    <?php
$n=4;

echo "N es igual a " . $n . "<br>";

if($n>10 || $n<2){
echo "El numero " . $n . " SI cumple con la consigna";

}else{

echo "El numero " . $n . " NO cumple con la consigna";

}

?>

    <h4>Ejercicio 4</h4>

    <?php
$numero1=50;
$numero2=50;
echo "numero1 es igual a " . $numero1. "<br>";
echo "numero2 es igual a " . $numero2 . "<br>";

$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicación=$numero1*$numero2;
$división=floor($numero2/$numero1);
$resto=$numero2%$numero1;

if($numero1>$numero2){
echo " La suma es " . $suma . "<br>";
echo " La resta es " . $resta . "<br>";

}else if($numero1<$numero2){
echo " La multiplicacion es " . $multiplicación . "<br>";
echo " La division es " . $división . "<br>";
echo " El resto es " . $resto . "<br>";

}else{
    echo "Los números ingresados son iguales";
}


?>



</body>

</html>