<!DOCTYPE html>
<?php 

include_once 'funçoes.php'; 

$cartas = isset($_POST['cartas']) ? $_POST['cartas'] : 0;
$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
$naipe = isset($_POST['naipe']) ? $_POST['naipe'] : 1;
$acao = isset($_POST['acao']) ? $_POST['acao'] : "";
$sorteio = sortear($cartas);

?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <title>CARTAS</title>
</head>
<body>
<center> 
  <form method="post">
  
  <label for="nome">Digite aqui seu nome: </label>
  <input type="text" name="nome" id="nome" required value="<?php echo $nome; ?>"><br>
  
  <label for="naipe">Selecione o Naipe</label><br>
  <input type="radio" name="naipe" id="naipe" value="1" <?php if ($naipe == 1) echo 'checked'; ?>>Ouro <br> 
  <input type="radio" name="naipe" id="naipe" value="2" <?php if ($naipe == 2) echo 'checked'; ?>>Copas <br>
  <input type="radio" name="naipe" id="naipe" value="3" <?php if ($naipe == 3) echo 'checked'; ?>>Paus <br>
  <input type="radio" name="naipe" id="naipe" value="4" <?php if ($naipe == 4) echo 'checked'; ?>>Espadas<br>
  
        <label for="cartas">Selecione o numero de cartas:</label> <br>
  <input type="radio" name="cartas" id="cartas" value="1" <?php if ($cartas == 1) echo 'checked'; ?>>1 <br>
  <input type="radio" name="cartas" id="cartas" value="2" <?php if ($cartas == 2) echo 'checked'; ?>>2 <br>
  <input type="radio" name="cartas" id="cartas" value="3" <?php if ($cartas == 3) echo 'checked'; ?>>3 <br>
  <input type="radio" name="cartas" id="cartas" value="4" <?php if ($cartas == 4) echo 'checked'; ?>>4 <br>
  <input type="radio" name="cartas" id="cartas" value="5" <?php if ($cartas == 5) echo 'checked'; ?>>5 <br>
  <input type="radio" name="cartas" id="cartas" value="6" <?php if ($cartas == 6) echo 'checked'; ?>>6 <br>
  
  <?php
    for ($x = 0; $x < $cartas; $x++){
      echo "<input type='hidden' name='h".($x+1)."' value='".$sorteio[$x]."'>";
    }
  ?>

  <button type="submit" name="acao" id="acao" value="sortear">Sortear</button>
  <button type="submit"  name="acao" id="acao" value="jogar">Jogar</button>
  </form>  
  <hr>
