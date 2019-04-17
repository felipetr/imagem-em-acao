<?php session_start();

if (!isset($_SESSION['d1j1'])) {
    $redirect = "./";

    header("location:$redirect");
    exit();
}
?>

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
<div id="jogadores">
    <div data-novapos="" data-pos="<?php echo $_SESSION['pos1'] ?>" id="pino1"
         data-jogador="<?php echo $_SESSION['d1j1']; ?> e <?php echo $_SESSION['d1j2']; ?>" data-jogador="1">
        <div class="pino pino<?php echo $_SESSION['corinput1']; ?>" id="pinodupla1">
            <b><?php echo $_SESSION['ad1j1']; ?></b>
            <small>&</small>
            <b><?php echo $_SESSION['ad1j2']; ?></b>
        </div>
    </div>
    <div data-novapos="" data-pos="<?php echo $_SESSION['pos2'] ?>" id="pino2"
         data-jogador="<?php echo $_SESSION['d2j1']; ?> e <?php echo $_SESSION['d2j2']; ?>" data-jogador="2">
        <div class="pino pino<?php echo $_SESSION['corinput2']; ?>" id="pinodupla2">
            <b><?php echo $_SESSION['ad2j1']; ?></b>
            <small>&</small>
            <b><?php echo $_SESSION['ad2j2']; ?></b>
        </div>
    </div>
