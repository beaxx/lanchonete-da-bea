<<<<<<< HEAD
<?php
$refriQuantidade = $_POST['rl'];
$sucoQuantidade = $_POST['suco'];
$xSaladaQuantidade = $_POST['x-salada'];
$xBurguerQuantidade = $_POST['x-burguer'];
$xEggQuantidade = $_POST['x-egg'];
$xCalabresaQuantidade = $_POST['x-calabresa'];
$xBaconQuantidade = $_POST['x-bacon'];
$xTudoQuantidade = $_POST['x-tudo'];

$refri = 5 * $refriQuantidade;
$suco = 7.5 * $sucoQuantidade;
$xSalada = 10.5 * $xSaladaQuantidade;
$xBurguer = 12 * $xBurguerQuantidade;
$xEgg = 12.9 * $xEggQuantidade;
$xCalabresa = 13 * $xCalabresaQuantidade;
$xBacon = 14 * $xBaconQuantidade;
$xTudo = 15 * $xTudoQuantidade;


$data = date('d/m/Y H:i');
$total = $refri + $suco + $xSalada + $xBurguer + $xEgg + $xCalabresa + $xBacon + $xTudo;
$qtd = $refriQuantidade + $sucoQuantidade + $xSaladaQuantidade + $xBurguerQuantidade + $xEggQuantidade + $xCalabresaQuantidade + $xBaconQuantidade + $xTudoQuantidade;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lanchão da Bea</title>
</head>
<body>
    <main>
        <div class="recipy">
            <div class="div">
               <span class="baixo">LANCHÃO DA BEA</span>
            </div>
            <span class="spacer"></span>
            <div class="information">
                <div class="info-content">
                    <span class="eqd titulo">Descrição</span>
                    <span class="drt titulo">Valor</span>
                </div>
                <div class="info-content">
                    <span class="eqd">Refri lata</span>
                    <span class="drt"> <?php echo "(" . $refriQuantidade .")"?> R$5,00</span>
                </div>
                <div class="info-content">
                    <span class="eqd">Suco</span>
                    <span class="drt"> <?php echo "(" . $sucoQuantidade .")"?> R$7,50</span>
                </div>
                <div class="info-content">
                    <span class="eqd">X-salada</span>
                    <span class="drt"> <?php echo "(" . $xSaladaQuantidade .")"?> R$10,50</span>
                </div>
                <div class="info-content">
                    <span class="eqd">X-burguer</span>
                    <span class="drt"> <?php echo "(" . $xBurguerQuantidade .")"?> R$12,00</span>
                </div>
                <div class="info-content">
                    <span class="eqd">X-egg</span>
                    <span class="drt"> <?php echo "(" . $xEggQuantidade .")"?> R$12,90</span>
                </div>
                <div class="info-content">
                    <span class="eqd">X-calabresa</span>
                    <span class="drt"> <?php echo "(" . $xCalabresaQuantidade .")"?> R$13,00</span>
                </div>
                <div class="info-content">
                    <span class="eqd">X-bacon</span>
                    <span class="drt"> <?php echo "(" . $xBaconQuantidade .")"?> R$14,00</span>
                </div>
                <div class="info-content">
                    <span class="eqd">X-tudo</span>
                    <span class="drt"> <?php echo "(" . $xTudoQuantidade .")"?> R$15,00</span>
                </div> <br>
            </div>
            <span class="spacer"></span>
            <div class="total">
                <div class="qtd">
                    <span class="eqd">Quantidade de itens:</span>
                    <span class="drt"><?php echo $qtd ?></span>
                </div>
                <div class="dinheiros">
                    <span class="eqd">Total:</span>
                    <span class="drt"><?php echo "R$".$total?></span>
                </div>
            </div>
            <span class="spacer"></span>
            <div class="end">
                <span class="tchau">Obrigada por comprar conosco!</span>
                <img src="src/images/codigoBarras.png" alt="código de barras">
            </div>
            <span class="spacer"></span>
            <span class="date"><?php echo $data ?></span>
    </main>
