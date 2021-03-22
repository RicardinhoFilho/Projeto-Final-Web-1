<?php
require 'db_credentials.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully<br>";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}

// Choose database
$sql = "USE $dbname";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database changed";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}

// sql to create table
 
 
//  $sql ="CREATE TABLE $table1(id INT(6) PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(150) NOT NULL, motoricacao VARCHAR(30) NOT NULL, combustvel VARCHAR(30) NOT NULL, cor VARCHAR(20) NOT NULL, descricao VARCHAR(300) NOT NULL, ano VARCHAR(4) NOT NULL, tracao VARCHAR(20) NOT NULL, vendido BOOLEAN DEFAULT false)";

//   $sql ="CREATE TABLE $table2(id INT(6) PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(200) NOT NULL, email VARCHAR(50) NOT NULL, cpf VARCHAR(11) NOT NULL, pagamento TINYINT NOT NULL, produto_id int(6), FOREIGN KEY (produto_id) REFERENCES $table1 (id))";

//  $sql ="CREATE TABLE $table3(id INT(6) PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(200) NOT NULL, email VARCHAR(50) NOT NULL, telefone VARCHAR(50) NOT NULL, proposta VARCHAR(500) NOT NULL,produto_id int(6),FOREIGN KEY (produto_id) REFERENCES $table1 (id))";




if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
