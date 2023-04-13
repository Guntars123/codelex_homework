<?php declare(strict_types=1);

require_once 'Point.php';

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
$p1->swapPoints($p1, $p2);

echo "(" . $p1->valueX . ", " . $p1->valueY . ")" . PHP_EOL;
echo "(" . $p2->valueX . ", " . $p2->valueY . ")" . PHP_EOL;