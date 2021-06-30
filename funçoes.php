<?php 

function sortear($cartas){
    $sorteio = array();
    for ($x = 0; $x < $cartas; $x++){
        $n = rand(1,13);
        if (isset($_SESSION["a$n"])){
            while (isset($_SESSION["a$n"])){
            $n = rand(1,13);
            }
            }else{}
            
            $_SESSION["a$n"] = $n;
        $sorteio[] = $n;
    }
    sort($sorteio);
    return $sorteio;   
}


function mostrarCartas($sorteio,$naipe){
    if ($naipe == 1 )
        echo "<h5>Ouros</h5>";
    elseif ($naipe == 2)
        echo "<h5>Copas</h5>";
    elseif ($naipe == 3)
        echo "<h5>Paus</h5>";
    elseif ($naipe == 4)
        echo "<h5>Espadas</h5>";
    echo "<table><tr>";
    foreach ($sorteio as $c){
        if ($c == 1 && $naipe == 1)
        echo "<img src='img/asouro.png' width='100'>";
        elseif ($c == 2 && $naipe == 1)
        echo  "<img src='img/doisouro.png' width='100'>";
        elseif ($c == 3 && $naipe == 1)
        echo  "<img src='img/tresouro.png' width='100'>";
        elseif ($c == 4 && $naipe == 1)
        echo  "<img src='img/quatroouro.png' width='100'>";
        elseif ($c == 5 && $naipe == 1)
        echo  "<img src='img/cincoouro.png' width='100'>";
        elseif ($c == 6 && $naipe == 1)
        echo  "<img src='img/seisouro.png' width='100'>";
        elseif ($c == 7 && $naipe == 1)
        echo  "<img src='img/seteouro.jpg' width='100'>";
        elseif ($c == 8 && $naipe == 1)
        echo  "<img src='img/oitoouro.jpg' width='100'>";
        elseif ($c == 9 && $naipe == 1)
        echo  "<img src='img/noveouro.png' width='100'>";
        elseif ($c == 10 && $naipe == 1)
        echo  "<img src='img/dezouro.png' width='100'>";
        elseif ($c == 11 && $naipe == 1)
        echo  "<img src='img/onzeouro.jpg' width='100'>";
        elseif ($c == 12 && $naipe == 1)
        echo  "<img src='img/dozeouro.jpg' width='100'>";
        elseif ($c == 13 && $naipe == 1)
        echo  "<img src='img/trezeouro.jpg' width='100'>";

        elseif ($c == 1 && $naipe == 2)
        echo "<img src='img/ascopas.jpg' width='100'>";
        elseif ($c == 2 && $naipe == 2)
        echo  "<img src='img/doiscopas.png' width='100'>";
        elseif ($c == 3 && $naipe == 2)
        echo  "<img src='img/trescopas.png' width='100'>";
        elseif ($c == 4 && $naipe == 2)
        echo  "<img src='img/quatrocopas.png' width='100'>";
        elseif ($c == 5 && $naipe == 2)
        echo  "<img src='img/cincocopas.png' width='100'>";
        elseif ($c == 6 && $naipe == 2)
        echo  "<img src='img/seiscopas.png' width='100'>";
        elseif ($c == 7 && $naipe == 2)
        echo  "<img src='img/setecopas.png' width='100'>";
        elseif ($c == 8 && $naipe == 2)
        echo  "<img src='img/oitocopas.png' width='100'>";
        elseif ($c == 9 && $naipe == 2)
        echo  "<img src='img/novecopas.png' width='100'>";
        elseif ($c == 10 && $naipe == 2)
        echo  "<img src='img/dezcopas.png' width='100'>";
        elseif ($c == 11 && $naipe == 2)
        echo  "<img src='img/onzecopas.png' width='100'>";
        elseif ($c == 12 && $naipe == 2)
        echo  "<img src='img/dozecopas.png' width='100'>";
        elseif ($c == 13 && $naipe == 2)
        echo  "<img src='img/trezecopas.png' width='100'>";

        elseif ($c == 1 && $naipe == 3)
        echo "<img src='img/aspaus.png' width='100'>";
        elseif ($c == 2 && $naipe == 3)
        echo  "<img src='img/doispaus.png' width='100'>";
        elseif ($c == 3 && $naipe == 3)
        echo  "<img src='img/trespaus.png' width='100'>";
        elseif ($c == 4 && $naipe == 3)
        echo  "<img src='img/quatropaus.png' width='100'>";
        elseif ($c == 5 && $naipe == 3)
        echo  "<img src='img/cincopaus.png' width='100'>";
        elseif ($c == 6 && $naipe == 3)
        echo  "<img src='img/seispaus.png' width='100'>";
        elseif ($c == 7 && $naipe == 3)
        echo  "<img src='img/setepaus.png' width='100'>";
        elseif ($c == 8 && $naipe == 3)
        echo  "<img src='img/oitopaus.png' width='100'>";
        elseif ($c == 9 && $naipe == 3)
        echo  "<img src='img/novepaus.png' width='100'>";
        elseif ($c == 10 && $naipe == 3)
        echo  "<img src='img/dezpaus.png' width='100'>";
        elseif ($c == 11 && $naipe == 3)
        echo  "<img src='img/onzepaus.png' width='100'>";
        elseif ($c == 12 && $naipe == 3)
        echo  "<img src='img/dozepaus.png' width='100'>";
        elseif ($c == 13 && $naipe == 3)
        echo  "<img src='img/trezepaus.png' width='100'>";

        elseif ($c == 1 && $naipe == 4)
        echo "<img src='img/asespadas.png' width='100'>";
        elseif ($c == 2 && $naipe == 4)
        echo  "<img src='img/doisespadas.png' width='100'>";
        elseif ($c == 3 && $naipe == 4)
        echo  "<img src='img/tresespadas.png' width='100'>";
        elseif ($c == 4 && $naipe == 4)
        echo  "<img src='img/quatroespadas.png' width='100'>";
        elseif ($c == 5 && $naipe == 4)
        echo  "<img src='img/cincoespadas.png' width='100'>";
        elseif ($c == 6 && $naipe == 4)
        echo  "<img src='img/seisespadas.png' width='100'>";
        elseif ($c == 7 && $naipe == 4)
        echo  "<img src='img/seteespadas.png' width='100'>";
        elseif ($c == 8 && $naipe == 4)
        echo  "<img src='img/oitoespadas.png' width='100'>";
        elseif ($c == 9 && $naipe == 4)
        echo  "<img src='img/noveespadas.png' width='100'>";
        elseif ($c == 10 && $naipe == 4)
        echo  "<img src='img/dezespadas.png' width='100'>";
        elseif ($c == 11 && $naipe == 4)
        echo  "<img src='img/onzeespadas.png' width='100'>";
        elseif ($c == 12 && $naipe == 4)
        echo  "<img src='img/dozeespadas.png' width='100'>";
        elseif ($c == 13 && $naipe == 4)
        echo  "<img src='img/trezeespadas.png' width='100'>";
    } 
    echo "</tr></table>"; 
}



