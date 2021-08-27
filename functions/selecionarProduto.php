<?php

function selecionarProduto($id)
{
    require_once "./../data/produtos.php";

    return $listaProdutos[$id];
}