<?php
    if ($acao == 'jogar'){

      echo "<h2> Jogador: <h2>";
    
        $h1 = isset($_POST['h1']) ? $_POST['h1'] : 0;
        if ($h1 == 1 && $naipe == 1)
        echo "<img src='img/asouro.png' width='100'>";
        elseif ($h1 == 2 && $naipe == 1)
        echo  "<img src='img/doisouro.png' width='100'>";
        elseif ($h1 == 3 && $naipe == 1)
        echo  "<img src='img/tresouro.png' width='100'>";
        elseif ($h1 == 4 && $naipe == 1)
        echo  "<img src='img/quatroouro.png' width='100'>";
        elseif ($h1 == 5 && $naipe == 1)
        echo  "<img src='img/cincoouro.png' width='100'>";
        elseif ($h1 == 6 && $naipe == 1)
        echo  "<img src='img/seisouro.png' width='100'>";
        elseif ($h1 == 7 && $naipe == 1)
        echo  "<img src='img/seteouro.jpg' width='100'>";
        elseif ($h1 == 8 && $naipe == 1)
        echo  "<img src='img/oitoouro.jpg' width='100'>";
        elseif ($h1 == 9 && $naipe == 1)
        echo  "<img src='img/noveouro.png' width='100'>";
        elseif ($h1 == 10 && $naipe == 1)
        echo  "<img src='img/dezouro.png' width='100'>";
        elseif ($h1 == 11 && $naipe == 1)
        echo  "<img src='img/onzeouro.jpg' width='100'>";
        elseif ($h1 == 12 && $naipe == 1)
        echo  "<img src='img/dozeouro.jpg' width='100'>";
        elseif ($h1 == 13 && $naipe == 1)
        echo  "<img src='img/trezeouro.jpg' width='100'>";

        elseif ($h1 == 1 && $naipe == 2)
        echo "<img src='img/ascopas.jpg' width='100'>";
        elseif ($h1 == 2 && $naipe == 2)
        echo  "<img src='img/doiscopas.png' width='100'>";
        elseif ($h1 == 3 && $naipe == 2)
        echo  "<img src='img/trescopas.png' width='100'>";
        elseif ($h1 == 4 && $naipe == 2)
        echo  "<img src='img/quatrocopas.png' width='100'>";
        elseif ($h1 == 5 && $naipe == 2)
        echo  "<img src='img/cincocopas.png' width='100'>";
        elseif ($h1 == 6 && $naipe == 2)
        echo  "<img src='img/seiscopas.png' width='100'>";
        elseif ($h1 == 7 && $naipe == 2)
        echo  "<img src='img/setecopas.png' width='100'>";
        elseif ($h1 == 8 && $naipe == 2)
        echo  "<img src='img/oitocopas.png' width='100'>";
        elseif ($h1 == 9 && $naipe == 2)
        echo  "<img src='img/novecopas.png' width='100'>";
        elseif ($h1 == 10 && $naipe == 2)
        echo  "<img src='img/dezcopas.png' width='100'>";
        elseif ($h1 == 11 && $naipe == 2)
        echo  "<img src='img/onzecopas.png' width='100'>";
        elseif ($h1 == 12 && $naipe == 2)
        echo  "<img src='img/dozecopas.png' width='100'>";
        elseif ($h1 == 13 && $naipe == 2)
        echo  "<img src='img/trezecopas.png' width='100'>";

        elseif ($h1 == 1 && $naipe == 3)
        echo "<img src='img/aspaus.png' width='100'>";
        elseif ($h1 == 2 && $naipe == 3)
        echo  "<img src='img/doispaus.png' width='100'>";
        elseif ($h1 == 3 && $naipe == 3)
        echo  "<img src='img/trespaus.png' width='100'>";
        elseif ($h1 == 4 && $naipe == 3)
        echo  "<img src='img/quatropaus.png' width='100'>";
        elseif ($h1 == 5 && $naipe == 3)
        echo  "<img src='img/cincopaus.png' width='100'>";
        elseif ($h1 == 6 && $naipe == 3)
        echo  "<img src='img/seispaus.png' width='100'>";
        elseif ($h1 == 7 && $naipe == 3)
        echo  "<img src='img/setepaus.png' width='100'>";
        elseif ($h1 == 8 && $naipe == 3)
        echo  "<img src='img/oitopaus.png' width='100'>";
        elseif ($h1 == 9 && $naipe == 3)
        echo  "<img src='img/novepaus.png' width='100'>";
        elseif ($h1 == 10 && $naipe == 3)
        echo  "<img src='img/dezpaus.png' width='100'>";
        elseif ($h1 == 11 && $naipe == 3)
        echo  "<img src='img/onzepaus.png' width='100'>";
        elseif ($h1 == 12 && $naipe == 3)
        echo  "<img src='img/dozepaus.png' width='100'>";
        elseif ($h1 == 13 && $naipe == 3)
        echo  "<img src='img/trezepaus.png' width='100'>";

        elseif ($h1 == 1 && $naipe == 4)
        echo "<img src='img/asespadas.png' width='100'>";
        elseif ($h1 == 2 && $naipe == 4)
        echo  "<img src='img/doisespadas.png' width='100'>";
        elseif ($h1 == 3 && $naipe == 4)
        echo  "<img src='img/tresespadas.png' width='100'>";
        elseif ($h1 == 4 && $naipe == 4)
        echo  "<img src='img/quatroespadas.png' width='100'>";
        elseif ($h1 == 5 && $naipe == 4)
        echo  "<img src='img/cincoespadas.png' width='100'>";
        elseif ($h1 == 6 && $naipe == 4)
        echo  "<img src='img/seisespadas.png' width='100'>";
        elseif ($h1 == 7 && $naipe == 4)
        echo  "<img src='img/seteespadas.png' width='100'>";
        elseif ($h1 == 8 && $naipe == 4)
        echo  "<img src='img/oitoespadas.png' width='100'>";
        elseif ($h1 == 9 && $naipe == 4)
        echo  "<img src='img/noveespadas.png' width='100'>";
        elseif ($h1 == 10 && $naipe == 4)
        echo  "<img src='img/dezespadas.png' width='100'>";
        elseif ($h1 == 11 && $naipe == 4)
        echo  "<img src='img/onzeespadas.png' width='100'>";
        elseif ($h1 == 12 && $naipe == 4)
        echo  "<img src='img/dozeespadas.png' width='100'>";
        elseif ($h1 == 13 && $naipe == 4)
        echo  "<img src='img/trezeespadas.png' width='100'>";

        $h2 = isset($_POST['h2']) ? $_POST['h2'] : 0;
        if ($h2 == 1 && $naipe == 1)
        echo "<img src='img/asouro.png' width='100'>";
        elseif ($h2 == 2 && $naipe == 1)
        echo  "<img src='img/doisouro.png' width='100'>";
        elseif ($h2 == 3 && $naipe == 1)
        echo  "<img src='img/tresouro.png' width='100'>";
        elseif ($h2 == 4 && $naipe == 1)
        echo  "<img src='img/quatroouro.png' width='100'>";
        elseif ($h2 == 5 && $naipe == 1)
        echo  "<img src='img/cincoouro.png' width='100'>";
        elseif ($h2 == 6 && $naipe == 1)
        echo  "<img src='img/seisouro.png' width='100'>";
        elseif ($h2 == 7 && $naipe == 1)
        echo  "<img src='img/seteouro.jpg' width='100'>";
        elseif ($h2 == 8 && $naipe == 1)
        echo  "<img src='img/oitoouro.jpg' width='100'>";
        elseif ($h2 == 9 && $naipe == 1)
        echo  "<img src='img/noveouro.png' width='100'>";
        elseif ($h2 == 10 && $naipe == 1)
        echo  "<img src='img/dezouro.png' width='100'>";
        elseif ($h2 == 11 && $naipe == 1)
        echo  "<img src='img/onzeouro.jpg' width='100'>";
        elseif ($h2 == 12 && $naipe == 1)
        echo  "<img src='img/dozeouro.jpg' width='100'>";
        elseif ($h2 == 13 && $naipe == 1)
        echo  "<img src='img/trezeouro.jpg' width='100'>";

        elseif ($h2 == 1 && $naipe == 2)
        echo "<img src='img/ascopas.jpg' width='100'>";
        elseif ($h2 == 2 && $naipe == 2)
        echo  "<img src='img/doiscopas.png' width='100'>";
        elseif ($h2 == 3 && $naipe == 2)
        echo  "<img src='img/trescopas.png' width='100'>";
        elseif ($h2 == 4 && $naipe == 2)
        echo  "<img src='img/quatrocopas.png' width='100'>";
        elseif ($h2 == 5 && $naipe == 2)
        echo  "<img src='img/cincocopas.png' width='100'>";
        elseif ($h2 == 6 && $naipe == 2)
        echo  "<img src='img/seiscopas.png' width='100'>";
        elseif ($h2 == 7 && $naipe == 2)
        echo  "<img src='img/setecopas.png' width='100'>";
        elseif ($h2 == 8 && $naipe == 2)
        echo  "<img src='img/oitocopas.png' width='100'>";
        elseif ($h2 == 9 && $naipe == 2)
        echo  "<img src='img/novecopas.png' width='100'>";
        elseif ($h2 == 10 && $naipe == 2)
        echo  "<img src='img/dezcopas.png' width='100'>";
        elseif ($h2 == 11 && $naipe == 2)
        echo  "<img src='img/onzecopas.png' width='100'>";
        elseif ($h2 == 12 && $naipe == 2)
        echo  "<img src='img/dozecopas.png' width='100'>";
        elseif ($h2 == 13 && $naipe == 2)
        echo  "<img src='img/trezecopas.png' width='100'>";

        elseif ($h2 == 1 && $naipe == 3)
        echo "<img src='img/aspaus.png' width='100'>";
        elseif ($h2 == 2 && $naipe == 3)
        echo  "<img src='img/doispaus.png' width='100'>";
        elseif ($h2 == 3 && $naipe == 3)
        echo  "<img src='img/trespaus.png' width='100'>";
        elseif ($h2 == 4 && $naipe == 3)
        echo  "<img src='img/quatropaus.png' width='100'>";
        elseif ($h2 == 5 && $naipe == 3)
        echo  "<img src='img/cincopaus.png' width='100'>";
        elseif ($h2 == 6 && $naipe == 3)
        echo  "<img src='img/seispaus.png' width='100'>";
        elseif ($h2 == 7 && $naipe == 3)
        echo  "<img src='img/setepaus.png' width='100'>";
        elseif ($h2 == 8 && $naipe == 3)
        echo  "<img src='img/oitopaus.png' width='100'>";
        elseif ($h2 == 9 && $naipe == 3)
        echo  "<img src='img/novepaus.png' width='100'>";
        elseif ($h2 == 10 && $naipe == 3)
        echo  "<img src='img/dezpaus.png' width='100'>";
        elseif ($h2 == 11 && $naipe == 3)
        echo  "<img src='img/onzepaus.png' width='100'>";
        elseif ($h2 == 12 && $naipe == 3)
        echo  "<img src='img/dozepaus.png' width='100'>";
        elseif ($h2 == 13 && $naipe == 3)
        echo  "<img src='img/trezepaus.png' width='100'>";

        elseif ($h2 == 1 && $naipe == 4)
        echo "<img src='img/asespadas.png' width='100'>";
        elseif ($h2 == 2 && $naipe == 4)
        echo  "<img src='img/doisespadas.png' width='100'>";
        elseif ($h2 == 3 && $naipe == 4)
        echo  "<img src='img/tresespadas.png' width='100'>";
        elseif ($h2 == 4 && $naipe == 4)
        echo  "<img src='img/quatroespadas.png' width='100'>";
        elseif ($h2 == 5 && $naipe == 4)
        echo  "<img src='img/cincoespadas.png' width='100'>";
        elseif ($h2 == 6 && $naipe == 4)
        echo  "<img src='img/seisespadas.png' width='100'>";
        elseif ($h2 == 7 && $naipe == 4)
        echo  "<img src='img/seteespadas.png' width='100'>";
        elseif ($h2 == 8 && $naipe == 4)
        echo  "<img src='img/oitoespadas.png' width='100'>";
        elseif ($h2 == 9 && $naipe == 4)
        echo  "<img src='img/noveespadas.png' width='100'>";
        elseif ($h2 == 10 && $naipe == 4)
        echo  "<img src='img/dezespadas.png' width='100'>";
        elseif ($h2 == 11 && $naipe == 4)
        echo  "<img src='img/onzeespadas.png' width='100'>";
        elseif ($h2 == 12 && $naipe == 4)
        echo  "<img src='img/dozeespadas.png' width='100'>";
        elseif ($h2 == 13 && $naipe == 4)
        echo  "<img src='img/trezeespadas.png' width='100'>";

        $h3 = isset($_POST['h3']) ? $_POST['h3'] : 0;
        if ($h3 == 1 && $naipe == 1)
        echo "<img src='img/asouro.png' width='100'>";
        elseif ($h3 == 2 && $naipe == 1)
        echo  "<img src='img/doisouro.png' width='100'>";
        elseif ($h3 == 3 && $naipe == 1)
        echo  "<img src='img/tresouro.png' width='100'>";
        elseif ($h3 == 4 && $naipe == 1)
        echo  "<img src='img/quatroouro.png' width='100'>";
        elseif ($h3 == 5 && $naipe == 1)
        echo  "<img src='img/cincoouro.png' width='100'>";
        elseif ($h3 == 6 && $naipe == 1)
        echo  "<img src='img/seisouro.png' width='100'>";
        elseif ($h3 == 7 && $naipe == 1)
        echo  "<img src='img/seteouro.jpg' width='100'>";
        elseif ($h3 == 8 && $naipe == 1)
        echo  "<img src='img/oitoouro.jpg' width='100'>";
        elseif ($h3 == 9 && $naipe == 1)
        echo  "<img src='img/noveouro.png' width='100'>";
        elseif ($h3 == 10 && $naipe == 1)
        echo  "<img src='img/dezouro.png' width='100'>";
        elseif ($h3 == 11 && $naipe == 1)
        echo  "<img src='img/onzeouro.jpg' width='100'>";
        elseif ($h3 == 12 && $naipe == 1)
        echo  "<img src='img/dozeouro.jpg' width='100'>";
        elseif ($h3 == 13 && $naipe == 1)
        echo  "<img src='img/trezeouro.jpg' width='100'>";

        elseif ($h3 == 1 && $naipe == 2)
        echo "<img src='img/ascopas.jpg' width='100'>";
        elseif ($h3 == 2 && $naipe == 2)
        echo  "<img src='img/doiscopas.png' width='100'>";
        elseif ($h3 == 3 && $naipe == 2)
        echo  "<img src='img/trescopas.png' width='100'>";
        elseif ($h3 == 4 && $naipe == 2)
        echo  "<img src='img/quatrocopas.png' width='100'>";
        elseif ($h3 == 5 && $naipe == 2)
        echo  "<img src='img/cincocopas.png' width='100'>";
        elseif ($h3 == 6 && $naipe == 2)
        echo  "<img src='img/seiscopas.png' width='100'>";
        elseif ($h3 == 7 && $naipe == 2)
        echo  "<img src='img/setecopas.png' width='100'>";
        elseif ($h3 == 8 && $naipe == 2)
        echo  "<img src='img/oitocopas.png' width='100'>";
        elseif ($h3 == 9 && $naipe == 2)
        echo  "<img src='img/novecopas.png' width='100'>";
        elseif ($h3 == 10 && $naipe == 2)
        echo  "<img src='img/dezcopas.png' width='100'>";
        elseif ($h3 == 11 && $naipe == 2)
        echo  "<img src='img/onzecopas.png' width='100'>";
        elseif ($h3 == 12 && $naipe == 2)
        echo  "<img src='img/dozecopas.png' width='100'>";
        elseif ($h3 == 13 && $naipe == 2)
        echo  "<img src='img/trezecopas.png' width='100'>";

        elseif ($h3 == 1 && $naipe == 3)
        echo "<img src='img/aspaus.png' width='100'>";
        elseif ($h3 == 2 && $naipe == 3)
        echo  "<img src='img/doispaus.png' width='100'>";
        elseif ($h3 == 3 && $naipe == 3)
        echo  "<img src='img/trespaus.png' width='100'>";
        elseif ($h3 == 4 && $naipe == 3)
        echo  "<img src='img/quatropaus.png' width='100'>";
        elseif ($h3 == 5 && $naipe == 3)
        echo  "<img src='img/cincopaus.png' width='100'>";
        elseif ($h3 == 6 && $naipe == 3)
        echo  "<img src='img/seispaus.png' width='100'>";
        elseif ($h3 == 7 && $naipe == 3)
        echo  "<img src='img/setepaus.png' width='100'>";
        elseif ($h3 == 8 && $naipe == 3)
        echo  "<img src='img/oitopaus.png' width='100'>";
        elseif ($h3 == 9 && $naipe == 3)
        echo  "<img src='img/novepaus.png' width='100'>";
        elseif ($h3 == 10 && $naipe == 3)
        echo  "<img src='img/dezpaus.png' width='100'>";
        elseif ($h3 == 11 && $naipe == 3)
        echo  "<img src='img/onzepaus.png' width='100'>";
        elseif ($h3 == 12 && $naipe == 3)
        echo  "<img src='img/dozepaus.png' width='100'>";
        elseif ($h3 == 13 && $naipe == 3)
        echo  "<img src='img/trezepaus.png' width='100'>";

        elseif ($h3 == 1 && $naipe == 4)
        echo "<img src='img/asespadas.png' width='100'>";
        elseif ($h3 == 2 && $naipe == 4)
        echo  "<img src='img/doisespadas.png' width='100'>";
        elseif ($h3 == 3 && $naipe == 4)
        echo  "<img src='img/tresespadas.png' width='100'>";
        elseif ($h3 == 4 && $naipe == 4)
        echo  "<img src='img/quatroespadas.png' width='100'>";
        elseif ($h3 == 5 && $naipe == 4)
        echo  "<img src='img/cincoespadas.png' width='100'>";
        elseif ($h3 == 6 && $naipe == 4)
        echo  "<img src='img/seisespadas.png' width='100'>";
        elseif ($h3 == 7 && $naipe == 4)
        echo  "<img src='img/seteespadas.png' width='100'>";
        elseif ($h3 == 8 && $naipe == 4)
        echo  "<img src='img/oitoespadas.png' width='100'>";
        elseif ($h3 == 9 && $naipe == 4)
        echo  "<img src='img/noveespadas.png' width='100'>";
        elseif ($h3 == 10 && $naipe == 4)
        echo  "<img src='img/dezespadas.png' width='100'>";
        elseif ($h3 == 11 && $naipe == 4)
        echo  "<img src='img/onzeespadas.png' width='100'>";
        elseif ($h3 == 12 && $naipe == 4)
        echo  "<img src='img/dozeespadas.png' width='100'>";
        elseif ($h3 == 13 && $naipe == 4)
        echo  "<img src='img/trezeespadas.png' width='100'>";
        $h4 = isset($_POST['h4']) ? $_POST['h4'] : 0;
        if ($h4 == 1 && $naipe == 1)
        echo "<img src='img/asouro.png' width='100'>";
        elseif ($h4 == 2 && $naipe == 1)
        echo  "<img src='img/doisouro.png' width='100'>";
        elseif ($h4 == 3 && $naipe == 1)
        echo  "<img src='img/tresouro.png' width='100'>";
        elseif ($h4 == 4 && $naipe == 1)
        echo  "<img src='img/quatroouro.png' width='100'>";
        elseif ($h4 == 5 && $naipe == 1)
        echo  "<img src='img/cincoouro.png' width='100'>";
        elseif ($h4 == 6 && $naipe == 1)
        echo  "<img src='img/seisouro.png' width='100'>";
        elseif ($h4 == 7 && $naipe == 1)
        echo  "<img src='img/seteouro.jpg' width='100'>";
        elseif ($h4 == 8 && $naipe == 1)
        echo  "<img src='img/oitoouro.jpg' width='100'>";
        elseif ($h4 == 9 && $naipe == 1)
        echo  "<img src='img/noveouro.png' width='100'>";
        elseif ($h4 == 10 && $naipe == 1)
        echo  "<img src='img/dezouro.png' width='100'>";
        elseif ($h4 == 11 && $naipe == 1)
        echo  "<img src='img/onzeouro.jpg' width='100'>";
        elseif ($h4 == 12 && $naipe == 1)
        echo  "<img src='img/dozeouro.jpg' width='100'>";
        elseif ($h4 == 13 && $naipe == 1)
        echo  "<img src='img/trezeouro.jpg' width='100'>";

        elseif ($h4 == 1 && $naipe == 2)
        echo "<img src='img/ascopas.jpg' width='100'>";
        elseif ($h4 == 2 && $naipe == 2)
        echo  "<img src='img/doiscopas.png' width='100'>";
        elseif ($h4 == 3 && $naipe == 2)
        echo  "<img src='img/trescopas.png' width='100'>";
        elseif ($h4 == 4 && $naipe == 2)
        echo  "<img src='img/quatrocopas.png' width='100'>";
        elseif ($h4 == 5 && $naipe == 2)
        echo  "<img src='img/cincocopas.png' width='100'>";
        elseif ($h4 == 6 && $naipe == 2)
        echo  "<img src='img/seiscopas.png' width='100'>";
        elseif ($h4 == 7 && $naipe == 2)
        echo  "<img src='img/setecopas.png' width='100'>";
        elseif ($h4 == 8 && $naipe == 2)
        echo  "<img src='img/oitocopas.png' width='100'>";
        elseif ($h4 == 9 && $naipe == 2)
        echo  "<img src='img/novecopas.png' width='100'>";
        elseif ($h4 == 10 && $naipe == 2)
        echo  "<img src='img/dezcopas.png' width='100'>";
        elseif ($h4 == 11 && $naipe == 2)
        echo  "<img src='img/onzecopas.png' width='100'>";
        elseif ($h4 == 12 && $naipe == 2)
        echo  "<img src='img/dozecopas.png' width='100'>";
        elseif ($h4 == 13 && $naipe == 2)
        echo  "<img src='img/trezecopas.png' width='100'>";

        elseif ($h4 == 1 && $naipe == 3)
        echo "<img src='img/aspaus.png' width='100'>";
        elseif ($h4 == 2 && $naipe == 3)
        echo  "<img src='img/doispaus.png' width='100'>";
        elseif ($h4 == 3 && $naipe == 3)
        echo  "<img src='img/trespaus.png' width='100'>";
        elseif ($h4 == 4 && $naipe == 3)
        echo  "<img src='img/quatropaus.png' width='100'>";
        elseif ($h4 == 5 && $naipe == 3)
        echo  "<img src='img/cincopaus.png' width='100'>";
        elseif ($h4 == 6 && $naipe == 3)
        echo  "<img src='img/seispaus.png' width='100'>";
        elseif ($h4 == 7 && $naipe == 3)
        echo  "<img src='img/setepaus.png' width='100'>";
        elseif ($h4 == 8 && $naipe == 3)
        echo  "<img src='img/oitopaus.png' width='100'>";
        elseif ($h4 == 9 && $naipe == 3)
        echo  "<img src='img/novepaus.png' width='100'>";
        elseif ($h4 == 10 && $naipe == 3)
        echo  "<img src='img/dezpaus.png' width='100'>";
        elseif ($h4 == 11 && $naipe == 3)
        echo  "<img src='img/onzepaus.png' width='100'>";
        elseif ($h4 == 12 && $naipe == 3)
        echo  "<img src='img/dozepaus.png' width='100'>";
        elseif ($h4 == 13 && $naipe == 3)
        echo  "<img src='img/trezepaus.png' width='100'>";

        elseif ($h4 == 1 && $naipe == 4)
        echo "<img src='img/asespadas.png' width='100'>";
        elseif ($h4 == 2 && $naipe == 4)
        echo  "<img src='img/doisespadas.png' width='100'>";
        elseif ($h4 == 3 && $naipe == 4)
        echo  "<img src='img/tresespadas.png' width='100'>";
        elseif ($h4 == 4 && $naipe == 4)
        echo  "<img src='img/quatroespadas.png' width='100'>";
        elseif ($h4 == 5 && $naipe == 4)
        echo  "<img src='img/cincoespadas.png' width='100'>";
        elseif ($h4 == 6 && $naipe == 4)
        echo  "<img src='img/seisespadas.png' width='100'>";
        elseif ($h4 == 7 && $naipe == 4)
        echo  "<img src='img/seteespadas.png' width='100'>";
        elseif ($h4 == 8 && $naipe == 4)
        echo  "<img src='img/oitoespadas.png' width='100'>";
        elseif ($h4 == 9 && $naipe == 4)
        echo  "<img src='img/noveespadas.png' width='100'>";
        elseif ($h4 == 10 && $naipe == 4)
        echo  "<img src='img/dezespadas.png' width='100'>";
        elseif ($h4 == 11 && $naipe == 4)
        echo  "<img src='img/onzeespadas.png' width='100'>";
        elseif ($h4 == 12 && $naipe == 4)
        echo  "<img src='img/dozeespadas.png' width='100'>";
        elseif ($h4 == 13 && $naipe == 4)
        echo  "<img src='img/trezeespadas.png' width='100'>";
        $h5 = isset($_POST['h5']) ? $_POST['h5'] : 0;
        if ($h5 == 1 && $naipe == 1)
        echo "<img src='img/asouro.png' width='100'>";
        elseif ($h5 == 2 && $naipe == 1)
        echo  "<img src='img/doisouro.png' width='100'>";
        elseif ($h5 == 3 && $naipe == 1)
        echo  "<img src='img/tresouro.png' width='100'>";
        elseif ($h5 == 4 && $naipe == 1)
        echo  "<img src='img/quatroouro.png' width='100'>";
        elseif ($h5 == 5 && $naipe == 1)
        echo  "<img src='img/cincoouro.png' width='100'>";
        elseif ($h5 == 6 && $naipe == 1)
        echo  "<img src='img/seisouro.png' width='100'>";
        elseif ($h5 == 7 && $naipe == 1)
        echo  "<img src='img/seteouro.jpg' width='100'>";
        elseif ($h5 == 8 && $naipe == 1)
        echo  "<img src='img/oitoouro.jpg' width='100'>";
        elseif ($h5 == 9 && $naipe == 1)
        echo  "<img src='img/noveouro.png' width='100'>";
        elseif ($h5 == 10 && $naipe == 1)
        echo  "<img src='img/dezouro.png' width='100'>";
        elseif ($h5 == 11 && $naipe == 1)
        echo  "<img src='img/onzeouro.jpg' width='100'>";
        elseif ($h5 == 12 && $naipe == 1)
        echo  "<img src='img/dozeouro.jpg' width='100'>";
        elseif ($h5 == 13 && $naipe == 1)
        echo  "<img src='img/trezeouro.jpg' width='100'>";

        elseif ($h5 == 1 && $naipe == 2)
        echo "<img src='img/ascopas.jpg' width='100'>";
        elseif ($h5 == 2 && $naipe == 2)
        echo  "<img src='img/doiscopas.png' width='100'>";
        elseif ($h5 == 3 && $naipe == 2)
        echo  "<img src='img/trescopas.png' width='100'>";
        elseif ($h5 == 4 && $naipe == 2)
        echo  "<img src='img/quatrocopas.png' width='100'>";
        elseif ($h5 == 5 && $naipe == 2)
        echo  "<img src='img/cincocopas.png' width='100'>";
        elseif ($h5 == 6 && $naipe == 2)
        echo  "<img src='img/seiscopas.png' width='100'>";
        elseif ($h5 == 7 && $naipe == 2)
        echo  "<img src='img/setecopas.png' width='100'>";
        elseif ($h5 == 8 && $naipe == 2)
        echo  "<img src='img/oitocopas.png' width='100'>";
        elseif ($h5 == 9 && $naipe == 2)
        echo  "<img src='img/novecopas.png' width='100'>";
        elseif ($h5 == 10 && $naipe == 2)
        echo  "<img src='img/dezcopas.png' width='100'>";
        elseif ($h5 == 11 && $naipe == 2)
        echo  "<img src='img/onzecopas.png' width='100'>";
        elseif ($h5 == 12 && $naipe == 2)
        echo  "<img src='img/dozecopas.png' width='100'>";
        elseif ($h5 == 13 && $naipe == 2)
        echo  "<img src='img/trezecopas.png' width='100'>";

        elseif ($h5 == 1 && $naipe == 3)
        echo "<img src='img/aspaus.png' width='100'>";
        elseif ($h5 == 2 && $naipe == 3)
        echo  "<img src='img/doispaus.png' width='100'>";
        elseif ($h5 == 3 && $naipe == 3)
        echo  "<img src='img/trespaus.png' width='100'>";
        elseif ($h5 == 4 && $naipe == 3)
        echo  "<img src='img/quatropaus.png' width='100'>";
        elseif ($h5 == 5 && $naipe == 3)
        echo  "<img src='img/cincopaus.png' width='100'>";
        elseif ($h5 == 6 && $naipe == 3)
        echo  "<img src='img/seispaus.png' width='100'>";
        elseif ($h5 == 7 && $naipe == 3)
        echo  "<img src='img/setepaus.png' width='100'>";
        elseif ($h5 == 8 && $naipe == 3)
        echo  "<img src='img/oitopaus.png' width='100'>";
        elseif ($h5 == 9 && $naipe == 3)
        echo  "<img src='img/novepaus.png' width='100'>";
        elseif ($h5 == 10 && $naipe == 3)
        echo  "<img src='img/dezpaus.png' width='100'>";
        elseif ($h5 == 11 && $naipe == 3)
        echo  "<img src='img/onzepaus.png' width='100'>";
        elseif ($h5 == 12 && $naipe == 3)
        echo  "<img src='img/dozepaus.png' width='100'>";
        elseif ($h5 == 13 && $naipe == 3)
        echo  "<img src='img/trezepaus.png' width='100'>";

        elseif ($h5 == 1 && $naipe == 4)
        echo "<img src='img/asespadas.png' width='100'>";
        elseif ($h5 == 2 && $naipe == 4)
        echo  "<img src='img/doisespadas.png' width='100'>";
        elseif ($h5 == 3 && $naipe == 4)
        echo  "<img src='img/tresespadas.png' width='100'>";
        elseif ($h5 == 4 && $naipe == 4)
        echo  "<img src='img/quatroespadas.png' width='100'>";
        elseif ($h5 == 5 && $naipe == 4)
        echo  "<img src='img/cincoespadas.png' width='100'>";
        elseif ($h5 == 6 && $naipe == 4)
        echo  "<img src='img/seisespadas.png' width='100'>";
        elseif ($h5 == 7 && $naipe == 4)
        echo  "<img src='img/seteespadas.png' width='100'>";
        elseif ($h5 == 8 && $naipe == 4)
        echo  "<img src='img/oitoespadas.png' width='100'>";
        elseif ($h5 == 9 && $naipe == 4)
        echo  "<img src='img/noveespadas.png' width='100'>";
        elseif ($h5 == 10 && $naipe == 4)
        echo  "<img src='img/dezespadas.png' width='100'>";
        elseif ($h5 == 11 && $naipe == 4)
        echo  "<img src='img/onzeespadas.png' width='100'>";
        elseif ($h5 == 12 && $naipe == 4)
        echo  "<img src='img/dozeespadas.png' width='100'>";
        elseif ($h5 == 13 && $naipe == 4)
        echo  "<img src='img/trezeespadas.png' width='100'>";

        $h6 = isset($_POST['h6']) ? $_POST['h6'] : 0;
        if ($h6 == 1 && $naipe == 1)
        echo "<img src='img/asouro.png' width='100'>";
        elseif ($h6 == 2 && $naipe == 1)
        echo  "<img src='img/doisouro.png' width='100'>";
        elseif ($h6 == 3 && $naipe == 1)
        echo  "<img src='img/tresouro.png' width='100'>";
        elseif ($h6 == 4 && $naipe == 1)
        echo  "<img src='img/quatroouro.png' width='100'>";
        elseif ($h6 == 5 && $naipe == 1)
        echo  "<img src='img/cincoouro.png' width='100'>";
        elseif ($h6 == 6 && $naipe == 1)
        echo  "<img src='img/seisouro.png' width='100'>";
        elseif ($h6 == 7 && $naipe == 1)
        echo  "<img src='img/seteouro.jpg' width='100'>";
        elseif ($h6 == 8 && $naipe == 1)
        echo  "<img src='img/oitoouro.jpg' width='100'>";
        elseif ($h6 == 9 && $naipe == 1)
        echo  "<img src='img/noveouro.png' width='100'>";
        elseif ($h6 == 10 && $naipe == 1)
        echo  "<img src='img/dezouro.png' width='100'>";
        elseif ($h6 == 11 && $naipe == 1)
        echo  "<img src='img/onzeouro.jpg' width='100'>";
        elseif ($h6 == 12 && $naipe == 1)
        echo  "<img src='img/dozeouro.jpg' width='100'>";
        elseif ($h6 == 13 && $naipe == 1)
        echo  "<img src='img/trezeouro.jpg' width='100'>";

        elseif ($h6 == 1 && $naipe == 2)
        echo "<img src='img/ascopas.jpg' width='100'>";
        elseif ($h6 == 2 && $naipe == 2)
        echo  "<img src='img/doiscopas.png' width='100'>";
        elseif ($h6 == 3 && $naipe == 2)
        echo  "<img src='img/trescopas.png' width='100'>";
        elseif ($h6 == 4 && $naipe == 2)
        echo  "<img src='img/quatrocopas.png' width='100'>";
        elseif ($h6 == 5 && $naipe == 2)
        echo  "<img src='img/cincocopas.png' width='100'>";
        elseif ($h6 == 6 && $naipe == 2)
        echo  "<img src='img/seiscopas.png' width='100'>";
        elseif ($h6 == 7 && $naipe == 2)
        echo  "<img src='img/setecopas.png' width='100'>";
        elseif ($h6 == 8 && $naipe == 2)
        echo  "<img src='img/oitocopas.png' width='100'>";
        elseif ($h6 == 9 && $naipe == 2)
        echo  "<img src='img/novecopas.png' width='100'>";
        elseif ($h6 == 10 && $naipe == 2)
        echo  "<img src='img/dezcopas.png' width='100'>";
        elseif ($h6 == 11 && $naipe == 2)
        echo  "<img src='img/onzecopas.png' width='100'>";
        elseif ($h6 == 12 && $naipe == 2)
        echo  "<img src='img/dozecopas.png' width='100'>";
        elseif ($h6 == 13 && $naipe == 2)
        echo  "<img src='img/trezecopas.png' width='100'>";

        elseif ($h6 == 1 && $naipe == 3)
        echo "<img src='img/aspaus.png' width='100'>";
        elseif ($h6 == 2 && $naipe == 3)
        echo  "<img src='img/doispaus.png' width='100'>";
        elseif ($h6 == 3 && $naipe == 3)
        echo  "<img src='img/trespaus.png' width='100'>";
        elseif ($h6 == 4 && $naipe == 3)
        echo  "<img src='img/quatropaus.png' width='100'>";
        elseif ($h6 == 5 && $naipe == 3)
        echo  "<img src='img/cincopaus.png' width='100'>";
        elseif ($h6 == 6 && $naipe == 3)
        echo  "<img src='img/seispaus.png' width='100'>";
        elseif ($h6 == 7 && $naipe == 3)
        echo  "<img src='img/setepaus.png' width='100'>";
        elseif ($h6 == 8 && $naipe == 3)
        echo  "<img src='img/oitopaus.png' width='100'>";
        elseif ($h6 == 9 && $naipe == 3)
        echo  "<img src='img/novepaus.png' width='100'>";
        elseif ($h6 == 10 && $naipe == 3)
        echo  "<img src='img/dezpaus.png' width='100'>";
        elseif ($h6 == 11 && $naipe == 3)
        echo  "<img src='img/onzepaus.png' width='100'>";
        elseif ($h6 == 12 && $naipe == 3)
        echo  "<img src='img/dozepaus.png' width='100'>";
        elseif ($h6 == 13 && $naipe == 3)
        echo  "<img src='img/trezepaus.png' width='100'>";

        elseif ($h6 == 1 && $naipe == 4)
        echo "<img src='img/asespadas.png' width='100'>";
        elseif ($h6 == 2 && $naipe == 4)
        echo  "<img src='img/doisespadas.png' width='100'>";
        elseif ($h6 == 3 && $naipe == 4)
        echo  "<img src='img/tresespadas.png' width='100'>";
        elseif ($h6 == 4 && $naipe == 4)
        echo  "<img src='img/quatroespadas.png' width='100'>";
        elseif ($h6 == 5 && $naipe == 4)
        echo  "<img src='img/cincoespadas.png' width='100'>";
        elseif ($h6 == 6 && $naipe == 4)
        echo  "<img src='img/seisespadas.png' width='100'>";
        elseif ($h6 == 7 && $naipe == 4)
        echo  "<img src='img/seteespadas.png' width='100'>";
        elseif ($h6 == 8 && $naipe == 4)
        echo  "<img src='img/oitoespadas.png' width='100'>";
        elseif ($h6 == 9 && $naipe == 4)
        echo  "<img src='img/noveespadas.png' width='100'>";
        elseif ($h6 == 10 && $naipe == 4)
        echo  "<img src='img/dezespadas.png' width='100'>";
        elseif ($h6 == 11 && $naipe == 4)
        echo  "<img src='img/onzeespadas.png' width='100'>";
        elseif ($h6 == 12 && $naipe == 4)
        echo  "<img src='img/dozeespadas.png' width='100'>";
        elseif ($h6 == 13 && $naipe == 4)
        echo  "<img src='img/trezeespadas.png' width='100'>";
        ?>

        <br>
        <?php

        $resultadoj = $h1 + $h2 + $h3 + $h4 + $h5 + $h6;
          echo "<hr> <h3> O resultado da soma dos valores é: $resultadoj </h3> <hr>"; 

          echo "<h2> Computador: <h2>";

          $pc1 = rand(1,13);
          if (isset($_SESSION["a$pc1"])){
          while (isset($_SESSION["a$pc1"])){
          $pc1 = rand(1,13);
          }
          }else{}
          $_SESSION["a$pc1"] = $pc1;
          if ($pc1 == 1 && $naipe == 2)
        echo "<img src='img/asouro.png' width='100'>";
        elseif ($pc1 == 2 && $naipe == 2)
        echo  "<img src='img/doisouro.png' width='100'>";
        elseif ($pc1 == 3 && $naipe == 2)
        echo  "<img src='img/tresouro.png' width='100'>";
        elseif ($pc1 == 4 && $naipe == 2)
        echo  "<img src='img/quatroouro.png' width='100'>";
        elseif ($pc1 == 5 && $naipe == 2)
        echo  "<img src='img/cincoouro.png' width='100'>";
        elseif ($pc1 == 6 && $naipe == 2)
        echo  "<img src='img/seisouro.png' width='100'>";
        elseif ($pc1 == 7 && $naipe == 2)
        echo  "<img src='img/seteouro.jpg' width='100'>";
        elseif ($pc1 == 8 && $naipe == 2)
        echo  "<img src='img/oitoouro.jpg' width='100'>";
        elseif ($pc1 == 9 && $naipe == 2)
        echo  "<img src='img/noveouro.png' width='100'>";
        elseif ($pc1 == 10 && $naipe == 2)
        echo  "<img src='img/dezouro.png' width='100'>";
        elseif ($pc1 == 11 && $naipe == 2)
        echo  "<img src='img/onzeouro.jpg' width='100'>";
        elseif ($pc1 == 12 && $naipe == 2)
        echo  "<img src='img/dozeouro.jpg' width='100'>";
        elseif ($pc1 == 13 && $naipe == 2)
        echo  "<img src='img/trezeouro.jpg' width='100'>";

        elseif ($pc1 == 1 && $naipe == 1)
        echo "<img src='img/ascopas.jpg' width='100'>";
        elseif ($pc1 == 2 && $naipe == 1)
        echo  "<img src='img/doiscopas.png' width='100'>";
        elseif ($pc1 == 3 && $naipe == 1)
        echo  "<img src='img/trescopas.png' width='100'>";
        elseif ($pc1 == 4 && $naipe == 1)
        echo  "<img src='img/quatrocopas.png' width='100'>";
        elseif ($pc1 == 5 && $naipe == 1)
        echo  "<img src='img/cincocopas.png' width='100'>";
        elseif ($pc1 == 6 && $naipe == 1)
        echo  "<img src='img/seiscopas.png' width='100'>";
        elseif ($pc1 == 7 && $naipe == 1)
        echo  "<img src='img/setecopas.png' width='100'>";
        elseif ($pc1 == 8 && $naipe == 1)
        echo  "<img src='img/oitocopas.png' width='100'>";
        elseif ($pc1 == 9 && $naipe == 1)
        echo  "<img src='img/novecopas.png' width='100'>";
        elseif ($pc1 == 10 && $naipe == 1)
        echo  "<img src='img/dezcopas.png' width='100'>";
        elseif ($pc1 == 11 && $naipe == 1)
        echo  "<img src='img/onzecopas.png' width='100'>";
        elseif ($pc1 == 12 && $naipe == 1)
        echo  "<img src='img/dozecopas.png' width='100'>";
        elseif ($pc1 == 13 && $naipe == 1)
        echo  "<img src='img/trezecopas.png' width='100'>";

        elseif ($pc1 == 1 && $naipe == 4)
        echo "<img src='img/aspaus.png' width='100'>";
        elseif ($pc1 == 2 && $naipe == 4)
        echo  "<img src='img/doispaus.png' width='100'>";
        elseif ($pc1 == 3 && $naipe == 4)
        echo  "<img src='img/trespaus.png' width='100'>";
        elseif ($pc1 == 4 && $naipe == 4)
        echo  "<img src='img/quatropaus.png' width='100'>";
        elseif ($pc1 == 5 && $naipe == 4)
        echo  "<img src='img/cincopaus.png' width='100'>";
        elseif ($pc1 == 6 && $naipe == 4)
        echo  "<img src='img/seispaus.png' width='100'>";
        elseif ($pc1 == 7 && $naipe == 4)
        echo  "<img src='img/setepaus.png' width='100'>";
        elseif ($pc1 == 8 && $naipe == 4)
        echo  "<img src='img/oitopaus.png' width='100'>";
        elseif ($pc1 == 9 && $naipe == 4)
        echo  "<img src='img/novepaus.png' width='100'>";
        elseif ($pc1 == 10 && $naipe == 4)
        echo  "<img src='img/dezpaus.png' width='100'>";
        elseif ($pc1 == 11 && $naipe == 4)
        echo  "<img src='img/onzepaus.png' width='100'>";
        elseif ($pc1 == 12 && $naipe == 4)
        echo  "<img src='img/dozepaus.png' width='100'>";
        elseif ($pc1 == 13 && $naipe == 4)
        echo  "<img src='img/trezepaus.png' width='100'>";

        elseif ($pc1 == 1 && $naipe == 3)
        echo "<img src='img/asespadas.png' width='100'>";
        elseif ($pc1 == 2 && $naipe == 3)
        echo  "<img src='img/doisespadas.png' width='100'>";
        elseif ($pc1 == 3 && $naipe == 3)
        echo  "<img src='img/tresespadas.png' width='100'>";
        elseif ($pc1 == 4 && $naipe == 3)
        echo  "<img src='img/quatroespadas.png' width='100'>";
        elseif ($pc1 == 5 && $naipe == 3)
        echo  "<img src='img/cincoespadas.png' width='100'>";
        elseif ($pc1 == 6 && $naipe == 3)
        echo  "<img src='img/seisespadas.png' width='100'>";
        elseif ($pc1 == 7 && $naipe == 3)
        echo  "<img src='img/seteespadas.png' width='100'>";
        elseif ($pc1 == 8 && $naipe == 3)
        echo  "<img src='img/oitoespadas.png' width='100'>";
        elseif ($pc1 == 9 && $naipe == 3)
        echo  "<img src='img/noveespadas.png' width='100'>";
        elseif ($pc1 == 10 && $naipe == 3)
        echo  "<img src='img/dezespadas.png' width='100'>";
        elseif ($pc1 == 11 && $naipe == 3)
        echo  "<img src='img/onzeespadas.png' width='100'>";
        elseif ($pc1 == 12 && $naipe == 3)
        echo  "<img src='img/dozeespadas.png' width='100'>";
        elseif ($pc1 == 13 && $naipe == 3)
        echo  "<img src='img/trezeespadas.png' width='100'>";

          $pc2 = rand(1,13);
          if (isset($_SESSION["a$pc2"])){
          while (isset($_SESSION["a$pc2"])){
          $pc2 = rand(1,13);
          }
          }else{}
          $_SESSION["a$pc2"] = $pc2;
          if ($pc2 == 1 && $naipe == 2)
        echo "<img src='img/asouro.png' width='100'>";
        elseif ($pc2 == 2 && $naipe == 2)
        echo  "<img src='img/doisouro.png' width='100'>";
        elseif ($pc2 == 3 && $naipe == 2)
        echo  "<img src='img/tresouro.png' width='100'>";
        elseif ($pc2 == 4 && $naipe == 2)
        echo  "<img src='img/quatroouro.png' width='100'>";
        elseif ($pc2 == 5 && $naipe == 2)
        echo  "<img src='img/cincoouro.png' width='100'>";
        elseif ($pc2 == 6 && $naipe == 2)
        echo  "<img src='img/seisouro.png' width='100'>";
        elseif ($pc2 == 7 && $naipe == 2)
        echo  "<img src='img/seteouro.jpg' width='100'>";
        elseif ($pc2 == 8 && $naipe == 2)
        echo  "<img src='img/oitoouro.jpg' width='100'>";
        elseif ($pc2 == 9 && $naipe == 2)
        echo  "<img src='img/noveouro.png' width='100'>";
        elseif ($pc2 == 10 && $naipe == 2)
        echo  "<img src='img/dezouro.png' width='100'>";
        elseif ($pc2 == 11 && $naipe == 2)
        echo  "<img src='img/onzeouro.jpg' width='100'>";
        elseif ($pc2 == 12 && $naipe == 2)
        echo  "<img src='img/dozeouro.jpg' width='100'>";
        elseif ($pc2 == 13 && $naipe == 2)
        echo  "<img src='img/trezeouro.jpg' width='100'>";

        elseif ($pc2 == 1 && $naipe == 1)
        echo "<img src='img/ascopas.jpg' width='100'>";
        elseif ($pc2 == 2 && $naipe == 1)
        echo  "<img src='img/doiscopas.png' width='100'>";
        elseif ($pc2 == 3 && $naipe == 1)
        echo  "<img src='img/trescopas.png' width='100'>";
        elseif ($pc2 == 4 && $naipe == 1)
        echo  "<img src='img/quatrocopas.png' width='100'>";
        elseif ($pc2 == 5 && $naipe == 1)
        echo  "<img src='img/cincocopas.png' width='100'>";
        elseif ($pc2 == 6 && $naipe == 1)
        echo  "<img src='img/seiscopas.png' width='100'>";
        elseif ($pc2 == 7 && $naipe == 1)
        echo  "<img src='img/setecopas.png' width='100'>";
        elseif ($pc2 == 8 && $naipe == 1)
        echo  "<img src='img/oitocopas.png' width='100'>";
        elseif ($pc2 == 9 && $naipe == 1)
        echo  "<img src='img/novecopas.png' width='100'>";
        elseif ($pc2 == 10 && $naipe == 1)
        echo  "<img src='img/dezcopas.png' width='100'>";
        elseif ($pc2 == 11 && $naipe == 1)
        echo  "<img src='img/onzecopas.png' width='100'>";
        elseif ($pc2 == 12 && $naipe == 1)
        echo  "<img src='img/dozecopas.png' width='100'>";
        elseif ($pc2 == 13 && $naipe == 1)
        echo  "<img src='img/trezecopas.png' width='100'>";

        elseif ($pc2 == 1 && $naipe == 4)
        echo "<img src='img/aspaus.png' width='100'>";
        elseif ($pc2 == 2 && $naipe == 4)
        echo  "<img src='img/doispaus.png' width='100'>";
        elseif ($pc2 == 3 && $naipe == 4)
        echo  "<img src='img/trespaus.png' width='100'>";
        elseif ($pc2 == 4 && $naipe == 4)
        echo  "<img src='img/quatropaus.png' width='100'>";
        elseif ($pc2 == 5 && $naipe == 4)
        echo  "<img src='img/cincopaus.png' width='100'>";
        elseif ($pc2 == 6 && $naipe == 4)
        echo  "<img src='img/seispaus.png' width='100'>";
        elseif ($pc2 == 7 && $naipe == 4)
        echo  "<img src='img/setepaus.png' width='100'>";
        elseif ($pc2 == 8 && $naipe == 4)
        echo  "<img src='img/oitopaus.png' width='100'>";
        elseif ($pc2 == 9 && $naipe == 4)
        echo  "<img src='img/novepaus.png' width='100'>";
        elseif ($pc2 == 10 && $naipe == 4)
        echo  "<img src='img/dezpaus.png' width='100'>";
        elseif ($pc2 == 11 && $naipe == 4)
        echo  "<img src='img/onzepaus.png' width='100'>";
        elseif ($pc2 == 12 && $naipe == 4)
        echo  "<img src='img/dozepaus.png' width='100'>";
        elseif ($pc2 == 13 && $naipe == 4)
        echo  "<img src='img/trezepaus.png' width='100'>";

        elseif ($pc2 == 1 && $naipe == 3)
        echo "<img src='img/asespadas.png' width='100'>";
        elseif ($pc2 == 2 && $naipe == 3)
        echo  "<img src='img/doisespadas.png' width='100'>";
        elseif ($pc2 == 3 && $naipe == 3)
        echo  "<img src='img/tresespadas.png' width='100'>";
        elseif ($pc2 == 4 && $naipe == 3)
        echo  "<img src='img/quatroespadas.png' width='100'>";
        elseif ($pc2 == 5 && $naipe == 3)
        echo  "<img src='img/cincoespadas.png' width='100'>";
        elseif ($pc2 == 6 && $naipe == 3)
        echo  "<img src='img/seisespadas.png' width='100'>";
        elseif ($pc2 == 7 && $naipe == 3)
        echo  "<img src='img/seteespadas.png' width='100'>";
        elseif ($pc2 == 8 && $naipe == 3)
        echo  "<img src='img/oitoespadas.png' width='100'>";
        elseif ($pc2 == 9 && $naipe == 3)
        echo  "<img src='img/noveespadas.png' width='100'>";
        elseif ($pc2 == 10 && $naipe == 3)
        echo  "<img src='img/dezespadas.png' width='100'>";
        elseif ($pc2 == 11 && $naipe == 3)
        echo  "<img src='img/onzeespadas.png' width='100'>";
        elseif ($pc2 == 12 && $naipe == 3)
        echo  "<img src='img/dozeespadas.png' width='100'>";
        elseif ($pc2 == 13 && $naipe == 3)
        echo  "<img src='img/trezeespadas.png' width='100'>";

          $pc3 = rand(1,13);
          if (isset($_SESSION["a$pc3"])){
          while (isset($_SESSION["a$pc3"])){
          $pc3 = rand(1,13);
          }
          }else{}
          $_SESSION["a$pc3"] = $pc3;
          if ($pc3 == 1 && $naipe == 2)
        echo "<img src='img/asouro.png' width='100'>";
        elseif ($pc3 == 2 && $naipe == 2)
        echo  "<img src='img/doisouro.png' width='100'>";
        elseif ($pc3 == 3 && $naipe == 2)
        echo  "<img src='img/tresouro.png' width='100'>";
        elseif ($pc3 == 4 && $naipe == 2)
        echo  "<img src='img/quatroouro.png' width='100'>";
        elseif ($pc3 == 5 && $naipe == 2)
        echo  "<img src='img/cincoouro.png' width='100'>";
        elseif ($pc3 == 6 && $naipe == 2)
        echo  "<img src='img/seisouro.png' width='100'>";
        elseif ($pc3 == 7 && $naipe == 2)
        echo  "<img src='img/seteouro.jpg' width='100'>";
        elseif ($pc3 == 8 && $naipe == 2)
        echo  "<img src='img/oitoouro.jpg' width='100'>";
        elseif ($pc3 == 9 && $naipe == 2)
        echo  "<img src='img/noveouro.png' width='100'>";
        elseif ($pc3 == 10 && $naipe == 2)
        echo  "<img src='img/dezouro.png' width='100'>";
        elseif ($pc3 == 11 && $naipe == 2)
        echo  "<img src='img/onzeouro.jpg' width='100'>";
        elseif ($pc3 == 12 && $naipe == 2)
        echo  "<img src='img/dozeouro.jpg' width='100'>";
        elseif ($pc3 == 13 && $naipe == 2)
        echo  "<img src='img/trezeouro.jpg' width='100'>";

        elseif ($pc3 == 1 && $naipe == 1)
        echo "<img src='img/ascopas.jpg' width='100'>";
        elseif ($pc3 == 2 && $naipe == 1)
        echo  "<img src='img/doiscopas.png' width='100'>";
        elseif ($pc3 == 3 && $naipe == 1)
        echo  "<img src='img/trescopas.png' width='100'>";
        elseif ($pc3 == 4 && $naipe == 1)
        echo  "<img src='img/quatrocopas.png' width='100'>";
        elseif ($pc3 == 5 && $naipe == 1)
        echo  "<img src='img/cincocopas.png' width='100'>";
        elseif ($pc3 == 6 && $naipe == 1)
        echo  "<img src='img/seiscopas.png' width='100'>";
        elseif ($pc3 == 7 && $naipe == 1)
        echo  "<img src='img/setecopas.png' width='100'>";
        elseif ($pc3 == 8 && $naipe == 1)
        echo  "<img src='img/oitocopas.png' width='100'>";
        elseif ($pc3 == 9 && $naipe == 1)
        echo  "<img src='img/novecopas.png' width='100'>";
        elseif ($pc3 == 10 && $naipe == 1)
        echo  "<img src='img/dezcopas.png' width='100'>";
        elseif ($pc3 == 11 && $naipe == 1)
        echo  "<img src='img/onzecopas.png' width='100'>";
        elseif ($pc3 == 12 && $naipe == 1)
        echo  "<img src='img/dozecopas.png' width='100'>";
        elseif ($pc3 == 13 && $naipe == 1)
        echo  "<img src='img/trezecopas.png' width='100'>";

        elseif ($pc3 == 1 && $naipe == 4)
        echo "<img src='img/aspaus.png' width='100'>";
        elseif ($pc3 == 2 && $naipe == 4)
        echo  "<img src='img/doispaus.png' width='100'>";
        elseif ($pc3 == 3 && $naipe == 4)
        echo  "<img src='img/trespaus.png' width='100'>";
        elseif ($pc3 == 4 && $naipe == 4)
        echo  "<img src='img/quatropaus.png' width='100'>";
        elseif ($pc3 == 5 && $naipe == 4)
        echo  "<img src='img/cincopaus.png' width='100'>";
        elseif ($pc3 == 6 && $naipe == 4)
        echo  "<img src='img/seispaus.png' width='100'>";
        elseif ($pc3 == 7 && $naipe == 4)
        echo  "<img src='img/setepaus.png' width='100'>";
        elseif ($pc3 == 8 && $naipe == 4)
        echo  "<img src='img/oitopaus.png' width='100'>";
        elseif ($pc3 == 9 && $naipe == 4)
        echo  "<img src='img/novepaus.png' width='100'>";
        elseif ($pc3 == 10 && $naipe == 4)
        echo  "<img src='img/dezpaus.png' width='100'>";
        elseif ($pc3 == 11 && $naipe == 4)
        echo  "<img src='img/onzepaus.png' width='100'>";
        elseif ($pc3 == 12 && $naipe == 4)
        echo  "<img src='img/dozepaus.png' width='100'>";
        elseif ($pc3 == 13 && $naipe == 4)
        echo  "<img src='img/trezepaus.png' width='100'>";

        elseif ($pc3 == 1 && $naipe == 3)
        echo "<img src='img/asespadas.png' width='100'>";
        elseif ($pc3 == 2 && $naipe == 3)
        echo  "<img src='img/doisespadas.png' width='100'>";
        elseif ($pc3 == 3 && $naipe == 3)
        echo  "<img src='img/tresespadas.png' width='100'>";
        elseif ($pc3 == 4 && $naipe == 3)
        echo  "<img src='img/quatroespadas.png' width='100'>";
        elseif ($pc3 == 5 && $naipe == 3)
        echo  "<img src='img/cincoespadas.png' width='100'>";
        elseif ($pc3 == 6 && $naipe == 3)
        echo  "<img src='img/seisespadas.png' width='100'>";
        elseif ($pc3 == 7 && $naipe == 3)
        echo  "<img src='img/seteespadas.png' width='100'>";
        elseif ($pc3 == 8 && $naipe == 3)
        echo  "<img src='img/oitoespadas.png' width='100'>";
        elseif ($pc3 == 9 && $naipe == 3)
        echo  "<img src='img/noveespadas.png' width='100'>";
        elseif ($pc3 == 10 && $naipe == 3)
        echo  "<img src='img/dezespadas.png' width='100'>";
        elseif ($pc3 == 11 && $naipe == 3)
        echo  "<img src='img/onzeespadas.png' width='100'>";
        elseif ($pc3 == 12 && $naipe == 3)
        echo  "<img src='img/dozeespadas.png' width='100'>";
        elseif ($pc3 == 13 && $naipe == 3)
        echo  "<img src='img/trezeespadas.png' width='100'>";

          $pc4 = rand(1,13);
          if (isset($_SESSION["a$pc4"])){
          while (isset($_SESSION["a$pc4"])){
          $pc4 = rand(1,13);
          }
          }else{}
          $_SESSION["a$pc4"] = $pc4;
          if ($pc4 == 1 && $naipe == 2)
        echo "<img src='img/asouro.png' width='100'>";
        elseif ($pc4 == 2 && $naipe == 2)
        echo  "<img src='img/doisouro.png' width='100'>";
        elseif ($pc4 == 3 && $naipe == 2)
        echo  "<img src='img/tresouro.png' width='100'>";
        elseif ($pc4 == 4 && $naipe == 2)
        echo  "<img src='img/quatroouro.png' width='100'>";
        elseif ($pc4 == 5 && $naipe == 2)
        echo  "<img src='img/cincoouro.png' width='100'>";
        elseif ($pc4 == 6 && $naipe == 2)
        echo  "<img src='img/seisouro.png' width='100'>";
        elseif ($pc4 == 7 && $naipe == 2)
        echo  "<img src='img/seteouro.jpg' width='100'>";
        elseif ($pc4 == 8 && $naipe == 2)
        echo  "<img src='img/oitoouro.jpg' width='100'>";
        elseif ($pc4 == 9 && $naipe == 2)
        echo  "<img src='img/noveouro.png' width='100'>";
        elseif ($pc4 == 10 && $naipe == 2)
        echo  "<img src='img/dezouro.png' width='100'>";
        elseif ($pc4 == 11 && $naipe == 2)
        echo  "<img src='img/onzeouro.jpg' width='100'>";
        elseif ($pc4 == 12 && $naipe == 2)
        echo  "<img src='img/dozeouro.jpg' width='100'>";
        elseif ($pc4 == 13 && $naipe == 2)
        echo  "<img src='img/trezeouro.jpg' width='100'>";

        elseif ($pc4 == 1 && $naipe == 1)
        echo "<img src='img/ascopas.jpg' width='100'>";
        elseif ($pc4 == 2 && $naipe == 1)
        echo  "<img src='img/doiscopas.png' width='100'>";
        elseif ($pc4 == 3 && $naipe == 1)
        echo  "<img src='img/trescopas.png' width='100'>";
        elseif ($pc4 == 4 && $naipe == 1)
        echo  "<img src='img/quatrocopas.png' width='100'>";
        elseif ($pc4 == 5 && $naipe == 1)
        echo  "<img src='img/cincocopas.png' width='100'>";
        elseif ($pc4 == 6 && $naipe == 1)
        echo  "<img src='img/seiscopas.png' width='100'>";
        elseif ($pc4 == 7 && $naipe == 1)
        echo  "<img src='img/setecopas.png' width='100'>";
        elseif ($pc4 == 8 && $naipe == 1)
        echo  "<img src='img/oitocopas.png' width='100'>";
        elseif ($pc4 == 9 && $naipe == 1)
        echo  "<img src='img/novecopas.png' width='100'>";
        elseif ($pc4 == 10 && $naipe == 1)
        echo  "<img src='img/dezcopas.png' width='100'>";
        elseif ($pc4 == 11 && $naipe == 1)
        echo  "<img src='img/onzecopas.png' width='100'>";
        elseif ($pc4 == 12 && $naipe == 1)
        echo  "<img src='img/dozecopas.png' width='100'>";
        elseif ($pc4 == 13 && $naipe == 1)
        echo  "<img src='img/trezecopas.png' width='100'>";

        elseif ($pc4 == 1 && $naipe == 4)
        echo "<img src='img/aspaus.png' width='100'>";
        elseif ($pc4 == 2 && $naipe == 4)
        echo  "<img src='img/doispaus.png' width='100'>";
        elseif ($pc4 == 3 && $naipe == 4)
        echo  "<img src='img/trespaus.png' width='100'>";
        elseif ($pc4 == 4 && $naipe == 4)
        echo  "<img src='img/quatropaus.png' width='100'>";
        elseif ($pc4 == 5 && $naipe == 4)
        echo  "<img src='img/cincopaus.png' width='100'>";
        elseif ($pc4 == 6 && $naipe == 4)
        echo  "<img src='img/seispaus.png' width='100'>";
        elseif ($pc4 == 7 && $naipe == 4)
        echo  "<img src='img/setepaus.png' width='100'>";
        elseif ($pc4 == 8 && $naipe == 4)
        echo  "<img src='img/oitopaus.png' width='100'>";
        elseif ($pc4 == 9 && $naipe == 4)
        echo  "<img src='img/novepaus.png' width='100'>";
        elseif ($pc4 == 10 && $naipe == 4)
        echo  "<img src='img/dezpaus.png' width='100'>";
        elseif ($pc4 == 11 && $naipe == 4)
        echo  "<img src='img/onzepaus.png' width='100'>";
        elseif ($pc4 == 12 && $naipe == 4)
        echo  "<img src='img/dozepaus.png' width='100'>";
        elseif ($pc4 == 13 && $naipe == 4)
        echo  "<img src='img/trezepaus.png' width='100'>";

        elseif ($pc4 == 1 && $naipe == 3)
        echo "<img src='img/asespadas.png' width='100'>";
        elseif ($pc4 == 2 && $naipe == 3)
        echo  "<img src='img/doisespadas.png' width='100'>";
        elseif ($pc4 == 3 && $naipe == 3)
        echo  "<img src='img/tresespadas.png' width='100'>";
        elseif ($pc4 == 4 && $naipe == 3)
        echo  "<img src='img/quatroespadas.png' width='100'>";
        elseif ($pc4 == 5 && $naipe == 3)
        echo  "<img src='img/cincoespadas.png' width='100'>";
        elseif ($pc4 == 6 && $naipe == 3)
        echo  "<img src='img/seisespadas.png' width='100'>";
        elseif ($pc4 == 7 && $naipe == 3)
        echo  "<img src='img/seteespadas.png' width='100'>";
        elseif ($pc4 == 8 && $naipe == 3)
        echo  "<img src='img/oitoespadas.png' width='100'>";
        elseif ($pc4 == 9 && $naipe == 3)
        echo  "<img src='img/noveespadas.png' width='100'>";
        elseif ($pc4 == 10 && $naipe == 3)
        echo  "<img src='img/dezespadas.png' width='100'>";
        elseif ($pc4 == 11 && $naipe == 3)
        echo  "<img src='img/onzeespadas.png' width='100'>";
        elseif ($pc4 == 12 && $naipe == 3)
        echo  "<img src='img/dozeespadas.png' width='100'>";
        elseif ($pc4 == 13 && $naipe == 3)
        echo  "<img src='img/trezeespadas.png' width='100'>";

          $pc5 = rand(1,13);
          if (isset($_SESSION["a$pc5"])){
          while (isset($_SESSION["a$pc5"])){
          $pc5 = rand(1,13);
          }
          }else{}
          $_SESSION["a$pc5"] = $pc5;
          if ($pc5 == 1 && $naipe == 2)
        echo "<img src='img/asouro.png' width='100'>";
        elseif ($pc5 == 2 && $naipe == 2)
        echo  "<img src='img/doisouro.png' width='100'>";
        elseif ($pc5 == 3 && $naipe == 2)
        echo  "<img src='img/tresouro.png' width='100'>";
        elseif ($pc5 == 4 && $naipe == 2)
        echo  "<img src='img/quatroouro.png' width='100'>";
        elseif ($pc5 == 5 && $naipe == 2)
        echo  "<img src='img/cincoouro.png' width='100'>";
        elseif ($pc5 == 6 && $naipe == 2)
        echo  "<img src='img/seisouro.png' width='100'>";
        elseif ($pc5 == 7 && $naipe == 2)
        echo  "<img src='img/seteouro.jpg' width='100'>";
        elseif ($pc5 == 8 && $naipe == 2)
        echo  "<img src='img/oitoouro.jpg' width='100'>";
        elseif ($pc5 == 9 && $naipe == 2)
        echo  "<img src='img/noveouro.png' width='100'>";
        elseif ($pc5 == 10 && $naipe == 2)
        echo  "<img src='img/dezouro.png' width='100'>";
        elseif ($pc5 == 11 && $naipe == 2)
        echo  "<img src='img/onzeouro.jpg' width='100'>";
        elseif ($pc5 == 12 && $naipe == 2)
        echo  "<img src='img/dozeouro.jpg' width='100'>";
        elseif ($pc5 == 13 && $naipe == 2)
        echo  "<img src='img/trezeouro.jpg' width='100'>";

        elseif ($pc5 == 1 && $naipe == 1)
        echo "<img src='img/ascopas.jpg' width='100'>";
        elseif ($pc5 == 2 && $naipe == 1)
        echo  "<img src='img/doiscopas.png' width='100'>";
        elseif ($pc5 == 3 && $naipe == 1)
        echo  "<img src='img/trescopas.png' width='100'>";
        elseif ($pc5 == 4 && $naipe == 1)
        echo  "<img src='img/quatrocopas.png' width='100'>";
        elseif ($pc5 == 5 && $naipe == 1)
        echo  "<img src='img/cincocopas.png' width='100'>";
        elseif ($pc5 == 6 && $naipe == 1)
        echo  "<img src='img/seiscopas.png' width='100'>";
        elseif ($pc5 == 7 && $naipe == 1)
        echo  "<img src='img/setecopas.png' width='100'>";
        elseif ($pc5 == 8 && $naipe == 1)
        echo  "<img src='img/oitocopas.png' width='100'>";
        elseif ($pc5 == 9 && $naipe == 1)
        echo  "<img src='img/novecopas.png' width='100'>";
        elseif ($pc5 == 10 && $naipe == 1)
        echo  "<img src='img/dezcopas.png' width='100'>";
        elseif ($pc5 == 11 && $naipe == 1)
        echo  "<img src='img/onzecopas.png' width='100'>";
        elseif ($pc5 == 12 && $naipe == 1)
        echo  "<img src='img/dozecopas.png' width='100'>";
        elseif ($pc5 == 13 && $naipe == 1)
        echo  "<img src='img/trezecopas.png' width='100'>";

        elseif ($pc5 == 1 && $naipe == 4)
        echo "<img src='img/aspaus.png' width='100'>";
        elseif ($pc5 == 2 && $naipe == 4)
        echo  "<img src='img/doispaus.png' width='100'>";
        elseif ($pc5 == 3 && $naipe == 4)
        echo  "<img src='img/trespaus.png' width='100'>";
        elseif ($pc5 == 4 && $naipe == 4)
        echo  "<img src='img/quatropaus.png' width='100'>";
        elseif ($pc5 == 5 && $naipe == 4)
        echo  "<img src='img/cincopaus.png' width='100'>";
        elseif ($pc5 == 6 && $naipe == 4)
        echo  "<img src='img/seispaus.png' width='100'>";
        elseif ($pc5 == 7 && $naipe == 4)
        echo  "<img src='img/setepaus.png' width='100'>";
        elseif ($pc5 == 8 && $naipe == 4)
        echo  "<img src='img/oitopaus.png' width='100'>";
        elseif ($pc5 == 9 && $naipe == 4)
        echo  "<img src='img/novepaus.png' width='100'>";
        elseif ($pc5 == 10 && $naipe == 4)
        echo  "<img src='img/dezpaus.png' width='100'>";
        elseif ($pc5 == 11 && $naipe == 4)
        echo  "<img src='img/onzepaus.png' width='100'>";
        elseif ($pc5 == 12 && $naipe == 4)
        echo  "<img src='img/dozepaus.png' width='100'>";
        elseif ($pc5 == 13 && $naipe == 4)
        echo  "<img src='img/trezepaus.png' width='100'>";

        elseif ($pc5 == 1 && $naipe == 3)
        echo "<img src='img/asespadas.png' width='100'>";
        elseif ($pc5 == 2 && $naipe == 3)
        echo  "<img src='img/doisespadas.png' width='100'>";
        elseif ($pc5 == 3 && $naipe == 3)
        echo  "<img src='img/tresespadas.png' width='100'>";
        elseif ($pc5 == 4 && $naipe == 3)
        echo  "<img src='img/quatroespadas.png' width='100'>";
        elseif ($pc5 == 5 && $naipe == 3)
        echo  "<img src='img/cincoespadas.png' width='100'>";
        elseif ($pc5 == 6 && $naipe == 3)
        echo  "<img src='img/seisespadas.png' width='100'>";
        elseif ($pc5 == 7 && $naipe == 3)
        echo  "<img src='img/seteespadas.png' width='100'>";
        elseif ($pc5 == 8 && $naipe == 3)
        echo  "<img src='img/oitoespadas.png' width='100'>";
        elseif ($pc5 == 9 && $naipe == 3)
        echo  "<img src='img/noveespadas.png' width='100'>";
        elseif ($pc5 == 10 && $naipe == 3)
        echo  "<img src='img/dezespadas.png' width='100'>";
        elseif ($pc5 == 11 && $naipe == 3)
        echo  "<img src='img/onzeespadas.png' width='100'>";
        elseif ($pc5 == 12 && $naipe == 3)
        echo  "<img src='img/dozeespadas.png' width='100'>";
        elseif ($pc5 == 13 && $naipe == 3)
        echo  "<img src='img/trezeespadas.png' width='100'>";

          $pc6 = rand(1,13);
          if (isset($_SESSION["a$pc6"])){
          while (isset($_SESSION["a$pc6"])){
          $pc6 = rand(1,13);
          }
          }else{}
          $_SESSION["a$pc6"] = $pc6;
          if ($pc6 == 1 && $naipe == 2)
        echo "<img src='img/asouro.png' width='100'>";
        elseif ($pc6 == 2 && $naipe == 2)
        echo  "<img src='img/doisouro.png' width='100'>";
        elseif ($pc6 == 3 && $naipe == 2)
        echo  "<img src='img/tresouro.png' width='100'>";
        elseif ($pc6 == 4 && $naipe == 2)
        echo  "<img src='img/quatroouro.png' width='100'>";
        elseif ($pc6 == 5 && $naipe == 2)
        echo  "<img src='img/cincoouro.png' width='100'>";
        elseif ($pc6 == 6 && $naipe == 2)
        echo  "<img src='img/seisouro.png' width='100'>";
        elseif ($pc6 == 7 && $naipe == 2)
        echo  "<img src='img/seteouro.jpg' width='100'>";
        elseif ($pc6 == 8 && $naipe == 2)
        echo  "<img src='img/oitoouro.jpg' width='100'>";
        elseif ($pc6 == 9 && $naipe == 2)
        echo  "<img src='img/noveouro.png' width='100'>";
        elseif ($pc6 == 10 && $naipe == 2)
        echo  "<img src='img/dezouro.png' width='100'>";
        elseif ($pc6 == 11 && $naipe == 2)
        echo  "<img src='img/onzeouro.jpg' width='100'>";
        elseif ($pc6 == 12 && $naipe == 2)
        echo  "<img src='img/dozeouro.jpg' width='100'>";
        elseif ($pc6 == 13 && $naipe == 2)
        echo  "<img src='img/trezeouro.jpg' width='100'>";

        elseif ($pc6 == 1 && $naipe == 1)
        echo "<img src='img/ascopas.jpg' width='100'>";
        elseif ($pc6 == 2 && $naipe == 1)
        echo  "<img src='img/doiscopas.png' width='100'>";
        elseif ($pc6 == 3 && $naipe == 1)
        echo  "<img src='img/trescopas.png' width='100'>";
        elseif ($pc6 == 4 && $naipe == 1)
        echo  "<img src='img/quatrocopas.png' width='100'>";
        elseif ($pc6 == 5 && $naipe == 1)
        echo  "<img src='img/cincocopas.png' width='100'>";
        elseif ($pc6 == 6 && $naipe == 1)
        echo  "<img src='img/seiscopas.png' width='100'>";
        elseif ($pc6 == 7 && $naipe == 1)
        echo  "<img src='img/setecopas.png' width='100'>";
        elseif ($pc6 == 8 && $naipe == 1)
        echo  "<img src='img/oitocopas.png' width='100'>";
        elseif ($pc6 == 9 && $naipe == 1)
        echo  "<img src='img/novecopas.png' width='100'>";
        elseif ($pc6 == 10 && $naipe == 1)
        echo  "<img src='img/dezcopas.png' width='100'>";
        elseif ($pc6 == 11 && $naipe == 1)
        echo  "<img src='img/onzecopas.png' width='100'>";
        elseif ($pc6 == 12 && $naipe == 1)
        echo  "<img src='img/dozecopas.png' width='100'>";
        elseif ($pc6 == 13 && $naipe == 1)
        echo  "<img src='img/trezecopas.png' width='100'>";

        elseif ($pc6 == 1 && $naipe == 4)
        echo "<img src='img/aspaus.png' width='100'>";
        elseif ($pc6 == 2 && $naipe == 4)
        echo  "<img src='img/doispaus.png' width='100'>";
        elseif ($pc6 == 3 && $naipe == 4)
        echo  "<img src='img/trespaus.png' width='100'>";
        elseif ($pc6 == 4 && $naipe == 4)
        echo  "<img src='img/quatropaus.png' width='100'>";
        elseif ($pc6 == 5 && $naipe == 4)
        echo  "<img src='img/cincopaus.png' width='100'>";
        elseif ($pc6 == 6 && $naipe == 4)
        echo  "<img src='img/seispaus.png' width='100'>";
        elseif ($pc6 == 7 && $naipe == 4)
        echo  "<img src='img/setepaus.png' width='100'>";
        elseif ($pc6 == 8 && $naipe == 4)
        echo  "<img src='img/oitopaus.png' width='100'>";
        elseif ($pc6 == 9 && $naipe == 4)
        echo  "<img src='img/novepaus.png' width='100'>";
        elseif ($pc6 == 10 && $naipe == 4)
        echo  "<img src='img/dezpaus.png' width='100'>";
        elseif ($pc6 == 11 && $naipe == 4)
        echo  "<img src='img/onzepaus.png' width='100'>";
        elseif ($pc6 == 12 && $naipe == 4)
        echo  "<img src='img/dozepaus.png' width='100'>";
        elseif ($pc6 == 13 && $naipe == 4)
        echo  "<img src='img/trezepaus.png' width='100'>";

        elseif ($pc6 == 1 && $naipe == 3)
        echo "<img src='img/asespadas.png' width='100'>";
        elseif ($pc6 == 2 && $naipe == 3)
        echo  "<img src='img/doisespadas.png' width='100'>";
        elseif ($pc6 == 3 && $naipe == 3)
        echo  "<img src='img/tresespadas.png' width='100'>";
        elseif ($pc6 == 4 && $naipe == 3)
        echo  "<img src='img/quatroespadas.png' width='100'>";
        elseif ($pc6 == 5 && $naipe == 3)
        echo  "<img src='img/cincoespadas.png' width='100'>";
        elseif ($pc6 == 6 && $naipe == 3)
        echo  "<img src='img/seisespadas.png' width='100'>";
        elseif ($pc6 == 7 && $naipe == 3)
        echo  "<img src='img/seteespadas.png' width='100'>";
        elseif ($pc6 == 8 && $naipe == 3)
        echo  "<img src='img/oitoespadas.png' width='100'>";
        elseif ($pc6 == 9 && $naipe == 3)
        echo  "<img src='img/noveespadas.png' width='100'>";
        elseif ($pc6 == 10 && $naipe == 3)
        echo  "<img src='img/dezespadas.png' width='100'>";
        elseif ($pc6 == 11 && $naipe == 3)
        echo  "<img src='img/onzeespadas.png' width='100'>";
        elseif ($pc6 == 12 && $naipe == 3)
        echo  "<img src='img/dozeespadas.png' width='100'>";
        elseif ($pc6 == 13 && $naipe == 3)
        echo  "<img src='img/trezeespadas.png' width='100'>";

        $resultadoc = $pc1 + $pc2 + $pc3 + $pc4 + $pc5 + $pc6;
          echo "<hr> <h3> O resultado da soma dos valores é: $resultadoc </h3> <hr>";
      
          if($resultadoj > $resultadoc){
            echo "<h2>Usuário $nome Ganhou</h2>";
          } elseif($resultadoj < $resultadoc){
            echo "<h1>Computador Ganhou</h1>";
          } else {
            echo "<h3>Empate</h3>";
          }
        
      
    } elseif ($acao == 'sortear'){
      mostrarCartas($sorteio,$naipe);
    }
?>
<hr>
</center>
</body>
</html>