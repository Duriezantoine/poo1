<?php

// Bicycle.php

class Bicycle
{
    private string $color;

    private int $currentSpeed;

    private int $nbSeats = 1;

    private int $nbWheels = 2;

    private bool $hasLuggageRack = false;


    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function forward(): string
{
    $this->currentSpeed = $this->getCurrentSpeed();

    return "Go !";
}

public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}

public function getColor(): string
{
    return $this->color;
}

public function setColor(string $color): void
{
    $this->color = $color;
}

public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function setCurrentSpeed(int $currentSpeed): void
{
    if($currentSpeed >= 0) {
        $this->currentSpeed = $currentSpeed;
    }
}



}
