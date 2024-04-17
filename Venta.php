<?php

/* En la clase Venta:
1. Se registra la siguiente información: número, fecha, referencia al cliente, referencia a una colección de
motos y el precio final.
2. Método constructor que recibe como parámetros cada uno de los valores a ser asignados a cada
atributo de la clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.*/

class Venta{
    private $numero;
    private $fecha;
    private $referenciaAlCliente;
    private $arrayMotos;
    private $precioFinal;

    public function __construct($numeroV,$fechaV,$referenciaAlClienteV,$arrayMotosV,$precioFinalV){
        $this->numero=$numeroV;
        $this->fecha=$fechaV;
        $this->referenciaAlCliente=$referenciaAlClienteV;
        $this->arrayMotos=$arrayMotosV;;
        $this->precioFinal=$precioFinalV;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getReferenciaAlCliente(){
        return $this->referenciaAlCliente;
    }

    public function getArrayMotos(){
        return $this->arrayMotos;
    }

    public function getPrecioFinal(){
        return $this->precioFinal;
    }

    public function setNumero($numeroV){
        $this->numero=$numeroV;
    }

    public function setFecha($fechaV){
        $this->fecha=$fechaV;
    }

    public function setReferenciaAlCliente($referenciaAlClienteV){
        $this->referenciaAlCliente=$referenciaAlClienteV;
    }

    public function setArrayMotos($arrayMotosV){
        $this->arrayMotos=$arrayMotosV;
    }

    public function setPrecioFinal($precioFinalV){
        $this->precioFinal=$precioFinalV;
    }

    /* 5. Implementar el método incorporarMoto($objMoto) que recibe por parámetro un 
    objeto moto y lo incorpora a la colección de motos de la venta, siempre y cuando 
    sea posible la venta.
    El método cada vez que incorpora una moto a la venta, debe actualizar la variable 
    instancia precio final de la venta.
    Utilizar el método que calcula el precio de venta de la moto donde crea necesario. */

    public function incorporarMoto($objMoto){
        $arrayVentas=[];
        if ($objMoto->getActiva()==true){
            $arrayVentas[]=$objMoto;
            $this->setArrayMotos($arrayVentas);
            $precioActual=$this->getPrecioFinal();
            $this->setPrecioFinal($precioActual+($objMoto->darPrecioVenta()));
        }
    }

    public function __toString(){
        return $this->getNumero()."\n".$this->getFecha()."\n".$this->getReferenciaAlCliente()."\n".$this->getColeccionMotos()."\n".$this->getPrecioFinal();
    }
}