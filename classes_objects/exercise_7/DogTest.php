<?php declare(strict_types=1);

class DogTest
{
    public function main(): void
    {

        $sparky = new Dog("Sparky", "male");
        $sam = new Dog("Sam", "male");
        $lady = new Dog("Lady", "female");
        $molly = new Dog("Molly", "female");
        $buster = new Dog("Buster", "male");
        $rocky = new Dog("Rocky", "male");
        $coco = new Dog("Coco", "female");
        $max = new Dog("Max", "male");

        $buster->setFather($sparky);
        $buster->setMother($lady);
        $rocky->setFather($sam);
        $rocky->setMother($molly);
        $coco->setFather($buster);
        $coco->setMother($molly);
        $max->setFather($rocky);
        $max->setMother($lady);

        echo $coco->getFathersName() . PHP_EOL;
        echo $sparky->getFathersName() . PHP_EOL;
        echo $coco->hasSameMotherAs($rocky) . PHP_EOL;

    }
}