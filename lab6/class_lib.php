<?php

class cliente {
    var $nombre;
    var $numero;
    var $peliculas_alquiladas;

    public function __construct($nombre, $numero){
        $this -> nombre = $nombre;
        $this -> numero = $numero;
        $this -> peliculas_alquiladas = array();
    }

    public function __destruct(){
        echo "<br>destruido: " . $this -> nombre;
    }

    public function dame_numero(){
        return $this -> numero;
    }
 
}

class soporte {
    public $titulo;
    protected $numero;
    private $precio;

    public function __construct($tit, $num, $precio){
        $this -> titulo = $tit;
        $this -> numero = $num;
        $this -> precio = $precio;
    }

    public function dame_precio_sin_itbm(){
        return $this -> precio;
    }

    public function dame_precio_con_itbm(){
        return $this -> precio * 1.07;
    }

    public function dame_numero_identificacion(){
        return $this -> numero;
    }

    public function imprime_caracteristicas(){
        echo "<br>" . $this -> titulo;
        echo "<br>" . $this -> precio . " (ITBM no incluido)";
    }
}

class video extends soporte {
    protected $duracion;

    public function __construct($tit, $num, $precio, $duracion){
        parent::__construct($tit, $num, $precio);
        $this -> duracion = $duracion;
    }

    public function imprime_caracteristicas(){
        echo "<br> Pelicula en Blue-Ray";
        parent::imprime_caracteristicas();
        echo "<br> Duracion: " . $this -> duracion;
    }
}

class juego extends soporte {
    protected $consola; // consola del juego ej: DS Lite
    protected $min_num_jugadores;
    protected $max_num_jugadores;

    public function __construct($tit, $num, $precio, $consola, $min_j, $max_j){
        parent::__construct($tit, $num, $precio);
        $this -> consola = $consola;
        $this -> min_num_jugadores = $min_j;
        $this -> max_num_jugadores = $max_j;
    }

    public function imprime_caracteristicas(){
        echo "<br> Juego para: " . $this -> consola;
        parent::imprime_caracteristicas();
        echo "<br>" . $this -> imprime_jugadores_posibles();
    }

    public function imprime_jugadores_posibles(){
        if ($this -> min_num_jugadores == $this -> max_num_jugadores){
            if($this -> min_num_jugadores == 1)
            echo "<br> Para un jugador";
            else
            echo "<br> Para " . $this -> min_num_jugadores . " jugadores";
        }
        else {
            echo "<br> De " . $this -> min_num_jugadores . " a " . $this -> max_num_jugadores . " jugadores.";
        }
    }
}

class Foo {
    public static $mi_static = 'foo';
    public function staticValor(){
        return self::$mi_static;
    }
}

class Bar extends Foo {
    public function fooStatic(){
        return parent::$mi_static;
    }
}
?>