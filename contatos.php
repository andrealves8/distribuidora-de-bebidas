<!DOCTYPE html>
<html lang="pt-br">
<title>Distribuidora de Bebidas</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
 <!-- barra de Menu -->
<div class="w3-top">
    <a href="logout.php" class="w3-bar-item w3-button ">Sair</a>
      <div class="w3-bar w3-card-4 w3-red">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large"><b>INÍCIO</b></a>
    <a href="sobre.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><b>SOBRE</b></a>
    <a href="videos.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><b>VÍDEOS</b></a>
    <a href="contatos.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><b>CONTATOS</b></a>
    <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-padding-large w3-button" title="More"><b>PRODUTOS</b> <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a href="whisky.php" class="w3-bar-item w3-button">Whisky</a>
          <a href="vodka.php" class="w3-bar-item w3-button">Vodka</a>
          <a href="vinho.php" class="w3-bar-item w3-button">Vinho</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
    
  <!-- Pag Eventos -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="eventos">
      <br><br><h2 class="w3-wide w3-center">CONTATOS</h2>
    <p class="w3-opacity w3-center"><i>Entre em contato conosco</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Brasília, DF<br>
        <i class="fa fa-phone" style="width:30px"></i> Telefone: (61)63903909<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: distribuidoradebebidas@mail.com<br>
      </div>
      <div class="w3-col m6">
          <form action="action_page.php" method="post" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Nome" required name="nome" id="nome">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Telefone" required name="telefone" id="telefone">
            </div>
          </div>
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="email" id="email">
            <button class="w3-button w3-card-4 w3-red w3-section w3-right" type="submit">ENVIAR</button>
        </form>
      </div>
    </div>
  </div>



<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Criado por <a href="https://www.linkedin.com/in/andr%C3%A9-alves-b5701a197/" target="_blank">Grupo1</a></p>
</footer>


</body>
</html>
