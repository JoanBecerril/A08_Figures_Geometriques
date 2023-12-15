<?php

// Genera una clase llamada FiguraGeometrica con dos atributos llamados tipoFigura y lado1. Esta clase tendrá un método abstracto sin parámetros llamado área, que devolverá el área.
abstract class FiguragGeometrica
{
    public $tipoFigura;
    public $lado1;
    abstract function area();

// Genera los métodos getters y setters.
    public function tipoFigura($tipoFigura)
    {
        $this->tipoFigura = $tipoFigura;
    }

    public function lado1($lado1)
    {
        $this->lado1 = $lado1;
    }

    // Genera el constructor con todos sus atributos y el destructor.
    public function __construct()
    {
        $this->tipoFigura = 0;  // Inicializa el valor 1 a 0 por defecto
        $this->lado1 = 0;  // Inicializa el valor 2 a 0 por defecto
        // $this->area = 0;  // Inicializa el resultado a 0 por defecto
    }

    // Genera la interfaz PerimetroM, y añádele un método público llamado perímetro.



    // Todas las clases tendrán el constructor con todos sus atributos.


}
