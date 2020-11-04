<?php
    $clube = array (
        'SLB' => array(
        'nome_completo'=>'Sport Lisboa e Benfica',
        'estadio'=>'Estádio da Luz',
        'localidade'=>'Lisboa',
        'pais'=>'Portugal'
        ),
        'SCP' => array(
        'nome_completo'=>'Sporting Clube de Portugal',
        'estadio'=>'Estádio José de Alvalade',
        'localidade'=>'Lisboa',
        'pais'=>'Portugal'
        ),
        'FCP' => array(
        'nome_completo'=>'Futebol Clube do Porto',
        'estadio'=>'Estádio do Dragão',
        'localidade'=>'Porto',
        'pais'=>'Portugal'
        ),
        'SCB' => array(
        'nome_completo'=>'Sporting Clube de Braga',
        'estadio'=>'Estádio Municipal de Braga',
        'localidade'=>'Braga',
        'pais'=>'Portugal'
        ),
    );

    foreach($clube as $eq=>$equipa){
        echo '<h1>' .$eq. '</h1>';
    foreach ($equipa as $eq=>$detalhe) {
        echo '<b>' .$eq. '</b> >>>>>>' .$detalhe. '<br>';
    }
    }

    
?>