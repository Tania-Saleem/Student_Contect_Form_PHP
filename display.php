<?php

include("connection.php");

$display = "SELECT * FROM std_conn";
$data = mysqli_query($conn, $display);
$total = mysqli_num_rows($data);

if ($total != 0) {
    ?>

    <table border="1px">
        <tr>
            <td>Roll_No</td>
            <td>First_Name</td>
            <td>Last_Name</td>
            <td>Class</td>
            <td>Section</td>
            <td>Gender</td>
            <td>Gurdian_Name</td>
            <td>Gurdian_phone</td>
            <td>Emr_phone</td>
            <td colspan='2'>operations</td>
        </tr>

        <?php
        while ($result = mysqli_fetch_assoc($data)) {
            echo "<tr>
                <td>".$result['Roll_No']."</td>
                <td>".$result['First_Name']."</td>
                <td>".$result['Last_Name']."</td>
                <td>".$result['Class']."</td>
                <td>".$result['Section']."</td>
                <td>".$result['Gender']."</td>
                <td>".$result['Gurdian_Name']."</td>
                <td>".$result['Gurdian_phone']."</td>
                <td>".$result['Emr_phone']."</td>
                <td> <a href='update.php?rn={$result['Roll_No']}&fn={$result['First_Name']}&ln={$result['Last_Name']}&cl={$result['Class']}'&sec={$result['Section']}&gen={$result['Gender']}&gn={$result['Gurdian_Name']}&gph={$result['Gurdian_phone']}&emg={$result['Emr_phone']}> Edit</td>
                <td><a href='delete.php?rollno={$result['Roll_No']}' onclick='return checkdelete()'>delete</a></td>
            </tr>";
        }
        ?>
    </table>

    <?php
} else {
    echo "No record found";
}

?>

<script>
function checkdelete() {
    return confirm("Are you sure you want to delete?");
}
</script>
