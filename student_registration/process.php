<!DOCTYPE html>
<html>
<head>
    <title>Registration Result</title>
</head>
<body>

<?php

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

    
    if (empty($fullName) || empty($email) || empty($username) || empty($password) || empty($confirmPassword) || empty($age)) {
        $errors[] = "All fields are required.";
    }

    
    if (!preg_match("/^[a-zA-Z ]*$/", $fullName)) {
        $errors[] = "Full Name must contain only letters and spaces.";
    }

    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
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
        $errors[] = "Please select gender.";
    }

    
    if (empty($course)) {
        $errors[] = "Please select course.";
    }

    
    if (!$terms) {
        $errors[] = "You must accept Terms & Conditions.";
    }

    

    if (count($errors) > 0) {

        echo "<h3 style='color:red;'>Validation Errors</h3>";

        foreach ($errors as $error) {
            echo $error . "<br>";
        }

    } else {

        echo "<h2 style='color:green;'>Registration Successful!</h2>";

        echo "<h3>Submitted Details:</h3>";

        echo "Full Name: $fullName <br>";
        echo "Email: $email <br>";
        echo "Username: $username <br>";
        echo "Age: $age <br>";
        echo "Gender: $gender <br>";
        echo "Course: $course <br>";
    }
}

?>

</body>
</html>