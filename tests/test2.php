<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
<label for="name">Name</label>
<input type="text" id="name" name="name">
<input type="submit" value="Send">
</form>

<?php 
if ( isset($_POST["name"])) {
    $name = $_POST["name"];
    $nameAfterStripped = strip_tags($name);
    header("Refresh: 3; URL=welcome2.php?key=$nameAfterStripped");
}
// Use this code inside the text field to test this issue => 
// <script> alert("You have hacked!!!!") </script> Muhammed