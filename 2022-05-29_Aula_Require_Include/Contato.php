<?php
require 'header.php'
?>

<div class="col w-100 text-center">
    <h2><i>FORMULÁRIO PARA CONTATO</i></h2>
</div>

<form class="form-inline" action="destino.php" method="POST">

<div class="row">
    <div class="col">
      <input type="text" name="nome" class="form-control" placeholder="Nome">
    </div>
    <div class="col">
      <input type="text" name="email" class="form-control" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="txtArea">Mensagem</label>
    <textarea class="form-control" name= "mensagem" id="txtArea" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-default">ENVIAR</button>
  <button type="reset" class="btn btn-default">APAGAR</button>
</form>

<?php
require 'footer.php'
?>

