<?php

// class Product
// {
//     public string $name;
//     public ?float $price = null;
//     public readonly string $store;

//     public function __construct(string $name, float $price)
//     {
//         $this->name = $name;
//         $this->price = $price;
//         $this->store = "Магазин на тубуретке";
//     }
//     public function __destruct() {}

//     public function __clone()
//     {
//         $this->price = null;
//     }


//     public function getDescription(): string
//     {
//         return $this->name . " – " . $this->price . " руб. ($this->store)";
//     }
// }

// $p = new Product("Война и мир. В картинках", 1799.99);
// $p2 = clone $p;




// echo $p2->getDescription();



// class Animal
// {
//     public function __construct(public string $name) {}
//     public function speek(): string
//     {
//         return "PPPPP";
//     }
// }

// class Dog extends Animal
// {
//     public function speek(): string
//     {
// return parent::speek() . " Гав!!!";
//     }
// }

// $dog = new Dog('Тузик');
// echo $dog->speek();


// final class Config
// {
//     public const APP_NAME = "MyApp";
//     private const MAX_SIZE =  2048;

//     public function getMaxSize()
//     {
//         return self::MAX_SIZE;
//     }
// }

// $config = new Config();

// echo $config->getMaxSize();


class Counter
{
    private static int $count = 0;
    public function __construct()
    {
        self::$count++;
    }
    public static function getCount(): int
    {
        return self::$count;
    }
}

$c = new Counter();
$b = new Counter();
$d = new Counter();
$c = new Counter();
$c = new Counter();
$c = new Counter();
$c = new Counter();

echo Counter::getCount();
