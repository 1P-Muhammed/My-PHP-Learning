<?php
echo "There are many languages called: ";
echo "<br>";
echo "Imperative: [Proceedger + OOP] => Like PHP";
echo "<br>";
echo "Declartive: Like SQL";
echo "<br> =================================== <br> ";
$double = (string) 1.4; // Casting
echo gettype($double);
echo "<br> =================================== <br> ";
settype($double, "int"); // Another way to casting
echo gettype($double);
echo "<br> =================================== <br> ";
$name = "false";
if ($name === "false") {
    $name = false;
}
if ($name) {
    echo "This is true";
} else {
    echo "This is false";
}
echo "<br> =================================== <br> ";
$age = 25;
$student = "Muhammed";
echo "My name is $student and my age is $age";
echo "<br>";
echo 'My name is $student and my aga is $age';
echo "<br>";
echo "My name is " . $student . "and my age is " . $age;
echo "<br> =================================== <br> ";
echo "<h1>This is title</h1>" . "<br>";
echo htmlspecialchars("<h1>This is title</h1>");
echo "<br> =================================== <br> ";
$relation = "father";
$father = "Ahmed";
echo $$relation . "<br>";
if (isset($father)) {
    echo "You can use $$";
} else {
    echo "You cann't use $$";
}
echo "<br> =================================== <br> ";
$new_variable = "Test string";
if (empty($new_variable)) {
    echo "Your variable is empty";
} else {
    echo "Your variable not empty";
}
echo "<br> =================================== <br> ";
function sayHello()
{
    echo "Hello World!";
}
sayHello();
echo "<br>";
echo sayHello() + 5;
echo "<br>";
function testNum()
{
    return 40;
}
echo testNum() + 44;
echo "<br> =================================== <br> ";
function sayName($name, $age, $city = "Cairo")
{
    return "Hi my name is: $name, my age is: $age
    and my city is: $city";
}
echo sayName("Muhammed", 25);
echo "<br> ============ Local variable ============= <br> ";
function testGlobal1()
{
    $test_variable = 40;
    $test_variable++;
    return $test_variable;
}
echo testGlobal1(); // 41
echo "<br>";
echo testGlobal1(); // 41
echo "<br> ============ Global variable ============ <br> ";
$test_variable = 40;
function testGlobal2()
{
    global $test_variable;
    $test_variable++;
    return $test_variable;
}
echo testGlobal2(); // 41
echo "<br>";
echo testGlobal2(); // 42
echo "<br> ============= Static variable =========== <br> ";
function testGlobal3()
{
    static $test_variable = 40;
    $test_variable++;
    return $test_variable;
}
echo testGlobal3(); // 41
echo "<br>";
echo testGlobal3(); // 42
echo "<br> =================================== <br> ";
define("CLUB_1", "Aahly");
const CLUB_2 = "Zamalk";
echo CLUB_1;
echo "<br>";
echo CLUB_2;
echo "<br> =================================== <br> ";
echo "<br> =================================== <br> ";
echo "<br> =================================== <br> ";
echo "<br> ============ Homework =========== <br> ";
echo "Welcome to php";
echo "<br>";
$x = 5;
$y = "Welcome";
$z = true;
echo "Variable 1: " . $x . " - Variable 2: " . $y . " - Variable 3: " . $z;
echo "<br> =================================== <br> ";
for ($num = 0; $num <= 15; $num++) {
    if ($num === 15) {
        echo 15;
        break;
    } else {
        echo $num . "-";
    }
}
echo "<br> =================================== <br> ";
$num = 0;
while ($num <= 15) {
    if ($num === 15) {
        echo 15;
        break;
    } else {
        echo $num . "-";
        $num++;
    }
}
echo "<br> =================================== <br> ";
const ONE = "ITI";
define("TWO", "ITI");
echo ONE . "<br>" . TWO;
echo "<br> =================================== <br> ";
$scalar_variable = "Test string";
$special_variable = null;
$compound_variable = ["Test array", "Test object"];
echo "Scalar: $scalar_variable Special: $special_variable";
echo "<br>";
print_r($compound_variable);
echo "<br> =================================== <br> ";
$test_isset_function = "Test string";
if (isset($test_isset_function)) {
    echo "This variable is found";
} else {
    echo "This variable not found";
}
echo "<br> =================================== <br> ";
$test_empty_function = "Test string";
if (empty($test_empty_function)) {
    echo "This variable is empty";
} else {
    echo "This variable not empty";
}
echo "<br> =================================== <br> ";
$num1 = 55;
$num2 = 23;
$result = $num1 + $num2;
if ($result > 50) {
    echo "Accepted";
} else {
    echo "Not accepted";
}
echo "<br> =================================== <br> ";
?>
<html>

<head>

</head>

