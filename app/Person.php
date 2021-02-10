<?php

// Create a class Person in the App namespace. It should accept a first and last name on creation. It should have a sayHelloTo() method that takes another Person and says hello to them. Make sure your properties are all private.

// Uncomment line 16 of app/Challenges.php to run the following code:

namespace App;

class Person
{
    private $firstName;
    private $lastName;

    public function __construct($firstNameArg, $lastNameArg)
    {
        $this->firstName = $firstNameArg;
        $this->lastName = $lastNameArg;
    }

    public function sayHelloTo($otherPerson)
    {
        return "Hello {$otherPerson->firstName} {$otherPerson->lastName}";

    }
}