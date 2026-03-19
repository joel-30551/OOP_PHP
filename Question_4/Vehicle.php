<?php
class Vehicle{
    protected $brand;

    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    public function startEngine(){
        return $this->brand. "\n engine is starting.";
    }
}
?>