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

            .contato{
                display: block;
                margin: 0 auto;
                width: 20vw;
                min-width: 304px;
                align-items: center;
                justify-content: center;
                overflow: hidden;
            }
    
            .contato > input{
                display: block;
                width: 99%;
                float: left;
                clear: both;
            }

            .container{
                width: 100vw;
                max-width: 500px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
    <div class="container">
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
        <hr>
        <div class="contato">
            <p><b>Email:</b> 
            '.$_POST['email'].'</p>
            <p><b>Telefone:</b> 
            '.$_POST['telefone'].'</p>
            <p><b>Site:</b> 
            '.$_POST['site'].'</p>
            <p><b>Endereço:</b> 
            '.$_POST['endereco'].'</p>
        </div>
    </div>
    </body>
    </html>';

    echo $curriculo;

    $arquivo = fopen($_POST['nome'].'.html', 'w+');
    fwrite($arquivo, $curriculo);
    fclose($arquivo);
}

?>