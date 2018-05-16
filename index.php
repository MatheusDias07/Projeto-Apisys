<!DOCTYPE html>
<html>
<head>
	<title>Projeto</title>
  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
    //$variavel = Pega o conteudo do arquivo externo (url do json);
		$json = file_get_contents("https://swapi.co/api/people/?format=json");
    //variavel2 = interpretação($variavel(passando o texto ou conteudo com o json), true);
		$json_data = json_decode($json, true);
	?>
    <div class="bgimg-1">
  <div class="caption">
    <span class="border">STAR WARS</span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;"></h3>
  <div class="container">
    <table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Peso</th>
        <th scope="col">Cor do Cabelo</th>
        <th scope="col">Cor dos OLhos</th>
        <th scope="col">Sexo</th>
      </tr>
    </thead>
    <!-- Para (valor inicial até condição_final passo n){ -->
    <?php for ($a = 0; $a < 10; $a++){ ?>
    <tbody>
      <tr>
        <td><?php echo $json_data["results"][$a]["name"];?></td>
        <td><?php echo $json_data["results"][$a]["mass"];?></td>
        <td><?php echo $json_data["results"][$a]["hair_color"];?></td>
        <td><?php echo $json_data["results"][$a]["eye_color"];?></td>
        <td><?php echo $json_data["results"][$a]["gender"];?></td>
      </tr>
    </tbody>
    <?php } ?>
    </table>
  </div>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">STAR WARS</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:20px;text-align: justify;">
    <p style="margin-top: 15px;">Aplicação feita pelo o aluno Matheus Dias da Escola profissionalizante Paulo Petrola.</p>
  </div>
</div>
</body>
</html>