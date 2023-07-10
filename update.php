<?php
include("connection.php");
error_reporting(0);


$rn = $_GET['rn'] ?? '';
$fn = $_GET['fn'] ?? '';
$ln = $_GET['ln'] ?? '';

$cl = $_GET['cl'] ?? '';
$sec = $_GET['sec'] ?? '';
$gen = $_GET['gen'] ?? '';

$gn = $_GET['gn'] ?? '';
$gph = $_GET['gph'] ?? '';
$emg = $_GET['emg'] ?? '';

?>

<html>
<head>
    
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

        <input type="submit" name="submit" value="Update">
    </form>

<?php

if($_GET['submit']){

$rn = $_GET['Roll_No'] ;
$fn = $_GET['First_Name'] ;
$ln = $_GET['Last_Name'] ;

$cl = $_GET['Class'] ;
$sec = $_GET['Section'] ;
$gen = $_GET['Gender'] ;

$gn = $_GET['Gurdian_Name'] ;
$gph = $_GET['Gurdian_phone'] ;
$emg = $_GET['Emr_phone'] ;


$update="UPDATE STUDENT SET First_Name='$fn' ,Last_Name='$ln', Class='$cl',Section='$sec',Gender='$gen',Gurdian_Name='$gn',Gurdian_phone='$gph',Emr_phone'='emg'  WHERE Roll_No='$rn'";
$data=mysqli_query($conn,$update);
if($data){
  echo"sucess.<a href='display.php'>diaplay</a>";
}
else{
  echo"failed";
}

}
else{
  echo"Click on Update to save change";
}








?>


</body>
</html>

