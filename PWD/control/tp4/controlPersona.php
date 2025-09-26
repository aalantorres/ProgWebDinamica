<?php
    include_once(__DIR__.'/../../modelo/tp4/Auto.php');
    include_once(__DIR__.'/../../modelo/tp4/Persona.php');
    include_once(__DIR__.'/../../helpers/funciones.php');
    include_once('controlAuto.php');

    function verPersonas(){
        $objPersona=new Persona();
        $respuesta=$objPersona->listar();
        return $respuesta;
    }
    
    function buscarPersona($dni){
        $chekDni=verificaNumero($dni);
        $encuentra=false;
        $objPersona=new Persona();
        $error="";
        if($chekDni['verifica']){
            $dni=$chekDni['valor'];
            $encuentra=$objPersona->buscar($dni);
            if(!$encuentra){
                $error="Persona no encontrada";
            }
        }
        else{
            $error="No se ingresó un valor numérico";

        }
        $respuesta=[
            'encuentra'=>$encuentra,
            'persona'=>$objPersona,
            'error'=>$error
        ];
        return $respuesta;
    }

    function buscarAutoPersona($dni){
        $error="";
        $arregloAuto=[];
        $buscar=buscarPersona($dni);
        $encuentra=$buscar['encuentra'];
        $objPersona=$buscar['persona'];
        if($encuentra){
            $consulta="SELECT Patente, Marca, Modelo FROM auto WHERE DniDuenio='$dni';";
            $base=new BaseDatos();
            $respuesta=false;
            if($base->Iniciar()){
                if($base->Ejecutar($consulta)){
                    $row=$base->Registro();
                    if($row){   
                        do{
                            $unAuto=[
                            "Patente"=>$row['Patente'],
                            "Marca"=>$row['Marca'],
                            "Modelo"=>$row['Modelo']
                            ];
                            array_push($arregloAuto, $unAuto);
                        }while($row = $base->Registro());
                    }
                }
            }
        }
        else{
            $error=$buscar['error'];
        }
        $respuesta=[
            "encuentra"=>$encuentra,
            "arreglo"=>$arregloAuto,
            "persona"=>$objPersona,
            "error"=>$error
        ];
        return $respuesta;
    }

    function insertarPersona($datos){
        $dni=$datos['dni'];
        $nombre=normalizaTexto($datos['nombre']);
        $apellido=normalizaTexto($datos['apellido']);
        $domicilio=normalizaTexto($datos['domicilio']);
        $telefono=$datos['telefono'];
        $fechaNac=$datos['fechaNac'];
        $objPersona=new Persona();
        $error="";
        $inserta=false;
        if(verificaNumero($dni)['verifica'] && verificaTexto($nombre)['verifica'] && verificaTexto($apellido)['verifica']){
            $objPersona->cargar($nombre, $apellido, $telefono, $fechaNac, $dni, $domicilio);
            $inserta=$objPersona->insertar();
            if(!$inserta){
                $error="No pudo incluirse la persona en la base de datos";
            }
        }
        else{
            $error="Existen campos incorrectos en el formulario";
        }
        $respuesta=[
            "inserta"=>$inserta,
            "error"=>$error
        ];
        return $respuesta;
    }

    function actualizaPersona($datos){
        $dni=trim($datos['dni']);
        $busca=buscarPersona($datos['dni']);
        $nombre=normalizaTexto($datos['nombre']);
        $apellido=normalizaTexto($datos['apellido']);
        $domicilio=normalizaTexto($datos['domicilio']);
        $telefono=$datos['telefono'];
        $fechaNac=$datos['fechaNac'];
        if($busca['encuentra']){
            $objPersona=$busca['persona'];
            if($nombre!=""){
                $objPersona->setNombre($nombre);
            }
            if($apellido!=""){
                $objPersona->setApellido($apellido);
            }
            if($domicilio!=""){
                $objPersona->setDomicilio($domicilio);
            }
            if($telefono!=""){
                $objPersona->setTelefono($telefono);
            }
            if($fechaNac!=""){
                $objPersona->setNombre($fechaNac);
            }
            $actualiza=$objPersona->modificar();
        }
    }

    function normalizaTexto($texto){
    $texto=trim($texto);
    if($texto!="" && preg_match('/^[A-Za-záéíóúüñÑ\s]+$/u', $texto)){
        $texto=ucwords(strtolower($texto));
    }
    return $texto;
    }
?>