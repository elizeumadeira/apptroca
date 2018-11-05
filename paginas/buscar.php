<div class="col-12">
    <a href="javascript:window.history.back();">Voltar</a>
</div>
      
<ul>
<?php 
    foreach($PRODUTOS as $cod=>$produto){

        echo '<li class="">
            <a href="?pagina=proposta&cod='.$cod.'">
                <img class="d-block w-100" src="'.$produto['IMG'].'" alt="'.$produto['NOME'].'">
            </a>
            </li>';
    }
?>
</ul>