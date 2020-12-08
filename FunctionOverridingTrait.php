<?php

trait SampleTrait
{
    public abstract function sampleFunction(string $name): string;
}

class SampleClass {
    use SampleTrait;

    public function sampleFunction(int $name): string
    {

    }
}
