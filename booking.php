<?php

$con = mysqli_connect('localhost', 'root', 'SKKSQL', 'travel');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$firstname = mysqli_real_escape_string($con, $_POST['ffirst']);
$lastname = mysqli_real_escape_string($con, $_POST['flast']);
$email = mysqli_real_escape_string($con, $_POST['femail']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$Phone = mysqli_real_escape_string($con, $_POST['fphone']);
$destination = mysqli_real_escape_string($con, $_POST['fdesti']);

$sql = "INSERT INTO `booking` (`ffirst`, `flast`, `femail`, `city`, `fphone`, `fdesti`) 
        VALUES ('$firstname', '$lastname', '$email', '$city', '$Phone', '$destination')";

if (mysqli_query($con, $sql)) {
    header('Location: booking.html');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

?>
