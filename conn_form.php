<?php
include("connection.php");
error_reporting(0);

if (isset($_GET['submit'])) {
    $en = $_GET['enroll'];
    $fn = $_GET['firstName'];
    $ln = $_GET['lastName'];
    $cl = $_GET['class'];
    $sec = $_GET['section'];
    $gen = $_GET['gender'];
    $gn = $_GET['guardianName'];
    $gp = $_GET['guardianPhone'];
    $emgp = $_GET['emergencyPhone'];

    if ($en != "" && $fn != "" && $ln != "" && $cl != "" && $sec != "" && $gen != "" && $gn != "" && $gp != "" && $emgp != "") {
        $query = "INSERT INTO std_conn (Roll_No, First_Name, Last_Name, Class, Section, Gender, Gurdian_Name, Gurdian_phone, Emr_phone) VALUES ('$en', '$fn', '$ln', '$cl', '$sec', '$gen', '$gn', '$gp', '$emgp')";
        $data = mysqli_query($conn, $query);
        
        if ($data) {
            echo "Data inserted successfully.";
        } else {
            echo "Failed to insert data.";
        }
    } else {
        echo "Please fill in all the required fields.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Information Form</title>
</head>
<body>
    <h2>Student Information Form</h2>
    <form action="" method="GET">
        <label for="enroll">Enrollment No:</label>
        <input type="text" id="enroll" name="enroll" required><br>

        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required><br>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required><br>

        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required><br>

        <label for="section">Section:</label>
        <input type="text" id="section" name="section" required><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>
        <br>

        <label for="guardianName">Guardian Name:</label>
        <input type="text" id="guardianName" name="guardianName" required><br>

        <label for="guardianPhone">Guardian Phone Number (+92):</label>
        <input type="tel" id="guardianPhone" name="guardianPhone" required><br>

        <label for="emergencyPhone">Emergency Phone Number (+92):</label>
        <input type="tel" id="emergencyPhone" name="emergencyPhone" required><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

