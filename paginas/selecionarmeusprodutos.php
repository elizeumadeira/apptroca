<?php

?>


<div class="col-12">
    <a href="javascript:window.history.back();">Voltar</a>
</div>
<div class="col-12">
<h3 class="secaotitulo">Selecione o seru produto para troca:</h3>
<ul class="lista_produtos">
<?php
foreach ($MEUSPRODUTOS as $codmp => $produto) {
    $ahref = '?pagina=negociacao&meuproduto=' . $codmp . '&cod=' . $_GET['cod'] . '';
    echo '<li class="row">
                <div class="col-4">
                    <a href="'.$ahref.'">
                        <img class="d-block" src="' . $produto['IMG'] . '" alt="' . $produto['NOME'] . '">
                    </a>
                </div>
                <div class="col-8">
                    <a href="'.$ahref.'">' . $produto['NOME'] . '</a>
                </div>
        </li>';
}
?>
</ul>
</div>