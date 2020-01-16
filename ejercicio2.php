<?php
 
    
    if (empty($_POST[$tam])){
      $tam=0;  
    }else{
       $tam=$_POST["$tam"];
    }

    if (empty($_POST["$total"])){
        $total=0;  
      }else{
          $total=$_POST["$total"];
      }

      if (empty($_POST["$peso_promedio"])){
        $peso_promedio=0;  
      }else{
          $peso_promedio=$_POST["$peso_promedio"];
      }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boing 747</title>
</head>
<body>
<form name='formulario' id='formulario' action="boing.php">
    <label for="paq">Numero de paquetes</label>
    <input type="text" id='paq' value=<?php echo $tam?>

    <label for="">Bulto Mas liviano</label>
    <input type="text" id='paq' <?php echo $mayor ?>>

    <label for="paq">Bulto mas pesado</label>
    <input type="text" id='paq' <?php $menor ?>>

    <label for="paq">peso promedio</label>
    <input type="text" id='paq' <?php $peso_promedio ?>>

    <button id='calcular' onclick=calcular()>Ingresar Bultos</button>    
</form>
    <script>
        let i=0;
        var paq();
     while(prompt('desea ingresar un paquete')=='y'){
        let paq(0,i)=prompt('peso de paquete '+i+": ");
     }
          
    window.location.href = 'boing.php?$paq=' + paq ;
    </script>
</body>
</html>