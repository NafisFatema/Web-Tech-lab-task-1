<?php
session_start();

$errors = [];

if (isset($_POST['register'])) {

    $fullName = trim($_POST['fullName']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $age = $_POST['age'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : "";
    $course = $_POST['course'];
    $terms = isset($_POST['terms']);

    
    $_SESSION['fullName'] = $fullName;
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $username;
    $_SESSION['age'] = $age;
    $_SESSION['gender'] = $gender;
    $_SESSION['course'] = $course;

   
    if (empty($fullName)) {
        $errors[] = "Full Name is required.";
    }

    if (!preg_match("/^[a-zA-Z ]*$/", $fullName)) {
        $errors[] = "Full Name must contain only letters and spaces.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid Email format.";
    }

    if (strlen($username) < 5) {
        $errors[] = "Username must be at least 5 characters.";
    }

    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }

    if ($password != $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }

    if ($age < 18) {
        $errors[] = "Age must be 18 or above.";
    }

    if (empty($gender)) {
        $errors[] = "Please select Gender.";
    }

    if (empty($course)) {
        $errors[] = "Please select Course.";
    }

    if (!$terms) {
        $errors[] = "You must accept Terms & Conditions.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>

<?php

if (count($errors) > 0) {

    echo "<h3>Validation Errors</h3>";

    foreach ($errors as $error) {
        echo $error . "<br>";
    }

} else {

    echo "<h2>Registration Successful!</h2>";

    echo "Full Name: " . $_SESSION['fullName'] . "<br>";
    echo "Email: " . $_SESSION['email'] . "<br>";
    echo "Username: " . $_SESSION['username'] . "<br>";
    echo "Age: " . $_SESSION['age'] . "<br>";
    echo "Gender: " . $_SESSION['gender'] . "<br>";
    echo "Course: " . $_SESSION['course'] . "<br>";
}
?>

</body>
</html>
