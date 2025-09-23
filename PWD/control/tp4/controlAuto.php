<?php
    include_once(__DIR__.'/../../modelo/tp4/Auto.php');
    include_once(__DIR__.'/../../modelo/tp4/Persona.php');
    function consultaPatente($patente){
        $encuentra=false;
        $error="";
        $objAuto=new Auto();
        if(strlen($patente)==6 || strlen($patente)==7){
            $letras=substr($patente, 0, 3);
            if(strlen($patente)==6){
                $numeros=substr($patente, 3, 3);
            }
            else{
                $numeros=substr($patente, 4, 3);
            }
            if(preg_match('/^[0-9]{3}$/', $numeros) && preg_match('/^[A-Za-z]{3}$/', $letras)){
                $patente=$letras." ".$numeros;
                $encuentra=$objAuto->buscar($patente);
                if(!$encuentra){
                    $error="Patente no encontrada.";
                }
            }
            else{
                $error="Patente no válida";
            }
        }
        else{
            $error="Patente no válida";
        }
        $respuesta=[
            "objeto"=>$objAuto,
            "encuentra"=>$encuentra,
            "error"=>$error
        ];
        return $respuesta;
    }

    function verAutos(){
        $objAuto=new Auto();
        $arregloAutos=$objAuto->listar();
        return $arregloAutos;
    }

    function insertarAuto($datos){
        $objAuto=new Auto();
        $dniDuenio=$datos['dni'];
        $patente=$datos['dominio'];
        $modelo=$datos['modelo'];
        $marca=$datos['marca'];
        $error="";
        $objAuto->cargar($patente, $modelo, $marca, $dniDuenio);
        $insertar=$objAuto->insertar();
        if(!$insertar){
            $error="Error al insertar el auto";
        }
        $respuesta=[
            "error"=>$error,
            "inserta"=>$insertar
        ];
        return $respuesta;
    }
?>
