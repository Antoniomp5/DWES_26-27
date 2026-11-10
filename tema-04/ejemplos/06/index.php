
<?php
class Coche
{
    protected int $velocidad;

    public function __construct()
    {
        $this->velocidad = 0;
    }

    public function aumentarVelocidad(): void
    {
        $this->velocidad++;
    }
    public function parar(): void
    {
        $this->velocidad--;
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

class Deportivo extends Coche
{
    public function aumentarVelocidad(): void
    {
        $this->velocidad = $this->velocidad * 2;
    }

    public function parar(): void
    {
        $this->velocidad = $this->velocidad * 0;
    }
}

$deportivo = new Deportivo();
$deportivo->setVelocidad(100);

$deportivo->aumentarVelocidad();

echo $deportivo->getVelocidad();

$deportivo->parar();
$deportivo->setVelocidad(300);
$deportivo->aumentarVelocidad();
$deportivo->getVelocidad();
