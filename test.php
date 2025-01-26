<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Username: " . htmlspecialchars($_POST['username']) . "<br>";
    echo "Password: " . htmlspecialchars($_POST['password']);
}
?>