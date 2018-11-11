<?php
$sugestoes_cp = $PRODUTOS;
$sugestoes_arr = array();

for ($i = 0; $i < 5; $i++) {
    $sorteado = rand(0, sizeof($sugestoes_cp));
    $sugestoes_arr[] = $sugestoes_cp[$sorteado];
    unset($sugestoes_cp[$sorteado]);
}

?>
<div class="row">
    <div class="container-fluid">
    <div class="col-12">
<h3 class="secaotitulo">Sugestões para você</h3>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <?php
for ($i = 0; $i < 5; $i++) {
echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.($i).'" '.($i == 0 ? ' class="active"' : '').'></li>';
}
?>
  </ol>
  <div class="carousel-inner">

<?php
$i = 0;
foreach ($sugestoes_arr as $cod => $produto) {
    echo '<div class="carousel-item ' . ($cod === 0 ? 'active' : '') . '">
        <a href="?pagina=proposta&cod=' . $cod . '">
                <img class="d-block w-100" src="' . $produto['IMG'] . '" alt="' . $produto['NOME'] . '">
            </a>
            </div>';

    if (++$i == 5) {
        break;
    }
}
?>


  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
    </div>