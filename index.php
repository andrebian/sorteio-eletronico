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

        <!-- Google Analytics -->
        <?php if ($_SERVER['HTTP_HOST'] == 'sorteioeletronico.andrebian.com') : ?>
            <script>
                (function(i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function() {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-44236047-1', 'andrebian.com');
                ga('send', 'pageview');

            </script>
        <?php endif; ?>
        <!-- Google Analytics -->
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="span2">
                    <script type="text/javascript"><!--
                        google_ad_client = "ca-pub-2136784768929334";
                        /* Sorteio eletrônico esq */
                        google_ad_slot = "6787598206";
                        google_ad_width = 120;
                        google_ad_height = 600;
                        //-->
                    </script>
                    <script type="text/javascript"
                            src="//pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                </div>
                <div class="span8">

                    <div class="masthead">
                        <ul class="nav nav-pills pull-right">
                            <li class="active"><a href="/">Novo sorteio</a></li>
                        </ul>
                        <h2 class="muted">Sorteio eletrônico</h2>
                    </div>

                    <hr>

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
                    <br />
                    <div class="row">
                        <div class="span3">&nbsp;</div>
                        <div class="span4">
                            <a class="btn btn-large btn-success" href="#" id="Sortear">Sortear</a>
                        </div>
                        <div class="span2">&nbsp;</div>
                    </div>

                    <div class="row">
                        <div class="span1">&nbsp;</div>
                        <div class="span5"><center>
                                <div id="NumeroSorteado">---</div>
                            </center>
                        </div>
                        <div class="span1">&nbsp;</div>
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
                <div class="span2">
                    <script type="text/javascript"><!--
                        google_ad_client = "ca-pub-2136784768929334";
                        /* Sorteio eletrônico dir */
                        google_ad_slot = "8264331404";
                        google_ad_width = 120;
                        google_ad_height = 600;
                        //-->
                    </script>
                    <script type="text/javascript"
                            src="//pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                </div>

            </div>
        </div>
    </body>
</html>
