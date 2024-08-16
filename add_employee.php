<?php
$con = new mysqli("localhost", "root", "", "emp");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$id = $_POST['id'];
$name = $_POST['name'];
$post = $_POST['post'];
$salary = $_POST['salary'];

$sql = "SELECT * FROM empd WHERE id='$id'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "Employee already exists. Try Again.";
} else {
    $sql = "INSERT INTO empd (id, name, post, salary) VALUES ('$id', '$name', '$post', '$salary')";
    if ($con->query($sql) === TRUE) {
        echo "Employee added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>
