<?php
// $a = 40.5;
// $sale = 15;
// $name = "Alex";
// $isAdmin = true;

// const VERSION = 'v0.1.1';
// define("AUTOR", "Alex");

// $taskList = null;


// $numbers = [1, 5, 7];
// $user = [
//     "name" => "Alex",
//     "isAdmin" => false
// ];

// // var_dump($user);


// $sum = 2 + 3;
// $diff = 10 - 4;
// $mul = 3 * 5;
// $div = 10 / 2;
// $mod = 10 % 3;

// $index = 10;
// $index += 1; //$index = $index + 1


// // var_dump(10 == "10");
// // var_dump(10 === "10");
// var_dump(10 > "9");

// $age = 17;
// $hasTicketv = true;
// $isAudit = ($age >= 18);
// $canEnter = (($isAudit && $hasTicket) || $isSaff);

// $isTrue = !false;

// $status = ($age >= 18) ? "Взрослый" : "Ребенок";

// echo $user['city'] ?? "не указан";



// if ($age == 18) {
//     echo "Ты как раз вовремя, проходи!";
// } elseif ($age > 18) {
//     echo  "Добро пожаловать!";
// } else {
//     echo  "Тебе пока рано!";
// }


// switch ($role) {
//     case "Admin":
//         echo "Admin";
//         break;
//     case "Staff":
//         echo "Staff";
//         break;
//     default:
//         echo "Guest";
//         break;
// }


// $userRole = match ($role) {
//     "Admin" => "Admin",
//     "Staff" => "Staff",
//     default => "Guest"
// };

// for ($i = 0; $i < 10; $i++) {
//     echo $i;
// }

// $index = 0;
// while ($index < 10) {
//     echo $index++;
// }

// $index = 110;
// do {
//     echo $index++;
// } while ($index < 120);


// $numbers = [1, 2, 3, 4, 5, 6];
// for ($index = 0; $index < count($numbers); $index++) {
//     echo "N_$index =" . $numbers[$index] . "<br/>";
// }

// foreach ($numbers as $index => $value) {
//     echo "N_$index =" . $value . "<br/>";
// }

// $user = [
//     "name" => "Alex",
//     "isAdmin" => false
// ];

// foreach ($user as $key => $value) {
//     echo "$key: " . $value . "<br/>";
// }



// $numbers = [1, 2, 3, 4, 5, 6];
// for ($index = 0; $index < count($numbers); $index++) {
//     if ($numbers[$index] == 4) {
//         continue;
//     }
//     if (!($numbers[$index] % 5)) {
//         break;
//     }
//     echo "N_$index =" . $numbers[$index] . "<br/>";
// }


// $stateConnect = [true, true, false, true];

// $test = true;

// function checkConnect(array $state = []): bool
// {
//     global $test;
//     $isConnect = false;
//     foreach ($state  as $connect) {
//         if (!$connect) {
//             $isConnect = $connect;
//             break;
//         }
//         $isConnect = $connect;
//     }
//     return $test;
// }

// echo checkConnect($stateConnect) ? "Успех!" : "Провал!";



// function getConut()
// {
//     static $index = 0;
//     $index++;
//     return $index;
// }

// $c = getConut();
// $c = getConut();
// $c = getConut();
// $c = getConut();
// $f = 'getConut';
// $c = $f();
// $c = $f();
// $c = getConut();


// // var_dump($c);

// function calc($a, $b, $action)
// {
//     return $action($a, $b);
// }

// function sum($a, $b)
// {
//     return $a + $b;
// }

// $milt = fn($a, $b) =>  $a * $b;

// // echo calc(23, 234, 'sum');
// // echo '<br>';
// // echo calc(23, 234, $milt);
// // echo '<br>';
// echo round(calc(23, 234, fn($a, $b) => 1000 * $a / $b), 2);


// $stateConnect = [true, true, false, true];
// $result = array_all($stateConnect, fn($value) => $value);

// var_dump($result);

// $countError = 0;

// function calc(float $a, float $b, string $op) // "+", "-"
// {
//     // Начальные условия
//     global $countError;
//     $operations = [
//         '+' => fn($a, $b) => $a + $b,
//         '-' => fn($a, $b) => $a - $b,
//         '/' => fn($a, $b) => $a / $b,
//         '*' => fn($a, $b) => $a * $b,
//     ];

//     // Условия выполения 
//     if (!is_float($a) && !is_int($a)) {
//         $countError++;
//         return null;
//     }
//     if (!is_float($b) && !is_int($b)) {
//         return null;
//     }
//     if (is_string($a) && !is_numeric($a)) {
//         // передано строковое значение не перобразуемое в число
//     }
//     if ($op === '/' && $b === 0) {
//         // деление на ноль
//     }
//     if (array_key_exists($op, $operations)) {
//         // операция не определена 
//     }

//     // Ядро приложения 
//     return $operations[$op]($a, $b);
// }

// function recalc(string $str)
// {
//     $lib = array("+", "*", "/", "-");
//     $str = str_replace(" ", "", $str);
//     $x = 1;
//     $curr_op = null;

//     if ($str[0] === "-") {
//         $str = substr($str, 1);
//         $x = -1;
//     }

//     $str = str_replace("--", "+", $str);

//     foreach ($lib as $op) {
//         $arr = explode($op, $str);
//         if (count($arr) == 2) {
//             $arr = array_map(fn($val) => floatval($val), $arr);
//             array_push($arr, $op);
//             break;
//         }
//     }

//     //    $a = floatval($arr[0]);
//     //    $b = floatval($arr[1]);
//     // [$a, $b] = array_map(fn($val) => floatval($val), $arr);
//     //$res = $arr;
//     return calc(...$arr);
// }


// var_dump(recalc('123.4    + -234.3234234'));


// var_dump($_GET['er']);


// // var_dump($_POST);
// var_dump(getallheaders());




// 
// <form method="post">
//     <input type="text" name="wer">
//     <button type="submit">Отправить</button>
// </form>