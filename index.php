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
echo "- Test Equal";
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
echo "- Test Identical";
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
echo $b . "<br>"; // It will print error if i don't write a @.
// it make a script stop so i will try another way.
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
    // print_r($_POST);
    // echo "<br>";
    // echo $_POST["username"];
    // echo "<br>";
    // echo $_POST["language"];
    // echo "************";
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
