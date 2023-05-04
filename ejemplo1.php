<?php

class Producto {
   #dificinion de los atributos
   public string $nombre;
   public int $precio;
   public bool $disponible;
    #metodo constructor, se ejecuta al efectuar la instancia
    public function __construct(string $nombre, int $precio, bool $disponible)
    {
       #se les da valores a los atributos con los parametros que recibe el metodo constructor 
       $this-> nombre= $nombre;
       $this-> precio= $precio;
       $this-> disponible= $disponible;

    }
    #definicion de metodos 
    public function mostrarProducto(){
       echo "El Producto es: ".$this->nombre. " y su precio es de: ".$this->precio;
    }

}
//instancia de la clase en el primer objeto
$producto= new Producto('Tablet',200, true);
//llamado al metodo mostrar productom utilizando sintaxis de flecha ->
$producto -> mostrarProducto();
//impresion en pantalla del primer objeto 
echo "<pre>";
var_dump($producto);
echo "</pre>";

//instancia de la clase en el segundo objeto 
$producto2 = new Producto('Monitor Curvo', 300, true);
//llamando al metodo mostrar producto, utilizando sintaxis de la flecha ->
$producto2 -> mostrarProducto();

//impresion en pantlla del segundo objeto

echo "<pre>";
var_dump($producto2);
echo "</pre>";

?>