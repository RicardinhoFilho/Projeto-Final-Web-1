<?php
function DefineProduto()
{
    return  $n = $_GET['n'];
}
function defineTitulo()
{
    $id = DefineProduto();

    if ($id == 1) {
        return 'Argo - 2021';
    } else {
        return 'Hb20 - 2021';
    }
}



function DefineImagem()
{
    $id = DefineProduto();
    if ($id == 1) {
        return '<img src="./imagens/FiatArgo.jpeg" alt="Exterior Argo 2021">
            <img src="./imagens/argointerno.jpg" alt="Interior Argo 2021">
            <img src="./imagens/Fiat-traseira.jpg" alt="Traseira Argo">';
    } else {
        return '<img src="./imagens/hb20.jpg" alt="Exterior HB20 2021" />
            <img src="./imagens/hb20-interno.jpg" alt="Interior HB20 2021" />
            <img src="./imagens/Hb20Traseira.jpeg" alt="Traseira Hb20" />';
    }
}


function DefineMain()
{
    $id = DefineProduto();
    if ($id == 1) {
        return ' <h2>Conheça o Novo Fiat Argo</h2>
        <p>O novo fiat argo veio para desmanchar com a concorrência, realmente impressiona
            qualquer amante de carros, seja por seu exterior moderno, econômia ou pelo interior extrememante confortável
            que agrada até os cliente mais exigentes!</p>';
    } else {
        return ' <h2>Conheça o Novo Fiat HB20</h2>
        <p >
          O novo HB20, exterior lindo e moderno, interior confortável, preço
          acessível e econômico, esse sim veio para colocar de uma vez por todas a
          concorrência no bolso! Compre já ou se preferir venha conhece-lo em
          nossa loja!
        </p>';
    }
}


function DefineMecanica()
{
    $id = DefineProduto();
    if ($id == 1) {
        return '<tr>
    <td> Motorização</td>
    <td>1.0</td>
</tr>
<tr>
    <td>Combustível</td>
    <td>Álcool/Gasolina</td>
</tr>
<tr>
    <td>Potência</td>
    <td>77/72cv</td>
</tr>
<tr>
    <td>Torque</td>
    <td>10,9/10,4</td>
</tr>
<tr>
    <td>Velocidade Máxima (km/h)</td>
    <td>162/157</td>
</tr>
<tr>
    <td>Tempo 0-100 (s)</td>
    <td>13,4</td>
</tr>
<tr>
    <td>Consumo cidade (km/l)</td>
    <td>9,3/13,2</td>
</tr>
<tr>
    <td>Consumo estrada (km/l)</td>
    <td>10/14,2</td>
</tr>
<tr>
    <td>Câmbio</td>
    <td>manual de 5 marchas</td>
</tr>
<tr>
    <td>Tração</td>
    <td> dianteira</td>
</tr>

<tr>
    <td>Direção</td>
    <td>elétrica</td>
</tr>
<tr>
    <td>Suspensão dianteira </td>
    <td>Suspensão tipo McPherson e dianteira com barra estabilizadora, roda tipo independente e
        molas
        helicoidal.</td>
</tr>
<tr>
    <td>Suspensão traseira</td>
    <td>Suspensão tipo eixo de torção, roda tipo semi-independente e molas helicoidal.</td>
</tr>';
    } else {
        return '<tr>
    <td>Motorização</td>
    <td>1.6</td>
  </tr>
  <tr>
    <td>Combustível</td>
    <td>Álcool/Gasolina</td>
  </tr>
  <tr>
    <td>Potência (cv)</td>
    <td>128 122</td>
  </tr>
  <tr>
    <td>Torque (kgf.m)</td>
    <td>16,5 16</td>
  </tr>
  <tr>
    <td>Velocidade Máxima (km/h)</td>
    <td>176 N/D</td>
  </tr>
  <tr>
    <td>Tempo 0-100 (s)</td>
    <td>11 N/D</td>
  </tr>
  <tr>
    <td>Consumo cidade (km/l)</td>
    <td>7,7 11,5</td>
  </tr>
  <tr>
    <td>Consumo estrada (km/l)</td>
    <td>9,3 13</td>
  </tr>
  <tr>
    <td>Câmbio</td>
    <td>Manual de 6 marchas</td>
  </tr>
  <tr>
    <td>Tração</td>
    <td>dianteira</td>
  </tr>
  <tr>
    <td>Direção</td>
    <td>hidráulica</td>
  </tr>
  <tr>
    <td>Suspensão Dianteira</td>
    <td>
      Suspensão tipo McPherson e dianteira com barra estabilizadora,
      roda tipo independente e molas helicoidal.
    </td>
  </tr>
  <tr>
    <td>Suspensão Traseira</td>
    <td>
      Suspensão tipo eixo de torção, roda tipo semi-independente e molas
      helicoidal.
    </td>
  </tr>
  <tr>
    <td>Freios</td>
    <td>Dois freios à disco com dois discos ventilados.</td>
  </tr>';
    }
}

