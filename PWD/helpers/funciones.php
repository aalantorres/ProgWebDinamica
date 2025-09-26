<?php
function verificaNumero($num){
        $num=trim($num);
        $verifica=false;
        if(preg_match('/^[0-9]+$/', $num)){
            $verifica=true;
        }
        $respuesta=[
            "verifica"=>$verifica,
            "valor"=>$num
        ];
        return $respuesta;
    }

function verificaTexto($txt){
    $txt=trim($txt);
    $verifica=false;
    if(preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/', $txt)){
        $verifica=true;
    }
    $respuesta=[
        "verifica"=>$verifica,
        "valor"=>$txt
    ];
    return $respuesta;
}
?>

