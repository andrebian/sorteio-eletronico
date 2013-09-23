<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sorteio eletrônico</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Gerador números randômicos para sorteios">
        <meta name="author" content="Andre Cardoso">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
        <script src="js/sorteio.js"></script>
    </head>

    <body>

        <div class="container-narrow">

            <div class="masthead">
                <ul class="nav nav-pills pull-right">
                    <li class="active"><a href="/">Novo sorteio</a></li>
                </ul>
                <h2 class="muted">Sorteio eletrônico</h2>
            </div>

            <hr>

            <div class="jumbotron">
                <div class="row">
                    <div class="span4">
                        Número inicial <br />
                        <input type="number" name="min" id="Min" value="1">
                    </div>
                    <div class="span4">
                        Número final <br />
                        <input type="number" name="max" id="Max" value="10">
                    </div>
                </div>
                <a class="btn btn-large btn-success" href="#" id="Sortear">Sortear</a>
                <br /><br />
                <div class="span2">&nbsp;</div>
                <div id="NumeroSorteado" class="span4">---</div>
                <div class="span2">&nbsp;</div>
            </div>
            
            <br clear="all" />
            <hr>
            
            <div class="span6">
                <h4 id="JaSorteados" style="display:none;">Já sorteados</h4>
                <div class="span6" id="NumerosSorteados"></div>
            </div>

            <br clear="all" />
            <br clear="all" />
            <hr>

            <div class="footer">
                <p>&copy; 
                    <a href="http://www.andrebian.com" target="_blank">Andre Cardoso</a>&nbsp;
                    2013 - <?php echo date('Y'); ?></p>
            </div>

        </div>
    </body>
</html>
