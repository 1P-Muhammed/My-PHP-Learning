<?php
if (isset($_POST["full_name"])) {
    echo "Welcome: " . $_POST["full_name"];
} else {
    echo "You don't have a permission to see that content! you will
     automaticly transfered to home after 3 second <br>";
    header("Refresh: 3; URL=../iti-index.php");
    echo "Please redirct to <a href='../iti-index.php'>home</a> page";
    // header("Location: iti-index.php");
}
