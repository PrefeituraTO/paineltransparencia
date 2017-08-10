<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Transparência PMTO">
  <meta name="author" content="CPD - ti@teofilootoni.mg.gov.br">
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Recadastro" />
  <meta property="og:description" content="Prefeitura Municipal de Teófilo Otoni" />
  <meta property="og:site_name" content="Transparência" />
  <!--link rel="icon" href="resources/img/debian.svg" /-->
  <title>PMTO | Transparência</title>
  <!-- Bootstrap core CSS -->
  <link href="resources/css/bootstrap.css" rel="stylesheet" />
  <link href="resources/css/print.css" rel="stylesheet" media="print" />
  <script src="resources/js/functions.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
  <script type="text/javascript">
  $(function(){
    $("#txtBusca").keyup(function(){
      var index = $(this).parent().index();
      var texto = $(this).val().toUpperCase();

      $("#ulItens li").each(function(){
        if($(this).text().toUpperCase().indexOf(texto) < 0)
         $(this).css("display", "none");
     });
      $("#ulItens li").each(function(){
        if($(this).text().toUpperCase().indexOf(texto) >= 0)
         $(this).css("display", "block");
     });
    });
  });
  </script>
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
 </head>
