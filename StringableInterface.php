<?php

function sayHello(Stringable $stringable): void
{
    echo "Hello {$stringable->__toString()}" . PHP_EOL;
}

class Person
{

    public function __toString(): string
    {
        return "Person";
    }

}

sayHello(new Person());