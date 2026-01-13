<!DOCTYPE html>
<html>

<header><h1>Ejercicios Arrays <h1></header>
<body>
<?php 

echo "<span style='font-weight: bold; font-size: 24px;'>Ejercicio 1</span><br><br>";
 

 $datos = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => 23, "ciudad" => "Barcelona");
 $counter= 1;
 foreach($datos as $valor) {
    echo "dato ". $counter . "º: " . $valor . "<br>";
    $counter++;
 }


echo "<br><span style='font-weight: bold; font-size: 24px;'>Ejercicio 2</span><br><br>";

 $datos = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => 23, "ciudad" => "Barcelona");
 foreach($datos as $key => $valor) {
    echo "$key: $valor <br>";
 }


echo "<br><span style='font-weight: bold; font-size: 24px;'>Ejercicio 3</span><br><br>";

 
 $datos = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => 23, "ciudad" => "Barcelona");
 $counter= 1;
 $datos["edad"] = 24;
 foreach($datos as $valor) {
    echo "dato ". $counter . "º: " . $valor . "<br>";
    $counter++;
 }


echo "<br><span style='font-weight: bold; font-size: 24px;'>Ejercicio 4</span><br><br>";


 $datos = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => 24);
 var_dump($datos);

echo "<br><br><span style='font-weight: bold; font-size: 24px;'>Ejercicio 5</span><br><br>";


 $letters = "a,b,c,d,e,f";

$lettersArray = explode(',', $letters);
$lettersArrayDesc = array_reverse( $lettersArray);
$counter2 = 6;
foreach($lettersArrayDesc as $value) {
   echo "letter " . $counter2 . "º: " . $value . "<br>";
   $counter2--;
}

echo "<br><span style='font-weight: bold; font-size: 24px;'>Ejercicio 6</span><br><br>";

$notas = array("Miguel"=>"5", "Luis"=>"7","Marta"=>"10","Isabel"=>"8","Aitor"=>"4","Pepe"=>"1");
arsort($notas);
echo "Notas de los estudiantes: ";
foreach($notas as $key => $valor) {
    echo "$key: $valor ";
 }
 
 
 echo "<br><br><span style='font-weight: bold; font-size: 24px;'>Ejercicio 7</span><br><br>";
 echo "Media de las notas: ";
 $media = array_sum($notas) / count($notas);
 echo number_format($media, 2)."<br>";
 echo "Alumnos con nota por encima de la media: <br>";
 foreach($notas as $key => $valor) {
   if ($valor > $media) {
      echo $key ."<br>";
   }
  }

 echo "<br><br><span style='font-weight: bold; font-size: 24px;'>Ejercicio 8</span><br><br>";
 echo"La nota mas alta es";
?>

</body>   
</html>
