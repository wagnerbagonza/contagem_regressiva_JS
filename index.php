<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <meta charset="utf-8">

    <title>Contagem Regressiva</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.css" rel="stylesheet">



    <!-- Add custom CSS here -->

    <link href="css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <!-- Page Specific CSS -->

    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">



    <script type="text/javascript">

      var _gaq = _gaq || [];

      _gaq.push(['_setAccount', 'UA-48451062-1']);

      _gaq.push(['_trackPageview']);

      (function() {

        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +      '.google-analytics.com/ga.js';

        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

      })();

    </script><!-- FIM ANALITYCS-->



    <!-- Chamada countdown -->

    <script type="text/javascript">

      var Ano = 2018;

      var Mes = 12;

      var Dia = 25;

      var Hora = 00;

      var Min = 00;

      var Seg = 00;



      function Contador() {

        var hoje = new Date();//Obtém a data de hoje

        var futuro = new Date(Ano,Mes-1,Dia,Hora,Min,Seg); 



        //Esse bloco faz a conversão para inteiros

        var seg = parseInt((futuro - hoje) / 1000);

        var min = parseInt(seg / 60);

        var hora = parseInt(min / 60);

        var dia = parseInt(hora / 24);



        //Esse bloco faz a diferença da data

        seg = seg - (min * 60);

        min = min - (hora * 60);

        hora = hora - (dia * 24);



        //Esse bloco monta o conteúdo e ser inserido na página com o método ElementByID

        var faltam = '';

        faltam += '<h1>'+(dia && dia > 1) ? dia+'</h1>'+' <small><strong>dias</strong></small> ' : (dia==1 ? '1 dia, ' : '');

        faltam += '<h1>'+(toString(hora).length) ? hora+'</h1>'+' <small><strong>horas</strong></small>  ' : '';

        faltam += '<h1>'+(toString(min).length) ? min+'</h1>'+' <small><strong>minutos</strong></small>  ' : '';

        faltam += seg+ ' <small><strong>segundos</strong></small>';   

        if (dia+hora+min+seg > 0) {

          document.getElementById('contador').innerHTML = faltam;

          setTimeout(Contador,1000);

        } else {

          document.getElementById('contador').innerHTML = 'É hoje!!!!';

          setTimeout(Contador,1000);

        }

      }

    </script>

	



  </head>



  <body onload="Contador()">	

	

	   <div class="container">   

        <div class="col-lg-12">

          <div class="panel panel-default">

            <div class="panel-heading">

              <h3 class="text-center"><strong>Não seja brasileiro, não deixe para última hora, faltam:</strong></h3>

              <h1 class="text-center"><p id="contador"></p></h1>

              <h3 class="text-center"><strong>Para entrega do nosso PI</strong></h3>

            </div>

            <div class="panel-body">

              <div class="row">

                  <div class="col-sm-6 col-md-4">

                    <div class="thumbnail">              

                      <img src="img/alpha.jpg" alt="Alpha Supermarket">     

                    </div>

                  </div>

                 <div class="col-sm-6 col-md-4">

                    <div class="thumbnail">              

                        <img src="img/bravo.jpg" alt="Bravo Music Store">     

                    </div>

                </div>        

               <div class="col-sm-6 col-md-4">

                  <div class="thumbnail">              

                      <img src="img/charlie.jpg" alt="Charlie Book Store">     

                  </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div><!-- /.container -->

	

    <!-- JavaScript -->

    <script src="js/jquery-1.10.2.js"></script>

    <script src="js/bootstrap.js"></script>



    <!-- Page Specific Plugins -->

    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>

    <script src="js/morris/chart-data-morris.js"></script>

    <script src="js/tablesorter/jquery.tablesorter.js"></script>

    <script src="js/tablesorter/tables.js"></script>

	

  </body>

</html>

