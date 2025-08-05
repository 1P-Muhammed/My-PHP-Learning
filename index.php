<?php
echo '<br>"Hello, this is my PHP learing course with Elzero!"<br>';
echo "<br> ===== Predefined & Magic Const ===== <br> ";
echo PHP_VERSION;
echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br> ====== Assignment Operators ======= <br> ";
$a = 10;
// $a = $a + 40;
$a += 40;

$b = 30;
// $b = $b - 5;
$b -= 5;

$c = 5;
// $c = $c ** 5;
$c **= 5;

echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br> ====== Comparison Operators 1 ===== <br> ";
// Test equal
echo "Test Equal:- ";
echo "<br>";
var_dump(100 == 100); // True
echo "<br>";
var_dump(100 == "100"); // True
echo "<br>";
var_dump(100 == 100.0); // True
echo "<br>";
var_dump(100 != 100.1); // True
echo "<br>";
var_dump(100 <> "100.0"); // False
echo "<br>";
echo "<br>";
// Test identical
echo "Test Identical:- ";
echo "<br>";
var_dump(100 === 100); // True
echo "<br>";
var_dump(100 === "100"); // False
echo "<br>";
var_dump(100 === 100.0); // False
echo "<br>";
var_dump(100 !== 100.1); // True
echo "<br> ====== Comparison Operators 2 ====== <br> ";
var_dump(100 <=> 100.1); // -1
echo "<br>";
var_dump(100 <=> 100); // 0
echo "<br>";
var_dump(102 <=> 100); // 1
echo "<br> ===== Increment & Decrement ======== <br> ";
$a = 5;
$a++;
$a++;
$a++;
$a++;
$a--;
$a--;
echo $a; // 7
echo "<br>";
$a = 9;
echo $a++; // 9
echo "<br>";
echo $a; // 10
echo "<br>";
echo ++$a; // 11

echo "<br> ===== Logical Operators ============ <br> ";
var_dump(100 > 30 xor 100 > 50); // False
echo "<br>";
var_dump(100 > 30 xor 100 > 120); // Ture
echo "<br>";
var_dump(100 > 300 xor 100 > 120); // False
echo "<br> ===== String Operators ============ <br> ";
define("ELZERO", "One");
$a =  "Elzero";
$b = "Web";
$c = "School";

echo "$a $b $c";
echo "<br>";
echo "{$a} {$b} {$c}";
echo "<br>";
echo testing() . $a . " " . $b . " " . $c . " " . ELZERO;
echo "<br>";

function testing()
{
    echo "Hello ";
}

$dot = "Elzero";
$dot .= " Web"; // $dot = $dot + " Web" => Elzero Web
$dot .= " School"; // $dot = $dot + " School" => Elzero Web School
echo $dot;

echo "<br> ===== Array Operators ============ <br> ";
$array1 = [1 => "A", 2 => "B"];
$array2 = [3 => "C", 4 => "D"];
$array3 = $array1 + $array2;
echo "<pre>";
print_r($array3);
echo "</pre>";

$array4 = [1 => "100", 2 => 200];
$array5 = [2 => "200", 1 => 100];
var_dump($array4 == $array5);
echo "<br>";
$array4 = [1 => "100", 2 => 200];
$array5 = [2 => "200", 1 => 100];
var_dump($array4 === $array5);
echo "<br>";
// I wanna make it given true: (Inside identical the order is important!)
$array4 = [1 => "100", 2 => 200];
$array5 = [1 => "100", 2 => 200];
var_dump($array4 === $array5);
echo "<br> ===== Error Control Operators ===== <br> ";
$error = 10;
$b = @$error or die("The \$error variable not found");
echo $b . "<br>"; // It will print error if i don't write an @.
// it makes a script stop so i will try another way.
$b = @$error;
if (isset($error)) {
    echo $b . "<br>";
} else {
    echo "The \$error variable not found<br>";
}
$file = @file("tests/welcome2.php") or die("This file not found"); // Stop script
echo "<pre>";
print_r($file);
echo "</pre>";
(@include("tests/welcome2.php")) or die("Include file not found");

