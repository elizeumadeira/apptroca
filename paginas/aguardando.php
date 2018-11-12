
<?php 
$cod = $_GET['cod'];

if(!$cod){
    $cod = 0;
}
$meucod = $_GET['meuproduto'];
?>

        <div class="container-fluid">

  <div class="col-12">
    <a href="index.php">Voltar</a>
</div>

<div class="row text-center">
  <div class="col-5">
    Vendedor 1
  </div>
  <div class="col-2"></div>
  <div class="col-5">
    Vendedor 2
  </div>
</div>

<div class="row produtos">
  <div class="col-5">
    <img src="<?php echo $PRODUTOS[$cod]['IMG']; ?>" />
  </div>
  <div class="col-2 arrow">
    <img src="imagens/RepeatArrow.png" />
  </div>
  <div class="col-5">
    <img src="<?php echo $MEUSPRODUTOS[$meucod]['IMG']; ?>" />
  </div>
</div>

<div class="row">
  <div class="col-5">
  <?php echo $PRODUTOS[$cod]['NOME']; ?>
  </div>
  <div class="col-2"></div>
  <div class="col-5">
  <?php echo $MEUSPRODUTOS[$meucod]['NOME']; ?>
  </div>
</div>

<div class="row btn_row">
    <div class="col-12">
        Aguardando confirmação de Vendedor 2
    </div>
</div>


<div class="row btn_row">
    <div class="col-12">
        <button onclick="$('#toggle_chat').toggle();" class="btn btn-primary btn-lg btn-block" >Enviar mensagem para Vendedor 2</button>
    </div>
  </div>



    <div id="toggle_chat" style="display: none;">
    <?php require 'commom/chat.php'; ?>
    </div>

<div class="row btn_row cancelar_negocio_btn_container">
    <div class="col-12">
      <button onclick="window.location='index.php'" class="btn btn-danger btn-sm btn-block ">Cancelar Negociação</button>
    </div>
</div>


</div>
<!-- /.container-fluid -->

<!-- Sticky Footer -->

