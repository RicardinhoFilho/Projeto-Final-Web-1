<?PHP

require "db_credentials.php";

//Criando conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Checado conexão
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id,img1,nome FROM $table1 WHERE vendido = false";
if (!($carrosVenda = mysqli_query($conn, $sql))) {
    die("Problemas para carregar carros do BD! </br>" . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewCar | Página Inicial</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div id="logo">
            <h1>NewCar</h1>
            <span id="search">
                <input type="text" placeholder="Pesquisar...">
                <input type="submit" value="Pesquisar">
            </span>
        </div>
        <div id="first-buttons">
            <a class="active" href="./index.php">Home</a>
            <a href="/static/about.html">Sobre</a>
            <a href="/static/contact.html">Contato</a>

        </div>
    </header>
    <div id="tesla-container">
        <img id="tesla-image" src="https://imagescdn.dealercarsearch.com/dealerimages/10071/22089/fx2.jpg" alt="Tesla prata">
    </div>

    <main>
        <h2>Bem vindos à agência NewCar</h2>
        <p>A nossa agência tem mais de 30 anos de tradição na cidade
            de Curitiba e é reconhecida por sempre agradar até os mais exigentes clientes,
            seja pelo nosso atendimento e principalmente por nossos carros de altissíma
            qualidade!
        </p>
    </main>

    <div id="Produtos">
        <h2>Conheça nossas opções</h2>
        <div id="itens">
            <?php if (mysqli_num_rows($carrosVenda) == 0) : ?>
                Nenhum carro disponível no momento
            <?php else : ?>
                <?php while ($produto = mysqli_fetch_assoc($carrosVenda)) : ?>
                    <span><a href="/ds122-project/produto.php?n=<?php echo $produto["id"] ?>"><img src="./imagens/<?php echo $produto["img1"] ?>" alt="Imagem Carro">
                            <h3><?php echo $produto["nome"] ?></h3>
                        </a>

                    </span>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>


</body>

</html>