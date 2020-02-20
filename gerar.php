<?php

if($_POST)
{
    $curriculo = '<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modelo de Curriculo</title>
    
        <style>
            .text-center{
                text-align: center;
            }
    
            .form-control{
                display: block;
                margin: 0 auto;
                width: 100vw;
                max-width: 300px;
                height: 100vh;
                max-height: 70px;
            }
    
            .btn-center{
                display: block;
                margin: 0 auto;
                margin-top: 5px;
            }
        </style>
    </head>
    <body>
    <h1 class="text-center">'.$_POST['nome'].'</h1>
    <h2 class="text-center">'.$_POST['profissao'].'</h3>
    <hr>
    <h3 class="text-center">Objetivo</h3>
    <p class="text-center">'.$_POST['objetivo'].'</p>
    <hr>
    <h3 class="text-center">Experiencias</h3>
    <p class="text-center">'.$_POST['experiencia'].'</p>
    <hr>
    <h3 class="text-center">Habilidades</h3>
    <p class="text-center">'.$_POST['habilidade'].'</p>
    </body>
    </html>';

    echo $curriculo;
}

?>