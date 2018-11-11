
<div class="col-12">
    <a href="javascript:window.history.back();">Voltar</a>
</div>


<div class="col-12">
<h3 class="secaotitulo">Resultado da busca:</h3>
<span>(<?php echo sizeof($PRODUTOS);?>) itens encontrado(s)</span>
<ul class="lista_produtos">
<?php
foreach ($PRODUTOS as $codmp => $produto) {
    $ahref = '?pagina=proposta&cod=' . $codmp ;
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