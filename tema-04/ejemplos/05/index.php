<?php
class Coche
{
    private int $velocidad;
    public function __construct()
    {
        $this->velocidad = 0;
    }
    public function setVelocidad(int $velocidad): void
    {
        $this->velocidad = $velocidad;
    }
    public function getVelocidad(): int
    {
        return $this->velocidad;
    }
}
$coche = new Coche();
$coche->setVelocidad(1000);
echo $coche->getVelocidad(); // 1000
echo $coche->velocidad; 
class Deportivo extends Coche
{
    public function aumentarVelocidad(): void
    {
        // Error: el atributo es privado de Coche; Deportivo no lo ve
        $this->velocidad = $this->velocidad * 2;
    }
}
$deportivo = new Deportivo();
$deportivo->setVelocidad(100);
$deportivo->aumentarVelocidad();
