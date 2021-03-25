
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

$sql = "Create TABLE $table1(id INT(6) PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(150) NOT NULL,  descricao VARCHAR(1500) NOT NULL, ano VARCHAR(4) NOT NULL, vendido BOOLEAN DEFAULT false, img1 varchar(30),img2 varchar(30), img3 varchar(30),preco decimal NOT NULL, video varchar(100))";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}
$sql = "CREATE TABLE $table2(id INT(6) PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(200) NOT NULL, email VARCHAR(50) NOT NULL, cpf VARCHAR(11) NOT NULL, numCartao varchar(16) NOT NULL,produto_id int(6), FOREIGN KEY (produto_id) REFERENCES $table1 (id))";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}
$sql = "CREATE TABLE $table3(id INT(6) PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(200) NOT NULL, email VARCHAR(50) NOT NULL, telefone VARCHAR(50) NOT NULL, proposta VARCHAR(500) NOT NULL,produto_id int(6),FOREIGN KEY (produto_id) REFERENCES $table1 (id))";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}
$sql = "CREATE TABLE $table4(id INT(6) PRIMARY KEY AUTO_INCREMENT,potencia varchar(20),motoricacao VARCHAR(30) NOT NULL, combustvel VARCHAR(30) NOT NULL , tracao VARCHAR(20) NOT NULL,cor VARCHAR(20) NOT NULL, torque varchar(20), velmax varchar(20), t100 varchar(20), consCidade varchar(20), consEstra varchar(20), cambio varchar(50), direcao varchar(20), suspD varchar(200), suspT varchar(200), freios varchar(200) ,produto_id int(6),FOREIGN KEY (produto_id) REFERENCES $table1 (id))";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}
$sql = "CREATE TABLE $table5(id INT(6) PRIMARY KEY AUTO_INCREMENT,altura varchar(20), largura decimal, comprimento  decimal, peso decimal, tanque decimal, entreEixos decimal, portaMalas decimal, ocupantes int,produto_id int(6),FOREIGN KEY (produto_id) REFERENCES $table1 (id))";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}
$sql = "CREATE TABLE $table6(id INT(6) PRIMARY KEY AUTO_INCREMENT,item1 varchar(1000), item2 varchar(1000), item3 varchar(1000), item4 varchar(1000),item5 varchar(1000),item6 varchar(1000),item7 varchar(1000),item8 varchar(1000),item9 varchar(1000),item10 varchar(1000),produto_id int(6),FOREIGN KEY (produto_id) REFERENCES $table1 (id))";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}
$sql = "CREATE TABLE $table7(id INT(6) PRIMARY KEY AUTO_INCREMENT,item1 varchar(1000), item2 varchar(1000), item3 varchar(1000), item4 varchar(1000),item5 varchar(1000),item6 varchar(1000),item7 varchar(1000),item8 varchar(1000),item9 varchar(1000),item10 varchar(1000),produto_id int(6),FOREIGN KEY (produto_id) REFERENCES $table1 (id))";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>