echo "<br> ===== Operators precedence ========= <br> ";
echo 10 || false || 0 || [] || ""; // 1
echo "<br>";
$a = 10 || false;
echo $a;
echo "<br>";
$b = 10 or false;
echo $b; // 10
echo "<br> ===== Conditional Operators ========= <br> ";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    print_r($_POST);
    echo "<br>";
    echo $_POST["username"];
    echo "<br>";
    echo $_POST["language"];
    echo "************";
    if ($_POST["language"] === "arabic") {
        header("Location: language-supporters/arabic.php");
        exit;
    } elseif ($_POST["language"] === "english") {
        header("Location: language-supporters/english.php");
        exit;
    } elseif ($_POST["language"] === "spanish") {
        header("Location: language-supporters/spanish.php");
        exit;
    } else {
        echo "Something Wrong";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="username">
        <select name="language" id="">
            <option value="arabic">Arabic</option>
            <option value="english">English</option>
            <option value="spanish">Spanish</option>
        </select>
        <input type="submit" value="Go">
    </form>
</body>

</html>
<?php

echo "<br> ****** Alternate Syntax ******<br>";
if (200 > 299) :
    echo "That's wrong!";
elseif (200 < 299) :
    echo "That's right!";
else :
    echo "Something else!";
endif;

echo "<br> ****** Nested If ******<br>";
$name = "Muhammed";
$country = "Egypt";
$is_student = true;
$is_orphan = true;
$price = 100;
$country_discount = 50;
$student_discount = 10;
$orphan_discount = 15;

if ($country == "Egypt") :
    if ($is_student == true) :
        if ($is_orphan == true) :
            echo "Hello " . $name . "<br>";
            echo "Country discount is: " . $country_discount . "<br>";
            echo "Student discount is: " . $student_discount . "<br>";
            echo "Orphan discount is: " . $orphan_discount . "<br>";
            echo "The final price is: " . $price -= ($country_discount + $student_discount + $orphan_discount);
        else :
            echo "Hello " . $name . "<br>";
            echo "Country discount is: " . $country_discount . "<br>";
            echo "Student discount is: " . $student_discount . "<br>";
            echo "The final price is: " . $price -= ($country_discount + $student_discount);
        endif;
    else :
        echo "Hello " . $name . "<br>";
        echo "Country discount is: " . $country_discount . "<br>";
        echo "The final price is: " . $price -= $country_discount;
    endif;
else :
    echo "Hello " . $name . "<br>";
    echo "You don't have any discount, Sorry";
    echo "The final price is: " . $price;
endif;

echo "<br> ****** Ternary (Short) IF ******<br>";
echo (10 > 9) ? "True" : "False";
echo "<br>";
echo "I love PHP because it is a " . ((10 > 4) ? "good" : "bad") . " language";

echo "<br> ===== Switch ==================== <br> ";
$day = "Saturday";
switch ($day) {
    case "Saturday":
        echo "Hello today is $day we are open from 10:15";
        break;
    case "Sunday":
        echo "Hello today is $day we are open from 10:30";
        break;
    case "Monday":
        echo "Hello today is $day we are open from 10:45";
        break;
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
        echo "Hello today is $day we are open from 11:00";
        break;
    default:
        echo "Unknow day";
}
echo "<br>******* Another way match () **********<br>";

echo match($day) {
    "Saturday" => "Hello today is $day we are open from 10:15",
    "Sunday" => "Hello today is $day we are open from 10:30",
    "Monday" => "Hello today is $day we are open from 10:45",
    "Tuesday", "Wednesday", "Thursday" => "Hello today is $day we are open from 11:00",
    default => "Unknow day",
};

echo "<br> ===== While Loop ================= <br> ";
$index = 0;
while ($index < 5) {
    echo $index . "<br>";
    $index++;
}
echo "<br>*********************<br>";
$index = 1;
while ($index <= 5) :
    echo $index . "<br>";
    $index++;
endwhile;

echo "<br> ===== Do While Loop ============== <br> ";
$index = 0;
do {
    echo $index . "<br>";
    $index += 2;
} while ($index < 5);

echo "<br> ===== For Loop =================== <br> ";
for ($index = 0; $index < 10; $index += 2) :
    echo $index . "<br>";
endfor;
echo "<br>*******************<br>";
$index = 0;
for (;;) {
    if ($index == 5)
        break;
    echo $index . "<br>";
    $index++;
}

echo "<br> ===== Foreach Loop =============== <br> ";
$countries = ["Egypt", "England", "USA", "UAE", "Saudi Arabia", "Iraq", "Yaman"];
$discount_countries = ["EG" => 25, "EN" => 20, "USA" => 10, "UAE" => 10];
foreach ($countries as $country) :
    if ($country == "UAE")
        continue;
    elseif ($country == "Yaman")
        break;
    echo $country . "<br>";

endforeach;

echo "<br>*******************<br>";
foreach ($discount_countries as $key => $value) :
    echo "This is the discount for every country $key => $value <br>";
endforeach;

echo "<br> ===== Include & Require =============== <br> ";
include("tests/test.php");
// If this file not found it shows a warning and continue the script normally.
// I can use @ to stop the warning and continue normally.
echo "This is a test \"include\" <br> That has a name: $name is coming from another file that named test.php";
echo "<br>*******************<br>";

require("tests/test.php"); // If this file not found it shows a fatal error and stop the script.
echo "This is a test \"require\" <br> That has a name: $name is coming from another file that named test.php";

echo "<br> ****** (Include & Require) once ******<br>";
include_once("tests/test.php");

echo $name . "<br>";
$name = "Muhammed Sheta";
include_once("tests/test.php");
echo $name; // it should echo Muhammed but i have used include_once above so an another one doesn't work.
echo "<br>*******************<br>";

require_once("tests/test.php");

echo $name . "<br>";
$name = "Muhammed Ahmed";
require_once("tests/test.php");
echo $name; // it should echo Muhammed but i have used require_once above so an another one doesn't work.
// Include_once like Require_once.

echo "<br> ===== Functions => DRY =============== <br> ";
function sayHelloTo($someone)
{
    return "Hello " . $someone . "<br>";
}

// Don't repaet yourself.
echo sayHelloTo("Muhammed");
echo sayHelloTo("Habeba");
echo "I can use a function inside echo normally like that<br> " .
    sayHelloTo("Younes") . "<br>";
echo "<br>*******************<br>";
function deepFreezer($item)
{
    if ($item === "Water") :
        echo "make $item ice <br>";
    elseif ($item === "Juice") :
        echo "make $item cold <br>";
    elseif ($item === "Fruits") :
        echo "Make $item fresh <br>";
    else :
        echo "Unknown item <br>";
    endif;
}

deepFreezer("Juice");
deepFreezer("Water");
deepFreezer("Fruits");
deepFreezer("Watermeloon");

echo "<br>*******************<br>";
$prizes = ["PC", "Playstation", "XBOX", "Apple TV", "IPad", "IPhone"];
function getNumber($number1, $number2)
{
    echo $number1 + $number2;
}

$prize_number = getNumber(2, 3); // Automatically echo 5 because this function include echo
echo "<br>";
var_dump($prize_number); // Null => Because the result of function without return = Null


function getNumber2($number1, $number2)
{
    return $number1 + $number2;
}
$prize_number = getNumber2(2, 3); // It doesn't echo any value
echo "<br>";
var_dump($prize_number); // 5 
echo "<br>";

echo $prizes[getNumber2(2, 3)];
echo "<br>";
var_dump(getNumber2(2, 3));
echo "<br> ****** Function Default Parameter ******<br>";

function getData($country, $name, $age, $address)
{
    if ($address === ""): // Instead of default value
        $address = "12ed Street-Alexandria";
    endif;
    $line_one = "Your country is $country and Your name is $name <br>";
    $line_two = "Your age is $age and you live in $address";
    return $line_one . $line_two;
}

echo getData("Egypt", "Muhammed", "25", "");
echo "<br>*******************<br>";
// By default value

function getData2($country, $name, $age = "Private age", $address = "Private address")
{
    $line_one = "Your country is $country and Your name is $name <br>";
    $line_two = "Your age is $age and you live in $address";
    return $line_one . $line_two;
}

echo getData2("Egypt", "Muhammed", "25");
echo "<br>*******************<br>";
echo getData2("Egypt", "Muhammed", "25", "15th Street-Helwan");
echo "<br>*******************<br>";
echo getData2("Egypt", "Muhammed", address: "15th Street-Helwan"); // If i wanna write address without write age.

echo "<br> ****** Function Variable Arguments List ******<br>";
// func_num_args()
// func_get_arg(index)
// func_get_args()
function calculate()
{
    echo "Number of arguments " . func_num_args() . "<br>";
    echo "Argument index number 3 is: " . func_get_arg(3) . "<br>";
    print_r(func_get_args());
    echo "<br>";
    $result = 0;
    foreach (func_get_args() as $arg) :
        $result += $arg;
    endforeach;
    echo $result;
}

calculate(10, 23, 24, 22, 55);

echo "<br> ****** Spread Syntax ******<br>";
function calculate2(...$numbers)
{
    echo "Argument index number 3 is: " . $numbers[3] . "<br>";
    print_r($numbers);
    echo "<br>";
    $result = 0;
    foreach ($numbers as $number) :
        $result += $number;
    endforeach;
    echo $result;
}

calculate2(10, 23, 24, 22, 55);

echo "<br> ****** Function Training $ Unpacking Arguments ******<br>";

function get_data($name, $country = "Private", ...$skills)
{
    echo "Hello $name Your country is $country <br>";
    echo "Your skills are" . "<br>";
    foreach ($skills as $skill) :
        echo "--- $skill ";
    endforeach;
}

get_data("Muhammed", "Egypt", "PHP", "SQL", "Laravel");
echo "<br>*******************<br>";

$group_of_skills = ["PHP", "SQL", "Laravel", "System Design"];
get_data("Muhammed", "Egypt", ...$group_of_skills); // ... Unpacking 
echo "<br>*******************<br>";
get_data("Muhammed", "Egypt", ...["PHP", "SQL", "System Design"]); // ... Unpacking

echo "<br> ****** Function Variable And Function Exists ******<br>";
function one() {
    return "One from function";
}

$func1 = "one";
echo $func1() ."<br>";

function say_hello_to_someone($someone) {
    return "Hello $someone";
}

$func2 = "say_hello_to_someone";
echo $func2("Muhammed") ."<br>";

$func3 = "strlen";
echo $func3("Muhammed") ."<br>";

if (function_exists("one")) {
    echo one();
} else {
    echo "Function not found";
}

echo "<br> ******  Passing Arguments By Reference And Return Type Declaration ******<br>";
function add_five(&$number) {  // By reference
    $number += 5;
    return $number;
}

$n = 40;
echo $n ."<br>";
echo add_five($n) ."<br>";
echo $n ."<br>";

function calculate3($number1, $number2): int {
    return $number1 + $number2;
}

echo calculate3(11.5, 44.5). "<br>";
echo gettype(calculate3(11.5, 44.5));

echo "<br>======= Were Done Until Lesson 50 ==========<br>";

echo "<br>========= Anonymous Function ===============<br>";

$say_hello = function () {
    return "Hello";
};
echo $say_hello() ."<br>";
echo "<br>*******************<br>";
$say_hello_to_someone = function ($someone) {
    return "Hello " . $someone;
};
echo $say_hello_to_someone("Muhammed") ."<br>";
echo "<br>*******************<br>";

$mes = "Hi ";
$say_hi_to_someone = function ($someone) {
    global $mes;
    return $mes . $someone;
};
echo $say_hi_to_someone("Muhammed") ."<br>";

echo "<br>*******************<br>";
$mes = "Hi ";
$say_hi_to_someone2 = function ($someone) use ($mes) {
    return $mes . $someone;
};
echo $say_hi_to_someone2("Muhammed") ."<br>";
echo "<br>*******************<br>";
$nums = [10, 20, 30, 40, 50];

function add_five2($item) {
    return $item + 5;
}
print_r($nums);

foreach ($nums as $num) {
    echo "<br>";
    echo add_five2($num);
}
$nums2 = [10, 20, 30, 40, 50];
echo "<br>*******************<br>";
$nums_after_adding_five = array_map("add_five2", $nums);
echo "<pre>";
print_r($nums_after_adding_five);
echo "</pre>";
echo "<br>*******************<br>";
$nums_after_adding_ten = array_map(function($item){ return $item + 10;}, $nums);
echo "<pre>";
print_r($nums_after_adding_ten);
echo "</pre>";

echo "<br>========= Arrow Function ===============<br>";

$say_hello = fn() => "Hello";
echo $say_hello();
echo "<br>*******************<br>";
$say_hello_to_someone = fn ($someone) =>  "Hello " . $someone;
echo $say_hello_to_someone("Muhammed") ."<br>";

echo "<br>*******************<br>";
$say_hi_to_someone2 = fn($someone) => $mes . $someone;
echo $say_hi_to_someone2("Muhammed");

echo "<br>*******************<br>";
$nums_after_adding_ten = array_map(fn($item) => $item + 10, $nums);
echo "<pre>";
print_r($nums_after_adding_ten);
echo "</pre>";

echo "<br>====== String Access And Update Elements ======<br>";
$str = "Muhammed";
echo "First letter is $str[0]<br>";
echo "First letter is $str[3]<br>";
echo "Number of letters ". strlen($str) . "<br>";
echo "Last letter is " . $str[strlen($str) - 1] . "<br>";
$str[0] = "m";
echo $str;

echo "<br>====== String Functions  ======<br>";
$name = "Muhammed Ahmed Sheta";
$name2 = "muhammed ahmed sheta";
echo lcfirst($name) . "<br>";
echo ucfirst($name2) . "<br>";
echo strtolower($name) . "<br>";
echo strtoupper($name2) . "<br>";
echo ucwords($name2) . "<br>";
echo str_repeat($name, 3) . "<br>";

echo "<br>*******************<br>";
$friends = ["Ahmed" , "Muhammed", "Ali", "salem"];
echo implode(" ", $friends) ."<br>";
print_r( explode(" ", $name));
echo "<br>";
print_r( explode(" ", $name, 2));
echo "<br>";
print_r( explode(" ", $name, -1));
echo "<br>";
echo str_shuffle($name) . "<br>";
echo strrev($name) . "<br>";
echo trim("                 Muhammed    ") . "<br>";
echo trim("        #######  Muhammed  ##  ", "##") . "<br>";
echo ltrim("      muhammed") . "<br>";
echo rtrim("Muhammed sheta           ") . "<br>";

echo "<br>*******************<br>";
echo chunk_split("Muhammed Ahmed", 3, "-");
echo "<pre>";
print_r(str_split("$name", 3));
echo "</pre>";
echo "<h3> Hello World! </h3>". "<br>";
echo strip_tags("<h3> Hello World! </h3>"). "<br>";
echo strip_tags("<h3> Hello World! </h3>", "<h3>"). "<br>";
echo nl2br("Elzero\nWeb\nSchool");

echo "<br>*******************<br>";
echo strpos("Hello Hello", "H") . "<br>"; // Case sensitive
echo strpos("Hello Hello", "H", 4) . "<br>";
var_dump( strpos("Hello Hello", "H", -2));
echo "<br>";
echo strrpos("Hello Hello", "H") . "<br>"; // Case sensitive
echo stripos("hello Hello", "H") . "<br>"; // Case insensitive
echo strripos("Hello hello", "H") . "<br>"; // Case insensitive
echo substr_count("Hello Hello", "He") . "<br>";
echo substr_count("Hello Hello", "He", 0, 4) . "<br>";

echo "<br>*******************<br>";
parse_str("name=Muhammed&email=mu@gmail.com&os=mac", $query);
echo "<pre>";
print_r($query);
echo "</pre>";
echo $query["name"] . "<br>";
echo $query["os"] . "<br>";
echo "Hello || * $ % +_" . "<br>";
echo quotemeta("Hello || * $ % +_") . "<br>";
echo str_pad("12", 8, 0) . "<br>";
echo str_pad("25555", 8, 0, STR_PAD_BOTH) . "<br>";
echo str_pad("443", 8, 0, STR_PAD_LEFT) . "<br>";
echo str_pad("2245", 8, 0, STR_PAD_RIGHT) . "<br>";
echo strtr("Hello Worl@", "@", "d") . "<br>";
$translation = ["@" => "d", "#" => "H"];
echo strtr("#ello Worl@",$translation) . "<br>";

echo "<br>*******************<br>";
echo str_replace("%", "H", "%ello %ello", $count) . "<br>"; // case sensitive
echo "Replaces count is: " . $count . "<br>";
echo str_replace(["%", "@"], ["H", "o"], "%ell@ %ell@", $count) . "<br>"; // case sensitive
echo "<pre>";
print_r(str_replace("one", 1, ["one", "two", "three", "four"]));
echo "</pre>";
echo "<pre>";
print_r(str_replace(["one", "two"], [1, 2], ["one", "two", "three", "four"]));
echo "</pre>";
echo "<pre>";
print_r(str_ireplace(["One", "two", 'Three'], [1, 2], ["one", "two", "three", "four"]));
echo "</pre>";

echo "<br>*******************<br>";
echo substr_replace("OneTwo", "1", 0, 3) . "<br>";
echo substr_replace("OneTwo", "1", -3, 3) . "<br>";
echo substr_replace("Elzero_Web_School", "A", 7, 3) . "<br>";
echo substr_replace("Elzero_Web_School", "A", 7, -2) . "<br>";
echo substr_replace("Elzero_Web_School", "A", 7, -9) . "<br>";
echo substr_replace("Elzero_Web_School", "A", 7, -10) . "<br>";
echo substr_replace("Elzero_Web_School", "A", 1, 0) . "<br>";
echo "<pre>";
print_r(substr_replace(["one", "two"], 1, 1));
echo "</pre>";