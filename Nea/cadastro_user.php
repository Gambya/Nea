<?php
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
            <li><a href="#">sair</a></li>
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
  
  <form method ="post" action = "cadastro_usuario.php" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Cadastro do Usuario</legend>


<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="id_nome">Nome</label>
  <div class="controls">
    <input id="id_nome" name="id_nome" type="text" placeholder="nome completo" class="input-xlarge" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="id_usuario">Usuario</label>
  <div class="controls">
    <input id="id_usuario" name="id_usuario" type="text" placeholder="usuario" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="id_usuario">Email</label>
  <div class="controls">
    <input id="email" name="email" type="text" placeholder="email" class="input-xlarge" required>
    
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label" for="id_senha">Senha</label>
  <div class="controls">
    <input id="senha" name="senha" type="password" placeholder="senha" class="input-xlarge" required>
    
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label" for="id_confsenha">Confirmar Senha</label>
  <div class="controls">
    <input id="id_confsenha" name="id_confsenha" type="password" placeholder="Confirmar senha" class="input-xlarge" required>
    
  </div>
</div>

<?php
// Select para ir buscar as escolaridades cadastradas no banco de dados
$tipoUser = new TConnect();
$sqlTipo = "select * from tipouser";
$tipoUser->execQuery($sqlTipo);

?>
<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="tipouser">Tipo Usuário</label>
  <div class="controls">
    <select id="tipouser" name="tipouser" class="input-medium">
      <option>Selecione Tipo</option>
      <?php while($dado = $tipoUser->resultSet()): ?>
        <option value="<?php echo $dado['idtipouser']; ?>"><?php echo utf8_encode($dado['tipouser']); ?></option>
      <?php endwhile; ?>
    </select>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="id_cadas_use"></label>
  <div class="controls">
    <button id="id_cadas_use" name="id_cadas_use" class="btn btn-primary">Cadastrar Usuario</button>
  </div>
</div>

</fieldset>
</form>

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'></script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>