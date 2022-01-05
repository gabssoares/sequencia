<?php 
    $array = [// recebe os valores
        round($_POST['n1']), 
        round($_POST['n2']), 
        round($_POST['n3']), 
        round($_POST['n4']), 
        round($_POST['n5']), 
        round($_POST['n6'])
    ];
    $false = 0; //variável de controle 

    foreach ($array as $num) {//imprime os valores digitados
        if(isset($num)) {
            echo $num . ', ';
        }
    }

    for ($i=0; $i < 5 ; $i++) {
        $j = $i + 1;
        if ($array[$i] >= $array[$j]) { //testa se a variável atual é maior ou igual a próxima
            unset($array[$j]); 
            $false++;
            if($array[$i] >= $array[$j + 1]) {//caso entre no if testa para ver mais uma variavel, decide se vai ficar no for ou dar direto false
                $false++;
                break;
            }else{
                $i++;
            }
        }
    }


    if($false < 2) { //utiliza a variável de controle pra saber se retorna true ou false
        echo ' True';
    }else {
        echo ' False';
    }
?>