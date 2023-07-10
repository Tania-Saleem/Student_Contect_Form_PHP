<?php
include("connection.php");
error_reporting(0);


$r = $_GET['rollno'];
$query = "DELETE FROM std_conn WHERE Roll_No='$r'";
$data = mysqli_query($conn, $query);

if ($data) {
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>alert('Record Deleted');</script>";
        echo "<META HTTP-EQUIV='Refresh' content='0;URL='http://localhost/STUDENT_CONTECT_SYSTEM/display.php'>";
    } else {
        echo "<font color='red'>No records found with the given roll number.</font>";
    }
} else {
    echo "<font color='red'>Operation failed: " . mysqli_error($conn) . "</font>";
}
?>