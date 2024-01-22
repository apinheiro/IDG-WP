<?php
/***
 * 
 * Busca no acervo
 * 
 * Esta parte do template trata da busca em todo o acervo no tainacan.
 * 
 * @author André Pinheiro -- UFF
 */
?>
<div class="container mt-5 mb-5">
    <div class="row justify-content-md-center mt-5 mb-5 align-items-center">
        <div class="col-2 text-center font-weight-bold text-interactive mt-5 mb-5 text-up-02">Pesquisa geral no acervo</div>
        <div class="col-10 mt-5 mb-5 br-input has-icon">
            <form method="get" name="form_tainacan" action="/">
            <input id="searchbox" type="text" placeholder="O que você procura?" value="" name="s" class="rounder-lg" />
                <button class="br-button circle small" type="submit" aria-label="Pesquisar"><i class="fas fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </div>
</div>