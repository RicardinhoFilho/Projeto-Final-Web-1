<?php
require("form.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/comprar.css" />
  <title>Compra</title>
</head>

<body>
  <div id="container">

    <form nctype="multipart/form-data" id="form-test" class="form-horizontal" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <strong>Insira suas informações</strong><br />
      <input type="text" name="nome" id="nome" placeholder="Nome completo" required />
      <input type="text" name="email" id="email" placeholder="Email" required />
      <input type="text" name="CPF" id="CPF" placeholder="CPF" required />
      <div class="picker">
        <strong>Método de pagamento</strong><br />
        <input type="radio" id="card" name="payment" value="card" />
        <label for="card">Cartão de crédito</label><br />
        <input type="radio" id="boleto" name="payment" value="boleto" />
        <label for="boleto">Boleto bancário</label><br />
        <input type="radio" id="other" name="payment" value="other" />
        <label for="other">Outro</label><br />
      </div>
      <div class="picker">
        <strong>Escolha o carro</strong><br />
        <input type="radio" id="argo" name="car" value="argo" />
        <label for="argo">Argo</label><br />
        <input type="radio" id="hb20" name="car" value="hb20" />
        <label for="hb20">HB20</label><br />
      </div>
      <button type="submit">Comprar</button>
      <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
        <?php if (!$erro) : ?>
          <div class="align-main">
            Dados recebidos com sucesso
          </div>
        <?php else : ?>
          <div class="align-main">
            Erros no formulário.
          </div>
        <?php endif; ?>
      <?php endif; ?>

    </form>
  </div>
</body>

</html>