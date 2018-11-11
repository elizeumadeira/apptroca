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
    echo '<li class="row">
                <div class="col-4">
                        <img class="d-block" src="' . $produto['IMG'] . '" alt="' . $produto['NOME'] . '">
                </div>
                <div class="col-6">
                     '.$produto['NOME'] .'
                </div>
                <div class="col-6">
                    <i class="far fa-times-circle"></i>
                </div>
        </li>';
}
?>
</ul>
</div>