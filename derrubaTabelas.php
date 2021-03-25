<?php
require 'db_credentials.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Choose database
$sql = "USE $dbname";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database changed";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}

// sql to create table



$sql = "DROP TABLE $table2";
if (mysqli_query($conn, $sql)) {
    echo "<br>$table2 dropada com sucesso";
} else {
    echo "<br>Error drop $table2" . mysqli_error($conn);
}

$sql = "DROP  TABLE $table3";
if (mysqli_query($conn, $sql)) {
    echo "<br>$table3 dropada com sucesso";
} else {
    echo "<br>Error drop $table3" . mysqli_error($conn);
}

$sql = "DROP TABLE  $table4";
if (mysqli_query($conn, $sql)) {
    echo "<br>$table4 dropada com sucesso";
} else {
    echo "<br>Error drop $table4" . mysqli_error($conn);
}

$sql = "DROP TABLE  $table5";
if (mysqli_query($conn, $sql)) {
    echo "<br>$table5 dropada com sucesso";
} else {
    echo "<br>Error drop $table5" . mysqli_error($conn);
}

$sql = "DROP TABLE  $table6";
if (mysqli_query($conn, $sql)) {
    echo "<br>$table6 dropada com sucesso";
} else {
    echo "<br>Error drop $table6" . mysqli_error($conn);
}

$sql = "DROP TABLE  $table7";
if (mysqli_query($conn, $sql)) {
    echo "<br>$table7 dropada com sucesso";
} else {
    echo "<br>Error drop $table7" . mysqli_error($conn);
}

$sql = "DROP TABLE $table1";
if (mysqli_query($conn, $sql)) {
    echo "<br>$table1 dropada com sucesso";
} else {
    echo "<br>Error drop $table1" . mysqli_error($conn);
}
?>
