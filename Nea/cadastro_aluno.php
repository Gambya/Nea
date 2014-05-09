<?php
include_once("seguranca.php");
include_once("TConnect.class.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NEA 1.0</title>
<meta name="keywords" content="ocean blue template, free css templates, CSS, HTML" />
<meta name="description" content="Ocean Blue - Free CSS Template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="script/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:800,
		pauseTime:1600,
		startSlide:1, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.6, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>
<body class="homepage">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	
        <div id="site_title">
          <h1><img src="img/logo.png" width="100" height="81" /></h1>
        </div>
      <div class="cleaner"></div>
    </div>
    
    <div id="templatemo_menu">
        <ul>
            <li><a href="cadastro_user.php" class="current">cadastrar usuario</a></li>
            <li><a href="cadastro_aluno.php">cadastrar aluno</a></li>
            <li><a href="busca_presenca.php">buscar diario</a></li>
            <li><a href="presenca.php">diario de classe</a></li>
            <li><a href="logof.php">sair</a></li>
        </ul>    	
        <div class="cleaner"></div>
    </div> <!-- end of templatemo_menu -->

    <div id="templatemo_main">
    
    	<div class="col_w900">
    	  <div class="cleaner"></div>
          <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<style type="text/css">
        form {width: 800px; margin: 10px auto; padding: 10px; }


    </style>
  
  <form method = "post" action ="cadastroaluno.php" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>CADASTRO DO ALUNO</legend>

<!-- NOME-->
<div class="control-group">
  <label class="control-label" for="nome">Nome</label>
  <div class="controls">
    <input id="nome" name="nome" type="text" placeholder="Nome Completo" class="input-xxlarge" required="">
    
  </div>
</div>

<!-- ENDEREÇO-->
<div class="control-group">
  <label class="control-label" for="endereco">Endereço</label>
  <div class="controls">
    <input id="endereco" name="endereco" type="text" placeholder="enderenço" class="input-xxlarge" required="">
    
  </div>
</div>

<!-- NUMERO-->
<div class="control-group">
  <label class="control-label" for="numero">Numero</label>
  <div class="controls">
    <input id="numero" name="numero" type="text" placeholder="numero" class="input-xlarge" required="">
    
  </div>
</div>

<!-- COMPLEMENTO-->
<div class="control-group">
  <label class="control-label" for="complemento">complemento</label>
  <div class="controls">
    <input id="complemento" name="complemento" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<!-- CEP-->
<div class="control-group">
  <label class="control-label" for="cep">CEP</label>
  <div class="controls">
    <input id="cep" name="cep" type="text" placeholder="" class="input-xlarge" required="">
    
  </div>
</div>

<!-- CIDADE-->
<div class="control-group">
  <label class="control-label" for="cidade">Cidade</label>
  <div class="controls">
    <input id="cidade" name="cidade" type="text" placeholder="cidade" class="input-xlarge" required="">
    
  </div>
</div>

<!-- BAIRRO-->
<div class="control-group">
  <label class="control-label" for="bairro">Bairro</label>
  <div class="controls">
    <input id="bairro" name="bairro" type="text" placeholder="bairro" class="input-xlarge" required="">
    
  </div>
</div>

<!-- UF-->
<div class="control-group">
  <label class="control-label" for="uf">UF</label>
  <div class="controls">
    <input id="uf" name="uf" type="text" placeholder="" class="input-xlarge" required="">
    
  </div>
</div>
<!-- NASCIMENTO-->
<div class="control-group">
  <label class="control-label" for="nasc">DT Nascimento</label>
  <div class="controls">
    <input id="nasc" name="nasc" type="date" placeholder="" class="input-xlarge" required="">    
  </div>
</div>

<!-- MÃE-->
<div class="control-group">
  <label class="control-label" for="nome_m">Nome da Mãe</label>
  <div class="controls">
    <input id="nome_m" name="nome_m" type="text" placeholder="nome da mãe" class="input-xxlarge" required="">
    
  </div>
</div>

<!-- PAI-->
<div class="control-group">
  <label class="control-label" for="nome_p">Nome do Pai</label>
  <div class="controls">
    <input id="nome_p" name="nome_p" type="text" placeholder="nome do pai" class="input-xxlarge">
    <p class="help-block"> </p>
  </div>
</div>

<!-- TELEFONE-->
<div class="control-group">
  <label class="control-label" for="telefone">Telefone do Responsável</label>
  <div class="controls">
    <input id="telefone" name="telefone" type="text" placeholder="0000-0000" class="input-small" required="">
    
  </div>
</div>

<!-- INFO ADICIONAIS -->
<div class="control-group">
  <label class="control-label" for="id_info">Informações adicionais</label>
  <div class="controls">                     
    <textarea id="id_info" name="id_info"></textarea>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="cadastrar"></label>
  <div class="controls">
    <button id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
  </div>
</div>



</fieldset>
</form>

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'></script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>