
<?php 
$cod = $_GET['cod'];

if(!$cod){
    $cod = 0;
}
?>

        <div class="container-fluid">

  <div class="col-12">
    <a href="/">Voltar</a>
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
    <img src="imagens/bola.png" />
  </div>
</div>

<div class="row">
  <div class="col-5">
  <?php echo $PRODUTOS[$cod]['NOME']; ?>
  </div>
  <div class="col-2"></div>
  <div class="col-5">
    Bola Oficial FIFA nova
  </div>
</div>

<div class="row">
  <div class="col-5">
  <?php echo $PRODUTOS[$cod]['DETALHES']; ?>
  </div>
  <div class="col-2"></div>
  <div class="col-5">
    Bola Oficial FIFA nova
  </div>
</div>

<?php require 'commom/chat.php'; ?>


<div class="row btn_row">
    <div class="col-12">
        <button onclick="window.location = '?pagina=aguardando&cod=<?php echo $cod; ?>'" class="btn btn-success btn-lg btn-block fechar_negocio" >Fechar Negócio</button>
    </div>

    <div class="col-12">
      <button class="btn btn-danger btn-sm btn-block cancelar_negocio" onclick="window.location='/'">Cancelar Negociação</button>
    </div>
</div>


</div>
<!-- /.container-fluid -->

<!-- Sticky Footer -->

