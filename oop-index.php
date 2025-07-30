<?php

class AppleDevice { // Super class
    // Properties.
    public $ram = "1GB";
    public $inch = "4 Inch";
    public $space = "32GB";
    public $color = "Selver";
    public $name;
    // Methods
    public function changeSpec($ram, $inch, $space, $color) {
        $this->ram = $ram;
        $this->inch = $inch;
        $this->space = $space;
        $this->color = $color;
    }

    final public function sayHello($name) {
        $this->name = $name;
        echo "Welcome to ". $name;
    }

}
class Sony extends AppleDevice  { // Child || SUb class
    // Properties.
    public $camera = "25MB";

}

// Usage
$iphone_6_plus = new AppleDevice();

$iphone_6_plus->changeSpec("4GB", "6 Inch", "64GB", "Gold");
$iphone_6_plus->sayHello("Iphone");
echo "<pre>";
print_r($iphone_6_plus);
echo "</pre>";

$sony = new Sony();

$sony->changeSpec("4GB", "6 Inch", "64GB", "Gold");
$sony->camera = "50MB";
$sony->sayHello("Sony");
echo "<pre>";
print_r($sony);
echo "</pre>";

abstract class MakeIphone {

        abstract public function testPerformance();
        abstract public function verifyOwner();
        abstract public function sayWelcome($name);
}

class Iphone extends MakeIphone {
    public $owner;
    public function testPerformance() {
        echo "Performance is very good";
    }
    public function verifyOwner() {
        echo "The owner verifed";
    }
    public function sayWelcome($name) {
        $this->owner = $name;
        echo "Welcome ". $name;
    }
}
class Ipad extends Iphone {
    public $owner;
    public function testPerformance() {
        echo "Performance is very good";
    }
    public function verifyOwner() {
        echo "The owner verifed";
    }
    public function sayWelcome($name) {
        $this->owner = $name;
        echo "Welcome ". $name;
    }
}

$iphone16 = new Iphone();
$iphone16->sayWelcome("Muhammed");
echo "<pre>";
print_r($iphone16);
echo "</pre>"; 

$ipad = new Ipad();
$ipad->sayWelcome("Habeba");
echo "<pre>";
print_r($ipad);
echo "</pre>";





echo "<br>===================================<br>";
interface DBConnects {

    public function getUsers ();
    public function getArticles ();
    public function showStats ();
}


class MySQL implements DBConnects {

    public function getUsers () {
        echo "SELECT * FROM users";
    }
    public function getArticles () {
        echo "SELECT * FROM articles";
    }
    public function showStats () {
        echo "SELECT * FROM stats";
    }
}

class Orical extends MySQL {
    public $name;
    public function sayHello ($name) {
        $this->name = $name;
        echo "Hello ". $name;
    }
}


$row = new MySQL();
$row->getUsers();
echo "<br>";
$row->getArticles();
echo "<br>";
$row->showStats();

echo "<pre>";
print_r($row);
echo "</pre>";

$row = new Orical();
$row->sayHello("Muhammed");
echo "<br>";
$row->getUsers();
echo "<br>";
$row->getArticles();
echo "<br>";
$row->showStats();

print_r($row);
echo "<br>===================================<br>";

// Construct


class Iphone3 {
    public $name;
    public $ram;
    public function __construct($name, $ram) {
        $this->name = $name;
        $this->ram = $ram;
        echo "Hello ". $this->name. " Your device has ". $this->ram. " ram";
    }

}

$phone = new Iphone3("Muhammed", "4GB");
echo "<pre>";
print_r( $phone );  
echo "</pre>";

echo "<br>===================================<br>";

class Iphone4 {
    public $name;
    public $ram;
    public function __call($method, $args) {
        echo "This method [ ". $method. " ] not found or not accessible!";
        print_r($args);
    }
}

$phone = new Iphone4();
$phone->sayHello("Muhmmed");
echo "<br>";
$phone->weclomeToApp("Osamma");
echo "<pre>";
print_r( $phone );  
echo "</pre>";



echo "<br>===================================<br>";

class Iphone5 {
    public $name;
    public $ram;
    private $color;
    public function __get($prop) {
        echo "The property [ ". $prop. " ] is not found or not accessible!<br>";
    }
    public function __set($prop, $val) {
        echo "The property [ ". $prop. " ] is not found or not accessible!<br>";
        echo " and you can't assign this value [ ". $val. " ] to it<br>";

    }
}

