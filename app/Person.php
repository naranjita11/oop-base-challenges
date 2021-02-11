<?php

// Create a class Person in the App namespace. It should accept a first and last name on creation. It should have a sayHelloTo() method that takes another Person and says hello to them. Make sure your properties are all private.

// Uncomment line 16 of app/Challenges.php to run the following code:

namespace App;

class Person
{
    private string $firstName;
    private string $lastName;

    public function __construct($firstNameArg, $lastNameArg)
    {
        $this->firstName = $firstNameArg;
        $this->lastName = $lastNameArg;
    }

    public function sayHelloTo($otherPerson) : string
    {

        // be careful with accessing properties on external objects like this. Better to create a getName method and then use that as part of the sayHelloTo method 
        return "Hello {$otherPerson->firstName} {$otherPerson->lastName}";

    }
}