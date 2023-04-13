<?php declare(strict_types=1);

class Tire
{
    private int $quality;

    public function __construct(int $quality = 100)
    {
        $this->quality = $quality;
    }

    public function getQuality(): int
    {
        return $this->quality;
    }

    public function burn(): void
    {
        $this->quality -= rand(1, 5);
    }

}