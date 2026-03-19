<?php
class Car extends Vehicle{
    public function startEngine()
    {
        return parent::startEngine() ."<br>". $this->brand . "\n is ready to drive.";
    }
}
?>