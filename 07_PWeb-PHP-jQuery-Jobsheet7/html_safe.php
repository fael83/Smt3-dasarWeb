<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    echo "<h3>Hasil: </h3>";
    echo $input . "<br><br>";

    // Memeriksa apakah input adalah email yang valid
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    } else {
        echo "Email tidak valid!";
    }
}
?>

