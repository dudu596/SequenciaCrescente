<?php

function SequenciaCrescente($array)
{
    $sucesso = false;
    $quantidade = count($array);
    for ($index = 0; $index < $quantidade; $index++){

        $array_modificado = $array;
        $valor_antigo = null;
        $falha = 0;

        // Remove cada numero do array e testa se é crescente
        unset($array_modificado[$index]);
        foreach($array_modificado as $valor_atual){
            if(isset($valor_antigo)){
                if($valor_atual <= $valor_antigo){
                    $falha++;
                    break;
                }
            }
            $valor_antigo = $valor_atual;
        }

        // Caso alguma das verificações passar, é crescente
        if($falha == 0){
            $sucesso = 'true';
            break;
        }
    }
    if($sucesso){
        echo "[".implode(", ",$array)."] ". "true<br>";
    }else{
        echo "[".implode(", ",$array)."] ". "false<br>";
    }
}

// Exemplos

SequenciaCrescente([1, 3, 2, 1]);                           //false
SequenciaCrescente([1, 3, 2]);                              //true
SequenciaCrescente([1, 2, 1, 2]);                           //false
SequenciaCrescente([3, 6, 5, 8, 10, 20, 15]);               //false
SequenciaCrescente([1, 1, 2, 3, 4, 4]);                     //false
SequenciaCrescente([1, 4, 10, 4, 2]);                       //false
SequenciaCrescente([10, 1, 2, 3, 4, 5]);                    //true
SequenciaCrescente([1, 1, 1, 2, 3]);                        //false
SequenciaCrescente([0, -2, 5, 6]);                          //true
SequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]);               //false
SequenciaCrescente([40, 50, 60, 10, 20, 30]);               //false
SequenciaCrescente([1, 1]);                                 //true
SequenciaCrescente([1, 2, 5, 3, 5]);                        //true
SequenciaCrescente([1, 2, 5, 5, 5]);                        //false
SequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]);              //false
SequenciaCrescente([1, 2, 3, 4, 3, 6]);                     //true
SequenciaCrescente([1, 2, 3, 4, 99, 5, 6]);                 //true
SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]);    //true
SequenciaCrescente([3, 5, 67, 98, 3]);                      //true