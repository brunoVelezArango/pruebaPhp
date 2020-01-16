<?php
 dist=$POST_["$distancia"];
 dias=$POST_["$dias_estancia"];
 
 precio = distancia*35.00;
        let descuento=0;
        if(dist>1000) and (dias>7){
            let descuento = precio * 0.30;
        }
        let total=precio -descuento; 
?>
