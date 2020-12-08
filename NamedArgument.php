<?php

function sayHello(string $first, string $middle = "", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}


sayHello("Eko", "Kurniawan", "Khannedy");
// sayHello("Eko", "Khannedy"); // error

sayHello(last: "Khannedy", first: "Eko", middle: "Kurniawan");
sayHello(first: "Eko", last: "Khannedy");