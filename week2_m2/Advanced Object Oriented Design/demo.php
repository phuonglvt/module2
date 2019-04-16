<?php
interface Runable {
    function run();
}

abstract class Machine{
    abstract protected function cargo();
    abstract protected function type($type);

}

class Car extends Machine implements Runable
{
    public function run()
    {
        return "Car can runable";

    }
    protected function cargo()
    {
        return "Car";
    }

    public function type($type)
    {
        return "{$type} Car";
    }

}

$car1 = new Car;
print $car1->run();
print $car1->type('Rin');


?>