<body>
    <table border="1">
        <tr>
            <td><?php echo "Salary of A is: " ?></td>
            <td><?php echo "1000$" ?></td>
        </tr>
        <tr>
            <td><?php echo "Salary of B is: " ?></td>
            <td><?php echo "1500$" ?></td>
        </tr>
        <tr>
            <td><?php echo "Salary of C is: " ?></td>
            <td><?php echo "2000$" ?></td>
        </tr>
    </table>
</body>

</html>
<?php
echo "<br> =================================== <br> ";
$test_cast = (string) 123;
var_dump($test_cast);
echo "<br> ============= Array =============== <br> ";
$names = ["Ali", "Asmaa", "Ashraf", "Muhammed"];
$count_array = count($names);

for ($index = 0; $index < $count_array; $index++) {
    echo $names[$index] . "<br>";
}
echo "<hr>";
foreach ($names as $name) {
    echo $name . "<br>";
}
echo "<br> ======== Associative array ======== <br> ";
$associative_names = [
    "father" => "Muhammed",
    "mother" => "Habeba",
    "son" => "Younes"
];

echo "== Values == <br>";
foreach ($associative_names as $name) {
    echo $name . "<br>";
}

echo "== Keys: Values == <br>";
foreach ($associative_names as $key => $name) {
    echo $key . ": " . $name . "<br>";
}

echo "== Keys == <br>";
foreach ($associative_names as $key => $name) {
    echo $key . "<br>";
}
echo "<br>";

$mobiles = ["Iphone_13", "owner" => "Muhammed"];
$i = 1;
$count_of_array = count($mobiles);
foreach ($mobiles as $owner => $mobile) {
    echo "Key " . $i++ . ": " . $owner . "<br>";
}
echo "<br> ======= Super Global Array ======= <br> ";
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";
echo "<br> ============== Form ============= <br> ";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
</head>

<body>
    <h3>Registraton Form</h3>
    <form action="tests/welcome.php" method="POST">
        <label for="full_name">Full name</label>
        <input type="text" id="full_name" name="full_name"><br>
        <label for="user_name">User name</label>
        <input type="text" id="user_name" name="user_name"><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Registere">
    </form>
    <!--  This code has come from tests/welcome.php page.
    if (isset($_POST["full_name"])) {
        echo "Welcome: " . $_POST["full_name"];
    } else {
        echo "You don't have a permission to see that content! you will
        automaticlly transfered to home after 3 seconds<br>";
        echo "Please redirct to <a href='iti-index.php'>home</a> page";

        header("Refresh: 3; URL=iti-index.php");
        header("Location: iti-index.php");
    } -->
</body>

</html>
<?php

echo "<br> ============ Read Files ============ <br> ";
$file_handler = fopen("files/file.txt", "r"); // Step one
$file_size = filesize("files/file.txt");
$data_of_file = fread($file_handler, $file_size); // Spep two
echo $data_of_file;
fclose($file_handler); // Step three

echo "<br>**************<br>";
$file_handler2 = fopen("files/file.txt", "r");
echo fgets($file_handler2) . "<br>";
echo fgets($file_handler2) . "<br>";
// I can use rewind($file_handler2) to reset the pointer
rewind($file_handler2);
echo fgets($file_handler2) . "<br>";
echo fgets($file_handler2) . "<br>";
echo fgets($file_handler2) . "<br>";
// ftell($file_handler2) to tell me where is the position of pointer
echo ftell($file_handler2) . "<br>";
echo fgets($file_handler2) . "<br>";
echo fgets($file_handler2) . "<br>";
echo fseek($file_handler2, 55) . "<br>"; // echo from offset 25

fclose($file_handler2);

echo "<br>**************<br>";
$file_handler3 = fopen("files/file.txt", "r");
while (!feof($file_handler3)) {
    echo fgets($file_handler3) . "<br>";
}
fclose($file_handler3);

echo "<br>**************<br>";
$file_handler4 = fopen("files/file.txt", "r");
while (($line = fgets($file_handler4)) !== false) {
    echo $line . "<br>";
}
fclose($file_handler4);
echo "<br> ============ Write Files ========== <br> ";
$file_handler = fopen("files/name.txt", "w");
fwrite($file_handler, "Hello from php. ");
fclose($file_handler);
echo "<br> ============ Append Files ========== <br> ";
$file_handler = fopen("files/name.txt", "a");
fwrite($file_handler, "\nThis is second line in name.txt");
fclose($file_handler);
echo "<br> =========== CSV File ============== <br> ";
$file_handler = fopen("files/Book1.csv", "r");
while (!feof($file_handler)) {
    echo fgets($file_handler) . "<br>";
}
fclose($file_handler);
// This is not a way to get csv's file.
echo "<br> ==================================== <br> ";
