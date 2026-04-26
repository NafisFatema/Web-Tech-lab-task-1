<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form method="post" action="process.php">

    Full Name:<br>
    <input type="text" name="fullName"><br><br>

    Email:<br>
    <input type="text" name="email"><br><br>

    Username:<br>
    <input type="text" name="username"><br><br>

    Password:<br>
    <input type="password" name="password"><br><br>

    Confirm Password:<br>
    <input type="password" name="confirmPassword"><br><br>

    Age:<br>
    <input type="number" name="age"><br><br>

    Gender:<br>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Course:<br>
    <select name="course">
        <option value="">Select Course</option>
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="BBA">BBA</option>
    </select>
    <br><br>

    <input type="checkbox" name="terms"> I agree to Terms & Conditions
    <br><br>

    <input type="submit" name="register" value="Register">

</form>

</body>
</html>
