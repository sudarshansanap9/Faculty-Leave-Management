<?php
$con = new mysqli("localhost", "root", "", "emp");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$id = $_POST['id'];
$amount = $_POST['amount'];

$sql = "SELECT salary FROM empd WHERE id='$id'";
$result = $con->query($sql);

if ($result->num_rows == 0) {
    echo "Employee does not exist. Try Again.";
} else {
    $row = $result->fetch_assoc();
    $new_salary = $row['salary'] + $amount;
    $sql = "UPDATE empd SET salary='$new_salary' WHERE id='$id'";
    if ($con->query($sql) === TRUE) {
        echo "Employee promoted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>
