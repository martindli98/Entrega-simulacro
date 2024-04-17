<?php

/* En la clase Moto:
1. Se registra la siguiente información: código, costo, año fabricación, descripción, porcentaje
incremento anual, activa (atributo que va a contener un valor true, si la moto está disponible para la
venta y false en caso contrario).
2. Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la
clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método toString para que retorne la información de los atributos de la clase.*/

class Moto{
    private $codigo;
    private $costo;
    private $anioFabrica;
    private $descripcion;
    private $porcentaje;
    private $activa;

    public function __construct($codigoM,$costoM,$anioFabricaM,$descripcionM,$porcentajeM,$activaM){
        $this->codigo=$codigoM;
        $this->costo=$costoM;
        $this->anioFabrica=$anioFabricaM;
        $this->descripcion=$descripcionM;
        $this->porcentaje=$porcentajeM;
        $this->activa=$activaM;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function getCosto(){
        return $this->costo;
    }

    public function getAnioFabrica(){
        return $this->anioFabrica;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getPorcentaje(){
        return $this->porcentaje;
    }

    public function getActiva(){
        return $this->activa;
    }

    public function setCodigo($codigoM){
        $this->codigo=$codigoM;
    }

    public function setCosto($costoM){
        $this->costo=$costoM;
    }

    public function setAnioFabrica($anioFabricaM){
        $this->anioFabrica=$anioFabricaM;
    }

    public function setDescripcion($descripcionM){
        $this->descripcion=$descripcionM;
    }

    public function setPorcentaje($porcentajeM){
        $this->porcentaje=$porcentajeM;
    }

    public function setActiva($activaM){
        $this->activa=$activaM;
    }

    /* 5. Implementar el método darPrecioVenta el cual calcula el valor por el cual puede ser
     vendida una moto.
    Si la moto no se encuentra disponible para la venta retorna un valor < 0. Si la moto está
     disponible para
    la venta, el método realiza el siguiente cálculo:
    $_venta = $_compra + $_compra * (anio * por_inc_anual)
    donde $_compra: es el costo de la moto.
    anio: cantidad de años transcurridos desde que se fabricó la moto.
    por_inc_anual: porcentaje de incremento anual de la moto. */
    
    public function darPrecioVenta(){
        $valor=0;
        $anio=date("Y")-($this->getAnioFabrica());
        if ($this->getActiva()==false){
            $valor=-1;
        }
        else{
            $valor=$this->getCosto()+($this->getCosto()*($anio*($this->getPorcentaje())));
        }
        return $valor;
    }

    public function __toString(){
        return $this->getCodigo()."\n".$this->getCosto()."\n".$this->getAnioFabrica()."\n".$this->getDescripcion()."\n".$this->getPorcentaje()."\n".$this->getActiva();
    }
}