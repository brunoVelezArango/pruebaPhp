<?php
if (empty($_POST["total"])){
  $total=0;  
}else{
    $total=$_POST["total"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form name='formulario' id='formulario' >
<h1>Aerolinea<H1>

<label for="distancia">distancia</label>
<input type="text" id='distancia' name='distancia'>

<label for="dias_estancia">dias_estancia</label>
<input type="text" id='dias_estancia' name='dias_estancia'>


<label for="total">total</label>
<input type="text" id='total' name='total' value=<?php $total ?>>

<button id='calcular' onclick=calcular()>Calcular</button>
</form>
<script>
    function calcular(distancia,dias){
        let dist=getElementById(distancia).value; 
        let dias=getElementById(dias_estancia).value;
        window.location.href = 'calcule.php?$distancia=' + document.formulario.distancia.value +'&$dias_estancia='+ document.formulario.dias estancia.value;
        
    }
    </script>
    
</body>
</html>