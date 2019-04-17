<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Imagem e Ação</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <link rel="icon shortcut" type="image/x-icon" href="imagens/favicon.png"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/jquery-1.12.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-qrcode-0.14.0.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<div class="container">
    <div class="menu text-center">
        <h1 class="quemvai">Quem vai jogar?</h1>
        <form action="iniciar.php" method="post">
            <div class="row" id="listaduplas">
                <div class="col-md-6">
                    <div class="boxdupla">
                        <h3 class="quemvai">Dupla 1</h3>
                        <div class="row">
                            <div class="col-md-5">
                                <input class="form-control input-lg" name="d1j1" required>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="ecomercial">&</div>
                            </div>
                            <div class="col-md-5">
                                <input class="form-control input-lg" name="d1j2" required>
                            </div>
                        </div>
                        <h4>Cor</h4>
                        <div class="text-right">
                            <div role="presentation" class="dropdown corselect">
                                <div data-id="1" class="dropdown-toggle" id="selectcolor1"
                                     data-toggle="dropdown" role="button"
                                     aria-haspopup="true" aria-expanded="false">

                                    <button type="button" class="showbtn btn corselect optionamarelo"><span
                                                class="nomecor">amarelo</span><span class="caret"></span>
                                    </button>
                                    <input name="corinput1" style="visibility: hidden" value="amarelo" required>
                                </div>
                                <ul class="dropdown-menu" id="menu1" aria-labelledby="selectcolor1">
                                    <li>
                                        <button onclick="selecionoucor('amarelo','1')" type="button"
                                                class="btn corselect optionamarelo btn-block">Amarelo
                                        </button>
                                    </li>
                                    <li>
                                        <button onclick="selecionoucor('azul','1')" type="button"
                                                class="btn displaynone corselect optionazul btn-block">Azul
                                        </button>
                                    </li>
                                    <li>
                                        <button onclick="selecionoucor('branco','1')" type="button"
                                                class="btn corselect optionbranco btn-block">branco
                                        </button>
                                    </li>
                                    <li>
                                        <button onclick="selecionoucor('laranja','1')" type="button"
                                                class="btn corselect optionlaranja btn-block">laranja
                                        </button>
                                    </li>
                                    <li>
                                        <button onclick="selecionoucor('preto','1')" type="button"
                                                class="btn corselect optionpreto btn-block">preto
                                        </button>
                                    </li>
                                    <li>
                                        <button onclick="selecionoucor('rosa','1')" type="button"
                                                class="btn corselect optionrosa btn-block">rosa
                                        </button>
                                    </li>
                                    <li>
                                        <button onclick="selecionoucor('roxo','1')" type="button"
                                                class="btn corselect optionroxo btn-block">roxo
                                        </button>
                                    </li>
                                    <li>
                                        <button onclick="selecionoucor('verde','1')" type="button"
                                                class="btn corselect optionverde btn-block">verde
                                        </button>
                                    </li>
                                    <li>
                                        <button onclick="selecionoucor('vermelho','1')" type="button"
                                                class="btn corselect optionvermelho btn-block">vermelho
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="boxdupla">
                        <h3 class="quemvai">Dupla 2</h3>
                        <div class="row">
                            <div class="col-md-5">
                                <input class="form-control input-lg" name="d2j1" required>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="ecomercial">&</div>
                            </div>
                            <div class="col-md-5">
                                <input class="form-control input-lg" name="d2j2" required>
                            </div>
                        </div>
                        <h4>Cor</h4>
                        <div class="text-right">
                            <div role="presentation" class="dropdown corselect">
                                <div data-id="2" class="dropdown-toggle" id="selectcolor2"
                                     data-toggle="dropdown" role="button"
                                     aria-haspopup="true" aria-expanded="false">

                                    <button type="button" class="showbtn btn corselect optionazul"><span
                                                class="nomecor">azul</span><span class="caret"></span>
                                    </button>
                                    <input name="corinput2" style="visibility: hidden" value="azul" required>
                                </div>
                                <ul class="dropdown-menu" id="menu2" aria-labelledby="selectcolor2">
                                    <li>
                                        <button onclick="selecionoucor('amarelo','2')" type="button"
                                                class="btn corselect displaynone optionamarelo btn-block">Amarelo
                                        </button>
                                    </li>
                                    <li>
                                        <button onclick="selecionoucor('azul','2')" type="button"
                                                class="btn corselect optionazul btn-block">Azul
                                        </button>
                                    </li>
                                    <li>
                                        <button onclick="selecionoucor('branco','2')" type="button"
                                                class="btn corselect optionbranco btn-block">branco
                                        </button>
                                    </li>
                                    <li>
                                        <button onclick="selecionoucor('laranja','2')" type="button"
                                                class="btn corselect optionlaranja btn-block">laranja
                                        </button>
                                    </li>
                                    <li>
                                        <button onclick="selecionoucor('preto','2')" type="button"
                                                class="btn corselect optionpreto btn-block">preto
                                        </button>
                                    </li>
                                    <li>
                                        <button onclick="selecionoucor('rosa','2')" type="button"
                                                class="btn corselect optionrosa btn-block">rosa
                                        </button>
                                    </li>
                                    <li>
                                        <button onclick="selecionoucor('roxo','2')" type="button"
                                                class="btn corselect optionroxo btn-block">roxo
                                        </button>
                                    </li>
                                    <li>
                                        <button onclick="selecionoucor('verde','2')" type="button"
                                                class="btn corselect optionverde btn-block">verde
                                        </button>
                                    </li>
                                    <li>
                                        <button onclick="selecionoucor('vermelho','2')" type="button"
                                                class="btn corselect optionvermelho btn-block">vermelho
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 displaynone" id="addbuplabox">
                    <button type="button" onclick="adddupla();" class="boxdupla adicionardupla">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Adicionar Dupla
                    </button>
                </div>


            </div>
            <div class="text-right">
                <button class="jogobtn">Iniciar Jogo</button>
            </div>
        </form>


    </div>
</div>
<script>
    function selecionoucor(cor, id) {

        var coratual = $('#selectcolor' + id + ' input').val();
        $('#selectcolor' + id + ' .showbtn').removeClass('option' + coratual).addClass('option' + cor);
        $('#selectcolor' + id + ' .showbtn .nomecor').html(cor);
        $('.dropdown-menu button').removeClass('displaynone');
        $('#selectcolor' + id + ' input').val(cor);
        $(".dropdown-toggle").each(function (index) {
            var iddrop = $(this).data('id');
            var cordrop = $('#selectcolor' + iddrop + ' input').val();
            $('.option' + cordrop).addClass('displaynone');
            $('#selectcolor' + iddrop + ' .option' + cordrop).removeClass('displaynone');
        });


    }
    function adddupla() {


    }
</script>
</body>
</html>