function DefineDimenssoes()
{
    $id = DefineProduto();
    if ($id == 1) {
        return '<tr>
<td>Altura (mm)</td>
<td>1.503
</td>
</tr>
<tr>
<td>Largura (mm) </td>
<td>1.724</td>
</tr>
<tr>
<td>Comprimento (mm) </td>
<td>3.998</td>
</tr>
<tr>
<td>Peso (Kg) </td>
<td>1.105</td>
</tr>
<tr>
<td>Tanque (L) </td>
<td>48</td>
</tr>
<tr>
<td>Entre-eixos (mm) </td>
<td>2.521</td>
</tr>

<tr>
<td>Porta-Malas (L) </td>
<td>300</td>
</tr>
<tr>
<td>Ocupantes </td>
<td>5</td>
</tr>';
    } else {
        return ' <tr>
        <td>Altura (mm)</td>
        <td>1.470</td>
      </tr>
      <tr>
        <td>Largura (mm)</td>
        <td>1.680</td>
      </tr>
      <tr>
        <td>Comprimento (mm)</td>
        <td>3.900</td>
      </tr>
      <tr>
        <td>Peso (Kg)</td>
        <td>1.027</td>
      </tr>
      <tr>
        <td>Tanque (L)</td>
        <td>50</td>
      </tr>
      <tr>
        <td>Entre-eixos (mm)</td>
        <td>2.500</td>
      </tr>
      <tr>
        <td>Porta-Malas (L)</td>
        <td>300</td>
      </tr>
      <tr>
        <td>Ocupantes</td>
        <td>5</td>
      </tr>';
    }
}

function DefineSeguranca()
{
    $id = DefineProduto();
    if ($id == 1) {
        return '<li>airbag motorista</li>
        <li>alarme</li>
        <li>freios ABS</li>
        <li>airbag passageiro</li>
        <li>distribuição eletrônica de frenagem</li>';
    } else {
        return '  <li>airbag motorista</li>
        <li>alarme</li>
        <li>freios ABS</li>
        <li>airbag passageiro</li>
        <li>distribuição eletrônica de frenagem</li>';
    }
}

function DefineConforto()
{
    $id = DefineProduto();
    if ($id == 1) {
        return '<li>ar-condicionado</li>
         <li>travas elétricas</li>
         <li>volante com regulagem de altura</li>';
    } else {
        return ' <li>ar-condicionado</li>
         <li>travas elétricas</li>
         <li>ar-quente</li>
         <li>piloto automático</li>
         <li>volante com regulagem de altura</li>
         <li>trio eletrico</li>';
    }
}

function DefineVideo()
{
    $id = DefineProduto();
    if ($id == 1) {
        return '<iframe width="560" height="315" src="https://www.youtube.com/embed/gent23tVRuA" frameborder="0"
         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
         allowfullscreen></iframe>';
    } else {
        return '<iframe width="560"
         height="315"
         src="https://www.youtube.com/embed/jL5ZPCvYpIQ"
         frameborder="0"
         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
         allowfullscreen></iframe>';
    }
}

// function DefineSeguranca(){
//     $id = DefineProduto();
//     if ($id == 1) {
//         return '';
//     }else{
//         return'';
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo (defineTitulo()); ?></title>
    <link rel="stylesheet" href="./css/catalogo.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="./js/proposta.js"></script>
</head>

<body>
    <header>
        <div id="logo">
            <h1>NewCar</h1>
            <span id="search">
                <input type="text" placeholder="Pesquisar..." />
                <input type="submit" value="Pesquisar" />
            </span>
        </div>
        <div id="first-buttons">
            <a class="active" href="./index.php">Home</a>
            <a href="#about">Sobre</a>
            <a href="#contact">Contato</a>
        </div>
    </header>

    <h1 id="first-title"><?php echo (defineTitulo()); ?></h1>
    <div id="images">
        <?php echo DefineImagem(); ?>
    </div>

    <main><?php echo DefineMain() ?></main>

    <div id="description">
        <div id="table-mecanica">
            <h3>Mecânica</h3>
            <table>

                <tbody>
                    <?php echo DefineMecanica() ?>
                </tbody>
            </table>
        </div>

        <div id="table-dimensoes">
            <h3>Dimensões</h3>
            <table>
                <tbody>
                    <?php echo DefineDimenssoes() ?>
                </tbody>
            </table>
        </div>
    </div>

    <div id="securityConfortable-container">
        <div id="seguranca">
            <h3>Segurança</h3>
            <ul>
                <?php echo DefineSeguranca() ?>
            </ul>
        </div>


        <div id="conforto">
            <h3>Conforto</h3>

            <ul>
                <?php echo DefineConforto() ?>
            </ul>
        </div>


        <?php echo DefineVideo() ?>
    </div>
    <div id="botoes-rodape">
        <button><a href="comprar.php">Comprar</a></button>

        <button>
            <a href="#" id="buy" class="button new">Negociar</a>
        </button>
    </div>





    <div class="modal">
        <div id="formulario">
            <div id="cabecalho-proposta">
                <h2 id="title-modal">Faça sua proposta</h2>
                <a href="#" id="close">x</a>
            </div>
            <form action="" onsubmit="EnviarFormulario.submit(event)">
                <label for="name">Nome Completo<input type="text" name="name" id="name" placeholder="João da Silva" required /></label>
                <label for="email">E-mail<input type="email" name="email" id="email" placeholder="seuemail@dominio.com" required /></label>
                <label for="tel">Telefone<input type="tel" name="tel" id="tel" placeholder="(xx) x xxxx-xxxx" /></label>
                <label for="mensagem">
                    <textarea name="mensage" id="mensage" cols="30" rows="10" placeholder="Faça sua proposta aqui!"></textarea>
                </label>
                <button id="confirmar">Enviar</button>
            </form>
        </div>
    </div>

    <script src="./js/proposta.js"></script>
</body>

</html>