</body>
=======
<?php
$refriQuantidade = $_POST['rl'];
$sucoQuantidade = $_POST['suco'];
$xSaladaQuantidade = $_POST['x-salada'];
$xBurguerQuantidade = $_POST['x-burguer'];
$xEggQuantidade = $_POST['x-egg'];
$xCalabresaQuantidade = $_POST['x-calabresa'];
$xBaconQuantidade = $_POST['x-bacon'];
$xTudoQuantidade = $_POST['x-tudo'];

$refri = 5 * $refriQuantidade;
$suco = 7.5 * $sucoQuantidade;
$xSalada = 10.5 * $xSaladaQuantidade;
$xBurguer = 12 * $xBurguerQuantidade;
$xEgg = 12.9 * $xEggQuantidade;
$xCalabresa = 13 * $xCalabresaQuantidade;
$xBacon = 14 * $xBaconQuantidade;
$xTudo = 15 * $xTudoQuantidade;


$data = date('d/m/Y H:i');
$total = $refri + $suco + $xSalada + $xBurguer + $xEgg + $xCalabresa + $xBacon + $xTudo;
$qtd = $refriQuantidade + $sucoQuantidade + $xSaladaQuantidade + $xBurguerQuantidade + $xEggQuantidade + $xCalabresaQuantidade + $xBaconQuantidade + $xTudoQuantidade;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lanchão da Bea</title>
</head>
<body>
    <main>
        <div class="recipy">
            <div class="div">
               <span class="baixo">LANCHÃO DA BEA</span>
            </div>
            <span class="spacer"></span>
            <div class="information">
                <div class="info-content">
                    <span class="eqd titulo">Descrição</span>
                    <span class="drt titulo">Valor</span>
                </div>
                <div class="info-content">
                    <span class="eqd">Refri lata</span>
                    <span class="drt"> <?php echo "(" . $refriQuantidade .")"?> R$5,00</span>
                </div>
                <div class="info-content">
                    <span class="eqd">Suco</span>
                    <span class="drt"> <?php echo "(" . $sucoQuantidade .")"?> R$7,50</span>
                </div>
                <div class="info-content">
                    <span class="eqd">X-salada</span>
                    <span class="drt"> <?php echo "(" . $xSaladaQuantidade .")"?> R$10,50</span>
                </div>
                <div class="info-content">
                    <span class="eqd">X-burguer</span>
                    <span class="drt"> <?php echo "(" . $xBurguerQuantidade .")"?> R$12,00</span>
                </div>
                <div class="info-content">
                    <span class="eqd">X-egg</span>
                    <span class="drt"> <?php echo "(" . $xEggQuantidade .")"?> R$12,90</span>
                </div>
                <div class="info-content">
                    <span class="eqd">X-calabresa</span>
                    <span class="drt"> <?php echo "(" . $xCalabresaQuantidade .")"?> R$13,00</span>
                </div>
                <div class="info-content">
                    <span class="eqd">X-bacon</span>
                    <span class="drt"> <?php echo "(" . $xBaconQuantidade .")"?> R$14,00</span>
                </div>
                <div class="info-content">
                    <span class="eqd">X-tudo</span>
                    <span class="drt"> <?php echo "(" . $xTudoQuantidade .")"?> R$15,00</span>
                </div> <br>
            </div>
            <span class="spacer"></span>
            <div class="total">
                <div class="qtd">
                    <span class="eqd">Quantidade de itens:</span>
                    <span class="drt"><?php echo $qtd ?></span>
                </div>
                <div class="dinheiros">
                    <span class="eqd">Total:</span>
                    <span class="drt"><?php echo "R$".$total?></span>
                </div>
            </div>
            <span class="spacer"></span>
            <div class="end">
                <span class="tchau">Obrigada por comprar conosco!</span>
                <img src="src/images/codigoBarras.png" alt="código de barras">
            </div>
            <span class="spacer"></span>
            <span class="date"><?php echo $data ?></span>
    </main>
</body>
>>>>>>> b2463304627d7aca35337237556415c1029bee02
</html>