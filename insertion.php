<?php
include("connection.php");


//insertion quray
$quray = "INSERT INTO std_conn  VALUES ('001','Tania','Saleem','9','C','Female','Saleem Akhtar','03452244123','08810012') ";
$data=mysqli_query($conn,$quray);
if($data){
    echo "inerted";
}
else{
    echo "not inserted";
}

?>