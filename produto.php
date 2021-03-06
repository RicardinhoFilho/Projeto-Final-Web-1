<?PHP

require "db_credentials.php";
require "validaForm.php";

//Criando conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Checado conexão
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["proposta"])) {

        $id = verifica_campo($_POST["id"]);
        $nome = verifica_campo($_POST["name"]);
        $email = verifica_campo($_POST["email"]);
        $tel = verifica_campo($_POST["tel"]);
        $proposta = verifica_campo($_POST["proposta"]);

        //Não deixa passar campos inválidos 
        if (celular($tel) == true && valida_campo($nome) == true && valida_campo($email) && valida_campo($proposta)) {
            $sql = "INSERT INTO $table3(nome,email,telefone,proposta,produto_id)VALUES('$nome','$email','$tel','$proposta',$id)";

            if (!mysqli_query($conn, $sql)) {
                die("Problema para inserir nova proposta no Banco de Dados</br>" . mysqli_error($conn));
            }


            echo "<script>window.location='/ds122-project/produto.php?n=$id';alert('$nome, seu formulário de contato foi enviado com sucesso, logo entraremos em contato com você!');</script>";
        } else {

            echo "<script>window.location='/ds122-project/produto.php?n=$id';alert('$nome, ocorreu algum erro durante o envio de seu formulário');</script>";
        }
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {

    $id;

    if (isset($_GET["n"])) {
        $id = $_GET['n'];
        $sql = "SELECT * FROM $table1 where id =$id";
    }

    if (!($carrosVenda = mysqli_query($conn, $sql))) {
        die("Problemas para carregar carros do BD! </br>" . mysqli_error($conn));
    }

    $sql = "SELECT * FROM $table4 where produto_id =$id";
    if (!($mecanica = mysqli_query($conn, $sql))) {
        die("Problemas para carregar mecânica do BD! </br>" . mysqli_error($conn));
    }

    $sql = "SELECT * FROM $table5 where produto_id =$id";
    if (!($dimensoes = mysqli_query($conn, $sql))) {
        die("Problemas para carregar Dimensões do BD! </br>" . mysqli_error($conn));
    }

    $sql = "SELECT * FROM $table7 where produto_id =$id";
    if (!($seguraca = mysqli_query($conn, $sql))) {
        die("Problemas para carregar Seguraças do BD! </br>" . mysqli_error($conn));
    }

    $sql = "SELECT * FROM $table6 where produto_id =$id";
    if (!($conforto = mysqli_query($conn, $sql))) {
        die("Problemas para carregar Confortos do BD! </br>" . mysqli_error($conn));
    }
}



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NewCar | Produto </title>

    <link rel="stylesheet" href="./css/catalogo.css" />


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

        <h1 id="first-title"><?php echo $produto["nome"] ?></h1>


        <div id="images">
            <img src="./imagens/<?php echo $produto["img1"] ?>" alt="Exterior <?php echo $produto["nome"] ?>">
            <img src="./imagens/<?php echo $produto["img3"] ?>" alt="Interior <?php echo $produto["nome"] ?>">
            <img src="./imagens/<?php echo $produto["img2"] ?>" alt="Traseira <?php echo $produto["nome"] ?>">'
        </div>

        <main>
            <h2>Conheça o <?php echo $produto["nome"] ?></h2>
            <p><?php echo $produto["descricao"] ?></p>
        </main>

        <div id="description">
            <div id="table-mecanica">
                <h3>Mecânica</h3>
                <table>
                    <?php while ($mec = mysqli_fetch_assoc($mecanica)) : ?>
                        <tbody>
                            <td> Motorização</td>
                            <td><?php echo $mec["motoricacao"] ?></td>
                            </tr>
                            <tr>
                                <td>Combustível</td>
                                <td><?php echo $mec["combustvel"] ?></td>
                            </tr>
                            <tr>
                                <td>Potência</td>
                                <td><?php echo $mec["potencia"] ?></td>
                            </tr>
                            <tr>
                                <td>Torque</td>
                                <td><?php echo $mec["torque"] ?></td>
                            </tr>
                            <tr>
                                <td>Velocidade Máxima (km/h)</td>
                                <td><?php echo $mec["velmax"] ?></td>
                            </tr>
                            <tr>
                                <td>Tempo 0-100 (s)</td>
                                <td><?php echo $mec["t100"] ?></td>
                            </tr>
                            <tr>
                                <td>Consumo cidade (km/l)</td>
                                <td><?php echo $mec["consCidade"] ?></td>
                            </tr>
                            <tr>
                                <td>Consumo estrada (km/l)</td>
                                <td><?php echo $mec["consEstra"] ?></td>
                            </tr>
                            <tr>
                                <td>Câmbio</td>
                                <td><?php echo $mec["cambio"] ?></td>
                            </tr>
                            <tr>
                                <td>Tração</td>
                                <td><?php echo $mec["tracao"] ?></td>
                            </tr>

                            <tr>
                                <td>Direção</td>
                                <td><?php echo $mec["direcao"] ?></td>
                            </tr>
                            <tr>
                                <td>Suspensão dianteira </td>
                                <td><?php echo $mec["suspD"] ?></td>
                            </tr>
                            <tr>
                                <td>Suspensão traseira</td>
                                <td><?php echo $mec["suspT"] ?></td>
                            </tr>
                            <td>Freios</td>
                            <td><?php echo $mec["freios"] ?></td>
                            <tr>
                            </tr>
                        </tbody>
                    <?php endwhile; ?>
                </table>
            </div>

            <div id="table-dimensoes">
                <h3>Dimensões</h3>
                <table>
                    <tbody>
                        <?php while ($dim = mysqli_fetch_assoc($dimensoes)) : ?>
                            <tr>
                                <td>Altura (mm)</td>
                                <td><?php echo $dim["altura"] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Largura (mm) </td>
                                <td><?php echo $dim["largura"] ?></td>
                            </tr>
                            <tr>
                                <td>Comprimento (mm) </td>
                                <td><?php echo $dim["comprimento"] ?></td>
                            </tr>
                            <tr>
                                <td>Peso (Kg) </td>
                                <td><?php echo $dim["peso"] ?></td>
                            </tr>
                            <tr>
                                <td>Tanque (L) </td>
                                <td><?php echo $dim["tanque"] ?></td>
                            </tr>
                            <tr>
                                <td>Entre-eixos (mm) </td>
                                <td><?php echo $dim["entreEixos"] ?></td>
                            </tr>

                            <tr>
                                <td>Porta-Malas (L) </td>
                                <td><?php echo $dim["portaMalas"] ?></td>
                            </tr>
                            <tr>
                                <td>Ocupantes </td>
                                <td><?php echo $dim["ocupantes"] ?></td>
                            </tr>'
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="securityConfortable-container">
            <div id="seguranca">
                <h3>Segurança</h3>
                <ul>
                    <?php
                    while ($seg = mysqli_fetch_assoc($seguraca)) : ?>

                        <?php
                        $cont = 0;
                        $itens;
                        //Exibir somente os itens diferente de nullo
                        while ($cont < 10) {
                            $cont++;
                            if ($seg['item' . $cont] == null) {
                                break;
                            }
                            $itens = $itens . "<li>" . $seg['item' . $cont] . "</li>";
                        }

                        echo $itens;

                        ?>
                    <?php endwhile; ?>
                </ul>
            </div>


            <div id="conforto">
                <h3>Conforto</h3>

                <ul>
                    <?php
                    while ($conf = mysqli_fetch_assoc($conforto)) : ?>

                        <?php
                        $cont = 0;
                        $itens = "";

                        //Exibir somente os itens diferente de nullo
                        while ($cont < 10) {
                            $cont++;
                            if ($conf['item' . $cont] == null) {
                                break;
                            }
                            $itens = $itens . "<li>" . $conf['item' . $cont] . "</li>";
                        }

                        echo $itens;

                        ?>
                    <?php endwhile; ?>
                </ul>
            </div>

            <iframe width="560" height="315" src="<?php echo $produto["video"] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div id="botoes-rodape">
            <button><a href="comprar.php?n=<?php echo ($_GET["n"]) ?>">Comprar</a></button>

            <button>
                <a href="#" id="buy" class="button new">Negociar</a>
            </button>
        </div>



    <?php endwhile; ?>




    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="modal">
            <div id="formulario">
                <div id="cabecalho-proposta">
                    <h2 id="title-modal">Faça sua proposta</h2>
                    <a href="#" id="close">x</a>
                </div>
                <input type="hidden" name="id" value="<?php echo ($_GET["n"]); ?>">
                <label for="name">Nome Completo<input type="text" name="name" id="name" placeholder="João da Silva" required /></label>
                <label for="email">E-mail<input type="email" name="email" id="email" placeholder="seuemail@dominio.com" required /></label>
                <label for="tel">Telefone<input type="text" name="tel" id="tel" minlength="11" placeholder="(11)999224340"></label>
                <label for="proposta">
                    <textarea id="mensage" name="proposta" cols="30" rows="10" placeholder="Faça sua proposta aqui!" required></textarea>
                </label>
                <input type="submit" value="Enviar" class="close">
            </div>
        </div>
    </form>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="./js/proposta.js"></script>

</body>

</html>