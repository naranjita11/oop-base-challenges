<?php

// Create a class, Stringy in the App\Redux namespace, that performs a series of transformations on a string. You can use the get() method to get the final result.

// Uncomment line 18 of app/Challenges.php to run the following code:

namespace App\Redux;

class Stringy
{
    private string $str;

    public function __construct($strArg)
    {
        $this->str = $strArg;
    }

    // In the first time of creating this class (in 04-classes - strings), the methods were getters but this time they are setters

    // in order to chain the functions, you need to update the $str property as part of the function and then return $this:

    public function lower() : Stringy
    {
        $this->str = strtolower($this->str);
        return $this;
    }

    public function upper() : Stringy
    {
        $this->str = strtoupper($this->str);
        return $this;
    }

    public function append($newStr) : Stringy
    {
        $this->str = ($this->str . $newStr);
        return $this;
    }

    public function repeat($x) : Stringy
    {
        $this->str = str_repeat($this->str, $x);
        return $this;
    }

    public function get() : string
    {
        return $this->str;
    }
}