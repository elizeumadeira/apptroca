

        <div class="container-fluid">

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
    <img src="imagens/tenis.png" />
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
    Tênis Adidas nº40
  </div>
  <div class="col-2"></div>
  <div class="col-5">
    Bola Oficial FIFA nova
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

<div class="row btn_row">
    <div class="col-12">
      <button class="btn btn-danger btn-sm btn-block cancelar_negocio">Cancelar Negociação</button>
    </div>
</div>


</div>
<!-- /.container-fluid -->

<!-- Sticky Footer -->
