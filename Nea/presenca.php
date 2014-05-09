<?php
include_once("TConnect.class.php");
$presenca = new TConnect();
$sql = "select idaluno, nome from aluno";
$presenca->execQuery($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NEA 1.0</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
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

<style type="text/css">
.teste {
	font-family: Arial, Helvetica, sans-serif;
}
.teste {
	font-family: Arial, Helvetica, sans-serif;
}
.teste {
	font-family: Arial, Helvetica, sans-serif;
}
.teste {
	font-family: Arial, Helvetica, sans-serif;
}
.teste {
	font-family: Arial, Helvetica, sans-serif;
}
.teste {
	font-family: Arial, Helvetica, sans-serif;
}
</style>


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
  
  
  <form id="form1" name="form1" method="post" action="presencaEnv.php">
<table width="372" border="1">
  <tr>
    <th width="269" class="teste" scope="col">NOME DO ALUNO</th>
    <th width="91" class="teste" scope="col">PRESENÇA</th>
  </tr>
<?php while($dados = $presenca->resultSet()): ?>
  <tr>
    <td class="teste"><?php echo $dados['nome']; ?></td>
    <td><center>
      <input type="checkbox" name="presente[]" value="<?php echo $dados['idaluno']; ?>" />
    </center></td>
  </tr>
<?php endwhile; ?>
    <td height="274" colspan="3"><p class="teste">&nbsp;</p>
<fieldset>

<!-- Form Name -->
<legend>Observações do dia.</legend>

<!-- Textarea -->
<div class="control-group">
  <div class="controls">
    <p>
      <textarea name="obs"  rows = "2" class="input-xxlarge" id="textarea" placeholder="observações aqui" type="text"></textarea>
    </p>
    <p>&nbsp;</p>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="cadastrar"></label>
  <div class="controls">
    <button id="cadastrar" name="cadastrar" class="btn btn-success">enviar</button>
  </div>
</div>

</fieldset>
</form>
<p class="teste">&nbsp;</p>
      <p class="teste">&nbsp;</p></td>
</table>
  
  
  
  
  
  

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'></script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>