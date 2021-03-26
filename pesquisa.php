<?php
require "db_credentials.php";
require "validaForm.php";

//Criando conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Checado conexão
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if (isset($_GET["chave"])) {

        $frase = quebraFrase($_GET["chave"]);
        $cont = 0;
        while ($cont <= count($frase)) {

            if($frase[$cont] != null){
            $sql =  "SELECT * FROM grr20204465_tb_produtos WHERE nome LIKE '%$frase[$cont]%'";
            }
            if (!($busca = mysqli_query($conn, $sql))) {
                die("Problemas para carregar Seguraças do BD! </br>" . mysqli_error($conn));
            }

            $cont++;
            //echo $cont;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/busca.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div id="logo">
            <h1>NewCar</h1>
            <span id="search">
                <form action="./pesquisa.php" method="Get">
                    <input type="text" name="chave" placeholder="Pesquise um modelo..." required>
                    <input type="submit" value="Pesquisar">
                </form>
            </span>
        </div>
        <div id="first-buttons">
            <a class="active" href="./index.php">Home</a>
            <a href="./static/about.html">Sobre</a>
            <a href="./static/contact.html">Contato</a>

        </div>
    </header>


    <h1 class="cont">Resultado da busca: <?php echo ($_GET["chave"]) ?></h1>
    <div id="Produtos">
        <div id="itens">
            <ul class="list-group">
                <?php if (mysqli_num_rows($busca) == 0) : ?>
                    Nenhum carro Econtrado
                <?php else : ?>
                    <?php while ($produto = mysqli_fetch_assoc($busca)) : ?>
                        <li><span class="item-busca"><a href="./produto.php?n=<?php echo $produto["id"] ?>"><img src="./imagens/<?php echo $produto["img1"] ?>" alt="Imagem Carro">
                                    <h3><?php echo $produto["nome"] ?></h3>
                                </a>

                            </span>

                        <?php endwhile; ?>
                    <?php endif; ?>
            </ul>
        </div>
    </div>

</body>

</html>