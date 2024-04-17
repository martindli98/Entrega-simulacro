<?php

/* En la clase Empresa:
1. Se registra la siguiente información: denominación, dirección, la colección de clientes
, colección de motos y la colección de ventas realizadas.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos
de la clase.
3. Los métodos de acceso para cada una de las variables instancias de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la 
clase.*/ 

class Empresa{
    private $denominacion;
    private $direccion;
    private $arrayCliente;
    private $arrayMotos;
    private $arrayVentas;

    public function __construct($denominacion,$direccion,$arrayCliente,$arrayMotos,$arrayVentas){
        $this->denominacion=$denominacion;
        $this->direccion=$direccion;
        $this->arrayCliente=$arrayCliente;
        $this->arrayMotos=$arrayMotos;
        $this->arrayVentas=$arrayVentas;
    }

    public function getDenominacion(){
        return $this->denominacion;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getArrayCliente(){
        return $this->arrayCliente;
    }

    public function getArrayMotos(){
        return $this->arrayMotos;
    }

    public function getArrayVentas(){
        return $this->arrayVentas;
    }

    public function setDenominacion($denominacion){
        $this->denominacion=$denominacion;
    }

    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }

    public function setArrayCliente($arrayCliente){
        $this->arrayCliente=$arrayCliente;
    }

    public function setArrayMotos($arrayMotos){
        $this->arrayMotos=$arrayMotos;
    }

    public function setArrayVentas($arrayVentas){
        $this->arrayVentas=$arrayVentas;
    }


    /* 5. Implementar el método retornarMoto($codigoMoto) que recorre la colección de
     motos de la Empresa y retorna la referencia al objeto moto cuyo código coincide 
     con el recibido por parámetro.*/

    public function retornarMoto($codigoMoto){
        $i=0;
        $banderita=false;
        $arrayMotos=$this->getArrayMotos();
        while ($i<count($arrayMotos) && $banderita==true){
            $objMoto=$arrayMotos[$i];
            if ($objMoto->getCodigo()==$codigoMoto){
                $banderita=true;
            }
            $i++;
        }
        return $objMoto;
    }
 
    /* 6. Implementar el método registrarVenta($colCodigosMoto, $objCliente) método que 
    recibe por parámetro una colección de códigos de motos, la cual es recorrida, y por 
    cada elemento de la colección se busca el objeto moto correspondiente al código y se
    incorpora a la colección de motos de la instancia Venta que debe ser creada. Recordar 
    que no todos los clientes ni todas las motos, están disponibles para registrar una
    venta en un momento determinado. El método debe setear los variables instancias de 
    venta que corresponda y retornar el importe final de la venta. */

    public function registrarVenta($colCodigosMoto, $objCliente){
        $importeFinal=0;
        $venta=new venta(null,date("Y-m-d"),$objCliente,null,0);
        foreach ($colCodigosMoto as $codigoMoto){
            $objMotoCod=$this->retornarMoto($codigoMoto);
            if ($objMotoCod != null && $objMotoCod->getActiva()==true && $objCliente->getCondicion()==true){
                $venta->incorporarMoto($objMotoCod);
                $importeFinal=$importeFinal+$objMotoCod->darPrecioVenta();
            }
        }
        if ($venta->getArrayMotos()){
            $this->objVentas[]=$venta;
            $this->setObjVentas($this->getObjVentas());
        }
        return $importeFinal;
        }

    /*public function registrarVenta($colCodigosMoto, $objCliente) {
        $importeFinal = 0;
        $venta = new Venta($objCliente); // Suponiendo que tienes una clase Venta con un constructor que recibe un objeto Cliente
        foreach ($colCodigosMoto as $codigo) {
            $moto = $this->retornarMoto($codigo);
            if ($moto !== null) {
                $venta->agregarMoto($moto);
                $importeFinal += $moto->getPrecio(); // Suponiendo que tienes un método getPrecio() en la clase Moto
            }
        }
        $this->ventas[] = $venta;
        return $importeFinal;
    } */

    /* 7. Implementar el método retornarVentasXCliente($tipo,$numDoc) que recibe por parámetro el tipo y
    número de documento de un Cliente y retorna una colección con las ventas realizadas al cliente. */

    public function retornarVentasXCliente($tipo,$numDoc){

    }

    public function __toString(){
        return $this->getDenominacion()." ".$this->getDirecciion();
    }
}
