<?php
$con = new mysqli("localhost", "root", "", "emp");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM empd";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Post: " . $row["post"]. " - Salary: " . $row["salary"]. "<br>";
    }
} else {
    echo "0 results";
}

$con->close();
?>
