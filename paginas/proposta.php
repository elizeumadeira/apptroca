
<?php
$cod = $_GET['cod'];

if (!$cod) {
    $cod = 0;
}
?>

<div class="container-fluid">
<div class="col-12">
    <a href="javascript:window.history.back();">Voltar</a>
</div>

<h3 class="secaotitulo"><?php echo $PRODUTOS[$cod]['NOME']; ?></h3>
    <div class="row produtos">
    <div class="col-12">
        <img src="<?php echo $PRODUTOS[$cod]['IMG']; ?>" />
    </div>
    </div>

    <div class="row">
    <div class="col-12">
    <?php echo $PRODUTOS[$cod]['DETALHES']; ?>
    </div>
</div>



<div class="row btn_row">
    <div class="col-12">
        <button onclick="window.location = '?pagina=selecionarmeusprodutos&cod=<?php echo $cod; ?>'" class="btn btn-success btn-lg btn-block fechar_negocio" >Negociar</button>
    </div>
</div>


</div>
