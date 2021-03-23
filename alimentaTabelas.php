<?php
require 'db_credentials.php';

 // Create connection
 $conn = mysqli_connect($servername, $username, $password);
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }

 $sql = "use $dbname";

 if (mysqli_query($conn, $sql)) {
     echo "<br>Database created successfully";
 } else {
     echo "<br>Error creating database: " . mysqli_error($conn);
 }

 $sql = 'insert into ' . $table1 . '(id,nome,descricao,ano,vendido,img1,img2,img3,video, preco) values(1,"Argo 2020", "O novo fiat argo veio para desmanchar com a concorrência, realmente impressiona qualquer amante de carros, seja por seu exterior moderno, econômia ou pelo interior extrememante confortável que agrada até os cliente mais exigentes!", 
 "2021", false, "FiatArgo.jpeg", "Fiat-traseira.jpg", "argointerno.jpg","https://www.youtube.com/embed/gent23tVRuA", 28000 )';
 if (mysqli_query($conn, $sql)) {
     echo "<br>Database created successfully";
 } else {
     echo "<br>Error creating database: " . mysqli_error($conn);
 }
 $sql = 'insert into '  . $table4 . '(id,potencia,motoricacao,combustvel,tracao,cor,torque,velmax,t100,consCidade,consEstra,cambio,direcao,suspD,suspT,freios,produto_id)values
 (1, "77/72","1.0" ,"Álcool/Gasolina", "dianteira" , "prata", "10,9/10,4", "162/157", "13,4", "9,3/13", "10/14,2", "manual de 5 marchas", "elétrica", "Suspensão tipo McPherson e dianteira com barra estabilizadora, roda tipo independente e
         molas
         helicoidal", "Suspensão tipo eixo de torção, roda tipo semi-independente e molas helicoidal.", "Dois freios à disco com dois discos ventilados", 1)';
 if (mysqli_query($conn, $sql)) {
     echo "<br>Database created successfully";
 } else {
     echo "<br>Error creating database: " . mysqli_error($conn);
 }
 $sql = 'insert into ' . $table7 . '(id,item1,item2,item3,item4,item5,produto_id)values(1, "airbag motorista", "alarme","freios ABS","airbag passageiro","distribuição eletrônica de frenagem",1) ';
 if (mysqli_query($conn, $sql)) {
     echo "<br>Database created successfully";
 } else {
     echo "<br>Error creating database: " . mysqli_error($conn);
 }
 $sql = 'insert into ' . $table6 . '(id,item1,item2,item3,produto_id)values(1,"ar-condicionado","travas elétricas","volante com regulagem de altura",1 )';
 if (mysqli_query($conn, $sql)) {
     echo "<br>Database created successfully";
 } else {
     echo "<br>Error creating database: " . mysqli_error($conn);
 }
 $sql = "insert into $table5" . '(id,altura,largura,comprimento,peso,tanque,entreEixos,portaMalas,ocupantes,produto_id)values
 (1, 1503, 1724, 3998, 1105, 48, 2521, 300, 5, 1 )';
 if (mysqli_query($conn, $sql)) {
     echo "<br>Database created successfully";
 } else {
     echo "<br>Error creating database: " . mysqli_error($conn);
 }

/* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ */

$sql = 'insert into ' . $table1 . '(id,nome,descricao,ano,vendido,img1,img2,img3,video,preco) values(2,"Hb20 2020", "O novo HB20, exterior lindo e moderno, interior confortável, preço
acessível e econômico, esse sim veio para colocar de uma vez por todas a
concorrência no bolso! Compre já ou se preferir venha conhece-lo em
nossa loja!", 
"2020", false, "hb20.jpg", "Hb20Traseira.jpeg", "hb20-interno.jpg","https://www.youtube.com/embed/jL5ZPCvYpIQ", 32000 )';

if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}


$sql = 'insert into '  . $table4 . '(id,potencia,motoricacao,combustvel,tracao,cor,torque,velmax,t100,consCidade,consEstra,cambio,direcao,suspD,suspT,freios,produto_id)values
(2, "128/122","1.6" ,"Álcool/Gasolina", "dianteira" , "branca", "16,5/16", "176", "11", "7,7/11,5", "9,3/13", "Manual de 6 marchas", "elétrica", "Suspensão tipo McPherson e dianteira com barra estabilizadora, roda tipo independente e
        molas
        helicoidal", "Suspensão tipo eixo de torção, roda tipo semi-independente e molas helicoidal.", "Dois freios à disco com dois discos ventilados", 2)';

if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}



$sql = 'insert into ' . $table7 . '(id,item1,item2,item3,item4,item5,produto_id)values(2, "airbag motorista", "alarme","freios ABS","airbag passageiro","distribuição eletrônica de frenagem",2)';

if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}


$sql = 'insert into ' . $table6 . '(id,item1,item2,item3,item4,item5,item6,produto_id)values(2,"ar-condicionado","travas elétricas","ar quente","volante com regulagem de altura","trio eletrico", "piloto automático" ,2 )';

if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}

$sql = "insert into $table5" . '(id,altura,largura,comprimento,peso,tanque,entreEixos,portaMalas,ocupantes,produto_id)values
(2, 1680, 1724, 3900, 1027, 50, 2500, 300, 5, 2 )';

if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}
