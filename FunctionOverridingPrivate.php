<?php

class Manager
{
    private function test(): void
    {

    }
}

class VicePresident extends Manager
{

    public function test(string $name): string
    {
        return "VP";
    }

}
