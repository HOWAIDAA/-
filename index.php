<?php


$name = $_POST['name'];
$email = $_POST['email'];

if (isset($_POST['button'])) {
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "history";

    $conn = mysqli_connect($host, $user, $password, $db);

    $insert = "INSERT INTO people VALUES ('$name', '$email')";

    if (mysqli_query($conn, $insert)) {
        echo("<h1 style='color:green;'>Your Registration is done!</h1>");
    } else {
        echo("<h1 style='color:red;'>Registration failed. Please try again.</h1>");
    }

    
}
?>

