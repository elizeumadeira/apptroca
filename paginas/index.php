<a href="?pagina=negociacao">Uma nova requisicao pra vc</a>


<div class="row">
    <div class="container-fluid"> 
    <div class="col-12">
        <h3 class="secaotitulo">Buscar</h3>
        <div class="input-group mb-3">
        <div class="input-group-prepend lupa_buscar">
            <span class="input-group-text"><span class=" fa fa-search form-control-feedback"></span></span>
        </div>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <div class="input-group-append ">
        <button class="buscar_btn input-group-text buscar_btn" onclick="window.location='?pagina=buscar'">Buscar</button>
        </div>
        </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="container-fluid"> 
    <div class="col-12">
<h3 class="secaotitulo">Sugestões para você</h3>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

<?php 
    foreach($PRODUTOS as $cod=>$produto){

        echo '<div class="carousel-item '.($cod === 0 ? 'active' : '').'">
        <a href="?pagina=proposta&cod='.$cod.'">
                <img class="d-block w-100" src="'.$produto['IMG'].'" alt="'.$produto['NOME'].'">
            </a>
            </div>';
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
</div>