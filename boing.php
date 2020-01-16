$paquete = $POST["paq"];

$tam= count($paquete);
$i=0

$precio_bulto=0;
$total=0;
$totalpeso=0;

$mayor=$paquete[0,0];
$menor=$paquete[0,0]; 

for($i;$i<=$tam;$i++){
    if( $paquete[0,i] < $menor )
    {
        $menor=$paquete[0,$i];
    }
    if( $paquete[0,$i] > $mayor )
    {
        $mayor=$paquete[0,i]
    }
    switch ($paquete[0,$i]) {
    case [0-25]:
        break;
    case [26-300]:
        $precio_bulto=$paquete[0,$i]*1500;
        break;
    case [301-500]:
        $precio_bulto=$paquete[0,$i]*2500;
        break;
    }
    $totalpeso = $totalpeso + $paquete[0,$i]; 
    $total = $total + $precio_bulto;
}    
    $peso_promedio = $totalpeso  / $tam;
    exit(); 
?> 
