<?php declare(strict_types=1);

class Dog
{
    private string $name;
    private string $sex;
    private ?Dog $mother;
    private ?Dog $father;

    public function __construct($name, $sex)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = null;
        $this->father = null;

    }

    public function setFather(Dog $father): void
    {
        $this->father = $father;
    }

    public function setMother(Dog $mother): void
    {
        $this->mother = $mother;
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
