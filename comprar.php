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

    if (isset($_GET["n"])) {
        $id = $_GET['n'];
        //echo $id;
        $sql = "SELECT  id,img1, preco, vendido FROM $table1 where id =$id";
    }

    if (!($carrosVenda = mysqli_query($conn, $sql))) {
        die("Problemas para carregar carros do BD! </br>" . mysqli_error($conn));
    }
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["name"])) {

        $nome =  verifica_campo($_POST["name"]);
        $email = verifica_campo($_POST["email"]);
        $cpf = verifica_campo($_POST["CPF"]);
        $cartao = TraduzCard(verifica_campo($_POST["card"]));
        $produto = verifica_campo($_POST['id']);


        if (ValidaCard($cartao) == true && validaCPF($cpf) && checaCodSeguranca($_POST["security"])) {
            $sql = "INSERT INTO $table2(nome,email,cpf, numCartao, produto_id) VALUES ('$nome', '$email', '$cpf', '$cartao', $produto)";


            if (!($comprador = mysqli_query($conn, $sql))) {
                die("Problemas para efetuar compra! </br>" . mysqli_error($conn));
            }


            $sql = "UPDATE $table1 SET vendido = true where id = $produto";

            if (!($efetuada = mysqli_query($conn, $sql))) {
                die("Problemas para carregar carros do BD! </br>" . mysqli_error($conn));
            }

            echo "<script>window.location='/ds122-project/comprar.php?n=$produto';alert('Parabéns $nome, sua compra efetuada com sucesso 0x128512;,  logo entraremos em contato com você para tratarmos melhor a questão da entrega!')</script>";
        } else {
            echo "<script>window.location='/ds122-project/comprar.php?n=$produto';alert('$nome, você digitou algum campo incorretamente, tente de novo, e preste mais atenção em seu CPF e dados do cartão!');</script>";
        }
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/comprar.css" />
    <title>NewCar | Compra</title>
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
    <?php while ($produto = mysqli_fetch_assoc($carrosVenda)) : ?>
        <div id="container">


            <form nctype="multipart/form-data" id="form-test" class="form-horizontal " method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <strong>Insira suas informações - NewCar</strong><br />
                <input type="hidden" name="id" value="<?php echo ($_GET["n"]); ?>">
                <input type="text" name="name" id="nome" placeholder="Nome completo" required />
                <input type="text" name="email" id="email" placeholder="Email" required />
                <input type="text" name="CPF" id="CPF" placeholder="CPF" required />

                <strong>Dados Do Cartão</strong><br />
                <input type="text" minlength="16" name="card" placeholder="Número do Cartão">
                <input type="text" minlength="3" name="security" placeholder="Número de segurança">
                <input type="date" name="date">

                <img src="./imagens/<?php echo $produto['img1'] ?>" alt="<?php echo $produto['nome'] ?>">
                <small id="preco" style="
  text-align: center;
    font-size: 18px;">R$<?php echo $produto['preco'] ?></small>




                <button type="submit" class="<?php if ($produto['vendido'] == true) {
                                                    echo "disable";
                                                } ?>">Comprar</button>


            </form>
        </div>

    <?php endwhile; ?>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="./js/desabilitaSubmit.js"></script>
</body>

</html>