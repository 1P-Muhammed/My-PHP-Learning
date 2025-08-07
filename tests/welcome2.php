<?php
echo "Test string";
echo "<br>";
if (isset($_GET["key"])) :
    echo htmlspecialchars($_GET["key"]);
endif;

echo "<br>********************<br>";
if (isset($_GET['email2'])) {
    $emailFromWelcome = $_GET['email2'];
    $email_pattern = "/[-_a-zA-Z0-9.+!%]*@[-_a-zA-Z0-9.]*/";

    if (!empty($emailFromWelcome)) {    
        if (preg_match($email_pattern, $emailFromWelcome)) {
            $message = "✅ Email is valid: $emailFromWelcome";
        } else {
            $message = "❌ Please write a correct email";
        }
    } else {
        $message = "❌ Email is a required field";
    }
} else {
    $message = "❌ Email is required field";
}

// Wait 3 seconds then redirect back
header("Refresh: 3; URL=../iti-index.php?message=" . urlencode($message)); // I have comented it now
echo "<p>$message</p>";
echo "<p>Redirecting back in 3 seconds...</p>";