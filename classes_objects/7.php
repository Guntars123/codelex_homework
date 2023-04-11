<?php declare(strict_types=1);

class Dog
{
    private string $name;
    private string $sex;
    private ?Dog $mother;
    private ?Dog $father;

    public function __construct($name, $sex, $mother, $father)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function getFathersName(): string
    {
        if ($this->father === null) {
            return "Unknown";
        }
        return $this->father->name;
    }

    public function hasSameMotherAs(Dog $dog): bool
    {
        if ($this->mother === $dog->mother) {
            return true;
        }
        return false;
    }
}

class DogTest
{
    public function main(): void
    {


        $sparky = new Dog("Sparky", "male", null, null);
        $sam = new Dog("Sam", "male", null, null);
        $lady = new Dog("Lady", "female", null, null);
        $molly = new Dog("Molly", "female", null, null);
        $buster = new Dog("Buster", "male", $lady, $sparky);
        $rocky = new Dog("Rocky", "male", $molly, $sam);
        $coco = new Dog("Coco", "female", $molly, $buster);
        $max = new Dog("Max", "male", $lady, $rocky);

        echo $coco->getFathersName() . PHP_EOL;
        echo $sparky->getFathersName() . PHP_EOL;
        echo $coco->hasSameMotherAs($rocky) . PHP_EOL;

    }
}

(new DogTest())->main();