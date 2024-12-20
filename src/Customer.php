<?php

namespace JulianoDaffaAdytia\Belajar;

class customer
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(string $name): string
    {
        return "Hello $name, My name is $this->name";
    }
}