$phone = new Iphone5();
$phone->color;
$phone->color = "Gold";
echo "<pre>";
print_r( $phone );  
echo "</pre>";

echo "<br>===================================<br>";

class Iphone6 {
    public $name;
    public $email;
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
}

$phone = new Iphone6("Muhammed", "mohammed@gmail.com");

$copy = $phone;
$clone = clone $phone;
$phone->name = "Sheta";
$copy->name = "Ahmed";
echo "<pre>";
print_r( $phone );  
echo "</pre>";

echo "<pre>";
print_r( $copy );  
echo "</pre>";

echo "<pre>";
print_r( $clone );  
echo "</pre>";

echo "<br>===================================<br>"; 


class Iphone7 {
    public static $name = "Muhammed ";
    public $email;

    public static function sayHello () {
        echo "Hello";
    }
}

$phone = new Iphone7();
echo Iphone7::sayHello();
echo Iphone7::$name;
 
$phonee = new Iphone7();
// $phonee->name; // error
$phonee->sayHello();

echo "<br>===================================<br>"; 

class ChainingMethod {
    public function method1 () {
        echo "This is the test of method one<br>";
        return $this;
    }
    public function methodTwo () {
        echo "This is the test of method two";
        return $this;
    }
}

$chaining = new ChainingMethod();
$chaining->method1()->methodTwo();

echo "<pre>";
print_r( $chaining );  
echo "</pre>";

echo "<br>===================================<br>"; 

// ======================= Trait ======================= 

trait FingerPrint {
    public function fingerFeature () {
        echo "This has finger print feature". "<br>";
        return $this;
    }
}

trait ThreeDimensionTouch {
    public function ThreeD () {
        echo "This has 3D touch feature". "<br>";
        return $this;
    }
}


trait FaceDetect {
    public function faceFeature () {
        echo "This has face detect feature". "<br>";
        return $this;
    }

}

trait AllFeatures {
    use FingerPrint, ThreeDimensionTouch, FaceDetect;
}

class Iphone8 {
    use FingerPrint, ThreeDimensionTouch, FaceDetect;
}

class Sony4 {
    use FingerPrint;
    use FaceDetect;

    public function newFeature() {
        echo "This function has a new feature". "<br>";
        return $this;
    }
}

class Nokia {
    public function sayHello () {
        echo "Hello from Nokia". "<br>";
        return $this;
    }
}

$iphone8 = new Iphone8();
$iphone8->fingerFeature()->ThreeD()->faceFeature();
echo "<pre>";
print_r( $iphone8 );    
echo "</pre>";

$sony4 = new Sony4();
$sony4->fingerFeature()->faceFeature()->newFeature();
echo "<pre>";
print_r( $sony4 );    
echo "</pre>";

$nokia = new Nokia();
$nokia->sayHello();
echo "<pre>";
print_r( $nokia );    
echo "</pre>";


echo "<br>===================================<br>"; 
// ======================= Trait2 ======================

// Test priority between a class and trait.
trait Priority {
    public function sayHello () {
        echo "Hello from trait";
    }
}
class AppleDevice2 {
    public function sayHello() {
        echo "Hello from class!";
    }
}

class Iphone9 extends AppleDevice2 {
    use Priority;

}

$newPhone = new Iphone9();
$newPhone->sayHello();
echo "<pre>";
print_r( $newPhone );
echo "</per>";

echo "<br>===================================<br>"; 

trait Feature1 {
    public function feature() {
        echo "This is feature number one". "<br>";
    }
}

trait Feature2 {
    public function feature() {
        echo "This is feature number two". "<br>";
    }
}

class TestTrait {
    use Feature1, Feature2 {
        Feature1::feature insteadof Feature2;  // Solve a conflict
        Feature2::feature as princesTreatment; // alias
    }
}



$test = new TestTrait();
$test->feature();
$test->princesTreatment();
echo "<pre>";
print_r( $test );
echo "</per>";

echo "<br>===================================<br>"; 
// Namespace.

require'sony.php'; // 

// call another file.php that called sony.php 
// and it's contains this code 

// namespace Ahmed;
// class TestNameSpace {
//         public function testfun() {
//                echo "Hello eveyone";
//         }
// }
$testNameSpace = new Ahmed\TestNameSpace();
$testNameSpace->testfun();
echo "<pre>";
print_r( $testNameSpace );
echo "</per>";

