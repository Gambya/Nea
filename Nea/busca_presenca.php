<?php
include_once("TConnect.class.php");
$obs = 0;

if(!isset($_POST['datain'])){
  $datain = date('Y-m-d');
}else{
  $datain = $_POST['datain'];
}

$presenca = new TConnect();
$sql = "select p.idpresenca,a.idaluno,a.nome, p.data,p.idobsaula,p.presente
        from presenca p,aluno a
        where p.idaluno = a.idaluno
        and p.data = '$datain'";
$presenca->execQuery($sql);
?>
<!DOCTYPE html>
<!--codificação da página--><html lang="pt-br">
<!--tipo de linguagem que será desenvolvidada a página-->
<head>
<!--Contém informações para sistemas de buscas, descrições do site e etc-->
<meta charset="utf-8">
<!--tipo de codificação referente a acentuações, principalmente-->
<title>Cadastro</title>
<!--Texto que será exibido na parte superior do navegador-->
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<style type="text/css">
        form {width: 800px; margin: 10px auto; padding: 10px; }
        input,label,button{ margin: 5px; }

    </style>

  </head>
  <body>

<fieldset>
  <!-- Form Name -->
  <legend>Buscar Diario</legend>
    <!-- Text input-->
    <form class="form-inline" role="form" action="busca_presenca.php" method="post" accept-charset="utf-8">
      <div class="form-group">
        <label class="sr-only" for="datain">data inicio</label><input id="datain" name="datain" placeholder="" class="form-control" required="" type="date"><button type="submit" class="btn btn-primary">Consulta</button>
      </div>
    </form>
    <table class="table table-striped">
      <tr>
        <td><b>Presentes</b></td>
        <td><b>Data</b></td>
      </tr>
      <?php while($dado = $presenca->resultSet()):  ?>
      <tr>
        <td><?php echo $dado['nome']; ?></td>
        <td><?php echo $dado['data']; ?></td>
      </tr>
      <?php
      $obs = $dado['idobsaula'];
      endwhile;
      ?>
    </table>
    <?php
    $observacao = new TConnect();
    $sqlObs = "select * from obsaula where idobsaula = $obs limit 1";
    $observacao->execQuery($sqlObs);
    $dado = $observacao->resultSet();
    ?>
    <textarea name="obs"><?php echo $dado['observacao']; ?></textarea>
</fieldset>







    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>