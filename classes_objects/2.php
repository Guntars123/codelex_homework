<?php declare(strict_types=1);

class Point
{
    public int $valueX;
    public int $valueY;

    public function __construct($valueX, $valueY)
    {
        $this->valueX = $valueX;
        $this->valueY = $valueY;
    }

    public function swapPoints(Point $point1, Point $point2): void
    {
        $tempValueX = $point1->valueX;
        $tempValueY = $point1->valueY;
        $point1->valueX = $point2->valueX;
        $point1->valueY = $point2->valueY;
        $point2->valueX = $tempValueX;
        $point2->valueY = $tempValueY;
    }
}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
$p1->swapPoints($p1, $p2);

echo "(" . $p1->valueX . ", " . $p1->valueY . ")" . PHP_EOL;
echo "(" . $p2->valueX . ", " . $p2->valueY . ")" . PHP_EOL;