<?php
if(!$_POST) return;

$experiences = $_POST["experiences"];
$formations = $_POST["formations"];
$skills = $_POST["skills"];

$curriculo = '
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Seu Curriculo</title>
</head>
<body>
    <div class="container" style="border-left: 2px solid;border-right: 2px solid;">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8 offset-md-4">
                        <b style="font-size: 200%;">'.$_POST["nome"].'</b><br>
                        <small class="text-muted">
                            '.$_POST["endereco"].', '.$_POST["numero"].', '.$_POST["bairro"].', '.$_POST["cidade"].'-'.$_POST["estados-brasil"].'<br>
                            '.($_POST["complemento"] == "" ? "" : ($_POST["complemento"] + "<br>")).'
                            '.$_POST["telefone"].' • '.$_POST["celular"].'<br>
                            <a href="#">'.$_POST["email"].'</a>
                        </small>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-md-12">
                <h2>OBJETIVO</h2>
                <div class="row">
                    <div class="col-md-11 offset-md-1">
                        '.$_POST["objetivo"].'
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-1">
                <h2>EXPERIÊNCIA</h2>
                <div class="row">
                    ';

                    for($i = 0; $i < sizeof($experiences); $i++)
                    {
                        $curriculo .=  '<div class="col-md-11 offset-md-1">
                                            <div class="exp0">
                                                <b>DE '.$experiences[$i]["startdate"].' ATÉ '.$experiences[$i]["enddate"].'</b><br>
                                                <div style="font-size: 20px;"><b style="color: rgb(0, 84, 240)">'.$experiences[$i]["cargo"].',</b> '.$experiences[$i]["empresa"].'</div>
                                                <div class="text-muted">
                                                    '.$experiences[$i]["descricao"].'
                                                </div> 
                                            </div>
                                            <hr>
                                        </div>';
                    }

  $curriculo .= '</div>
            </div>

            <div class="col-md-12">
                <h2>FORMAÇÃO</h2>
                <div class="row">';

                    for($i = 0; $i < sizeof($formations); $i++)
                    {
                        $curriculo .=  '<div class="col-md-11 offset-md-1">
                                            <b>'.$formations[$i]["completedate"].'</b><br>
                                            <div style="font-size: 20px;"><b style="color: rgb(0, 84, 240)">'.$formations[$i]["graduacao"].',</b> '.$formations[$i]["instituicao"].'</div>
                                            <div class="text-muted">
                                                '.$formations[$i]["formdesc"].'
                                            </div> 
                                            <hr>
                                        </div>';
                    }

 $curriculo .= '</div>
            </div>

            <div class="col-md-12">
                <h2>HABILIDADE</h2>
                <div class="row">';

                    for($i = 0; $i < sizeof($skills); $i++)
                    {
                        $curriculo .=  '<div class="col-md-6">
                                            <b style="color: green;">•</b> '.$skills[$i].'
                                        </div>';
                    }

 $curriculo .= '</div>
            </div>

            

            <div class="col-md-12 mt-3 mb-4">
                <h2>PERFIL PROFISSIONAL</h2>
                <div class="row">
                    <div class="col-md-11 offset-md-1">
                        '.$_POST["perfil"].'
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
';

echo $curriculo;

?>