<?php

/* En la clase Cliente:
0. Se registra la siguiente información: nombre, apellido, si está o no dado de baja, el tipo y el número de
documento. Si un cliente está dado de baja, no puede registrar compras desde el momento de su baja.
1. Método constructor que recibe como parámetros los valores iniciales para los atributos.
2. Los métodos de acceso de cada uno de los atributos de la clase.
3. Redefinir el método _toString para que retorne la información de los atributos de la clase. */

class Cliente{
    private $nombre;
    private $apellido;
    private $condicion;
    private $tipoDoc;
    private $nroDoc;

    public function __construct($nombreC,$apellidoC,$condicionC,$tipoDocC,$nroDocC){
        $this->nombre=$nombreC;
        $this->apellido=$apellidoC;
        $this->condicion=$condicionC;
        $this->tipoDoc=$tipoDocC;
        $this->nroDoc=$nroDocC;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getCondicion(){
        return $this->condicion;
    }

    public function getTipoDoc(){
        return $this->tipoDoc;
    }

    public function getNroDoc(){
        return $this->nroDoc;
    }

    public function setNombre($nombreC){
        $this->nombre=$nombreC;
    }

    public function setApellido($apellidoC){
        $this->apellido=$apellidoC;
    }

    public function setCondicion($condicionC){
        $this->condicion=$condicionC;
    }

    public function setTipoDoc($tipoDocC){
        $this->tipoDoc=$tipoDocC;
    }

    public function setNroDoc($nroDocC){
        $this->nroDoc=$nroDocC;
    }

    public function __toString(){
        return "Nombre: ".$this->getNombre()."\nApellido: ".$this->getApellido()."\nCondicion: ".$this->getCondicion()."\nTipo documento: ".$this->getTipoDoc()."\nNumero documento: ".$this->getNroDoc();
    }
}