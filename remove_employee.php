<?php
$con = new mysqli("localhost", "root", "", "emp");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$id = $_POST['id'];

$sql = "SELECT * FROM empd WHERE id='$id'";
$result = $con->query($sql);

if ($result->num_rows == 0) {
    echo "Employee does not exist. Try Again.";
} else {
    $sql = "DELETE FROM empd WHERE id='$id'";
    if ($con->query($sql) === TRUE) {
        echo "Employee removed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>