</div>
<script>
chamaqr('');
</script>
<div class="row">
    <div class="col-md-9">
        <div class="tabuleiro">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div data-casa="0" class="tabuleirocasa casa0" id="casa0">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div class="tabuleirocasa casalcurva" id="casa17">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="t" class="tabuleirocasa casamcurva" id="casa18">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="c" class="tabuleirocasa casalcurva" id="casa35">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="t" class="tabuleirocasa casamcurva" id="casa36">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div data-casa="p" class="tabuleirocasa casap" id="casa1">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="d" class="tabuleirocasa casad" id="casa16">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="p" class="tabuleirocasa casap" id="casa19">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="d" class="tabuleirocasa casad" id="casa34">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="p" class="tabuleirocasa casap" id="casa37">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div data-casa="o" class="tabuleirocasa casao" id="casa2">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="a" class="tabuleirocasa casaa" id="casa15">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="o" class="tabuleirocasa casao" id="casa20">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="a" class="tabuleirocasa casaa" id="casa33">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="o" class="tabuleirocasa casao" id="casa38">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div data-casa="a" class="tabuleirocasa casaa" id="casa3">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="o" class="tabuleirocasa casao" id="casa14">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="a" class="tabuleirocasa casaa" id="casa21">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="o" class="tabuleirocasa casao" id="casa32">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="a" class="tabuleirocasa casaa" id="casa39">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div data-casa="d" class="tabuleirocasa casad" id="casa4">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="p" class="tabuleirocasa casap" id="casa13">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="d" class="tabuleirocasa casad" id="casa22">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="p" class="tabuleirocasa casap" id="casa31">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="d" class="tabuleirocasa casad" id="casa40">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div data-casa="l" class="tabuleirocasa casal" id="casa5">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="t" class="tabuleirocasa casam" id="casa12">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="l" class="tabuleirocasa casal" id="casa23">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="t" class="tabuleirocasa casam" id="casa30">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="l" class="tabuleirocasa casal" id="casa41">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div data-casa="t" class="tabuleirocasa casam" id="casa6">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="l" class="tabuleirocasa casal" id="casa11">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="t" class="tabuleirocasa casam" id="casa24">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="l" class="tabuleirocasa casal" id="casa29">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="t" class="tabuleirocasa casam" id="casa42">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div data-casa="p" class="tabuleirocasa casap" id="casa7">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="d" class="tabuleirocasa casad" id="casa10">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="p" class="tabuleirocasa casap" id="casa25">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="d" class="tabuleirocasa casad" id="casa28">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="p" class="tabuleirocasa casap" id="casa43">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div data-casa="o" class="tabuleirocasa casaocurva" id="casa8">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="a" class="tabuleirocasa casaacurva" id="casa9">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="o" class="tabuleirocasa casaocurva" id="casa26">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="a" class="tabuleirocasa casaacurva" id="casa27">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                            <div data-casa="d" class="tabuleirocasa casafinal" id="casa44">
                                <img class="" src="imagens/inv.png">
                                <div class="slot slot1"></div>
                                <div class="slot slot2"></div>
                                <div class="slot slot3"></div>
                                <div class="slot slot4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="menu text-center">
            <h3>Vez de:</h3>
            <div id="donodavez" data-dono="<?php echo $_SESSION['vez'] ?>">
                <h2 id="vez1" class="h2<?php echo $_SESSION['corinput1']; ?>"><?php echo $_SESSION['d1j1']; ?>
                    e <?php echo $_SESSION['d1j2']; ?></h2>
                <h2 id="vez2" class="h2<?php echo $_SESSION['corinput2']; ?>"><?php echo $_SESSION['d2j1']; ?>
                    e <?php echo $_SESSION['d2j2']; ?></h2>
            </div>
            <div class="divider"></div>


            <div class="dado" data-dono="<?php echo $_SESSION['vez'] ?>">
                <img id="dadointerroga" style="cursor:pointer;" onclick="rolaodado()" src="imagens/dado/interroga.png">
                <img id="dadoanima" class="displaynone" src="imagens/dado/dadoanim.gif">
                <img id="dado1" class="displaynone" src="imagens/dado/1.png">
                <img id="dado2" class="displaynone" src="imagens/dado/2.png">
                <img id="dado3" class="displaynone" src="imagens/dado/3.png">
                <img id="dado4" class="displaynone" src="imagens/dado/4.png">
                <img id="dado5" class="displaynone" src="imagens/dado/5.png">
                <img id="dado6" class="displaynone" src="imagens/dado/6.png">
            </div>
            <div class="displaynone" id="jogada">
                <div class="divider"></div>
                <h3 data-tema="" id="temashow">Tema:</h3>
                <div id="temas">
                    <h2 class="temas h2p">Pessoa ou Animal</h2>
                    <h2 class="temas h2o">Objeto</h2>
                    <h2 class="temas h2a">Ação</h2>
                    <h2 class="temas h2d">Difícil</h2>
                    <h2 class="temas h2l">Lugar</h2>
                    <h2 class="temas h2m">TV e Cinema</h2>
                </div>
                <div id="qrcode"></div>
                <script>


                    function finaliza(foi) {
                        removesons();
                        clearInterval(interval);
                        segundo = 'null';

                        $('#jogada').addClass('displaynone');
                        $('#cronometro').addClass('displaynone');
                        $('#qrcode').html('');
                        $('.dado img').removeClass('displaynone').addClass('displaynone');
                        $('#dadointerroga').removeClass('displaynone');


                        if (foi == 1) {
                            var dono = $('.dado').data('dono');
                            var pos = $('#pino' + dono).data('novapos');
                            movepino(dono, pos);

                        }
                        var formData = {
                            'vez': $('.dado').data('dono')
                        };
                        $.ajax({
                            url: "includes/vez.php",
                            type: "POST",
                            data: formData,
                            success: function (data) {
                                $('.dado').data('dono', data);
                                donodavez(data);
                            }
                        });
                    }
                    function comunicabanco(tema) {

                        var dono = $('.dado').data('dono');
                        var formData = {
                            'tema': tema
                        };
                        $.ajax({
                            url: "includes/dado.php",
                            type: "POST",
                            data: formData,
                            success: function (data) {
                                //chamaqr(data);
								chamaqr('teste');
                                $('.cronometroresposta').addClass('displaynone').html(data);

                            }
                        });
                    }

                    function movepino(id, casa) {
                        $('.tabuleiro #pinodupla' + id).remove();

                        if (casa == 44) {
                            ganhou(id);
                        }

                        var formData = {
                            'id': id,
                            'casa': casa
                        };
                        $.ajax({
                            url: "includes/movepino.php",
                            type: "POST",
                            data: formData,
                            success: function (data) {
                                $('#casa' + casa + ' .slot' + id).html($('#pino' + id).html());

                                $('#pino' + id).data('pos', casa);


                            }
                        });
                    }
                    function donodavez(id) {
                        $('#donodavez h2').addClass('displaynone');
                        $('#donodavez #vez' + id).removeClass('displaynone');
                    }


                    function rolaodado() {

                        var face = Math.floor((Math.random() * 6) + 1);
                   
                        var dono = $('.dado').data('dono');

                        var pos = Number($('#pino' + dono).data('pos'));

                        var novaposicao = pos + face;

                        if (novaposicao > 43) {
                            novaposicao = 44;
                        }
                        $('#pino' + dono).data('novapos', novaposicao);
                        var tema = $('#casa' + novaposicao).data('casa');

						
                        $('.temas').addClass('displaynone');
						if(tema == 't')
						{
							tema = 'm';
						}
                        $('.h2' + tema).removeClass('displaynone');

                        $('.dado img').removeClass('displaynone');
                        $('.dado img').addClass('displaynone');
                        $('.dado #dadoanima').removeClass('displaynone');
                        comunicabanco(tema);
                        setTimeout(function () {
                            $('.dado #dadoanima').addClass('displaynone');
                            $('.dado #dado' + face).removeClass('displaynone');
                            $('#jogada').removeClass('displaynone');

                        }, 2000);


                    }
                    var interval;
                    var segundo;
                    function contaminuto() {
                        addsons();
                        $('#final').addClass('displaynone');
                        $('#parar').removeClass('displaynone');
                        $('.cronometrotempo').removeClass('displaynone');
                        $('#chatAudio')[0].play();
                        var dono = $('.dado').data('dono');
                        $('.cronometrodavez').html($('#pino' + dono).data('jpgador'));
                        $('#cronometro').removeClass('displaynone');
                        segundo = 60;

                        $('.cronometrotempo').html(segundo);
                        interval = setInterval(function () {
                            segundo = segundo - 1;

                            $('.cronometrotempo').html(segundo);
                            if (segundo < 11) {
                                if (segundo > 0) {
                                    $('#terminando')[0].play();
                                    $('.cronometrotempo').removeClass('displaynone');

                                } else {


                                    $('#naoacertou').removeClass('displaynone');
                                    $('#final').removeClass('displaynone');
                                    $('#parar').addClass('displaynone');
                                    $('#acertou').removeClass('text-center').removeClass('col-md-12').addClass('col-md-6').addClass('text-left');
                                    $('.cronometrotempo').html('<span style="font-size: 40px">Acabou o tempo</span>');
                                    if (segundo == 0) {
                                        $('#terminou')[0].play();
                                        $('.cronometrotempo').addClass('displaynone');
                                        $('.cronometroresposta').removeClass('displaynone');


                                    }
                                    removesons();
                                    segundo = 0;


                                }
                            }
                            var showvalor = segundo;

                            $('.cronometrotempo').html(showvalor);
                        }, 1000);
                    }

                    function addsons() {
                        $('#sons').html('<audio id="chatAudio" class="displaynone"><source src="includes/inicio.mp3" type="audio/mpeg"></audio><audio id="terminando" class="displaynone"><source src="includes/terminando.mp3" type="audio/mpeg">   </audio>    <audio id="terminou" class="displaynone"><source src="includes/terminou.mp3" type="audio/mpeg"></audio>');
                    }

                    function removesons() {
                        setTimeout(function () {
                            $('#sons').html('');
                        }, 1000);

                    }
                    function parar() {
                        segundo = 0;
                        $('#terminou')[0].play();
                        $('.cronometrotempo').addClass('displaynone');
                        $('.cronometroresposta').removeClass('displaynone');
                    }

                    function ganhou(id) {
                        var nome = $('#pino'+id).data('jogador');
                        $('.cronometroreal').addClass('displaynone');
                        $('.cronometroreal').removeClass('displaynone').html(nome+' ganharam! <br><a href="./"><button class="jogobtn">Novo Jogo</button></a>');
                        $('#cronometro').removeClass('displaynone');

                    }
                    $(function () {

                        movepino(1, <?php echo $_SESSION['pos1']?>);
                        movepino(2, <?php echo $_SESSION['pos2']?>);
                        donodavez(<?php echo $_SESSION['vez']?>);
                        //      chamaqr('Cristiane Valdevino de Aquino');

                    });

                </script>
                <button class="jogobtn" onclick="contaminuto()">Começar</button>
            </div>

        </div>
    </div>
</div>
<div id="cronometro" class="displaynone">
    <div class="cronometrodavez text-center"></div>
    <div id="cronometrobox" class="text-center">
        <div class="ganhou displaynone"></div>
        <div class="cronometroreal">
            <div class="cronometrotempo"></div>
            <div class="cronometroresposta displaynone"></div>
            <div class="row">
                <button onclick="parar();" id="parar" class="jogobtn">Parar</button>
                <div id="final" class="row text-right displaynone">
                <div id="acertou" class="col-md-12 text-center">
                    <button onclick="finaliza(1)" class="jogobtn">Acertou</button>
                </div>
                <div id="naoacertou" class="row text-right displaynone">
                    <button onclick="finaliza(0)" class="jogobtn nacertou">Não Acertou</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sons">

    </div>
</body>
</html>