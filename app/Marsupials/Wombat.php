<?php

// Create a class that represents a Wombat in the App\Marsupials namespace

// You should be able to give the wombat a name when you create it.
// The wombat should have a getName() method that returns its name
// The wombat should have a sayHelloTo($wombat) method that you pass another wombat to and it will return a greeting
// The wombat should have a giveHug() method and a howManyHugs() method. howManyHugs() should return the number of hugs the wombat has been given
// Uncomment line 17 of app/Challenges.php to run the following code:

namespace App\Marsupials;

class Wombat
{
    private $name;
    private $noOfHugs;

    public function __construct($nameArg)
    {
        $this->name = $nameArg;
    }

    public function getName()
    {
        return $this->name;
    }

    public function sayHelloTo($otherWombat)
    {
        return "Hello {$otherWombat->name}";
    }

    public function giveHug()
    {
        $this->noOfHugs += 1;
        return $this;
    }

    public function howManyHugs()
    {
        return $this->noOfHugs;
    }


}