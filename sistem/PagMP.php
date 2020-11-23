<?php

// SDK de Mercado Pago
require 'lib/vendor/autoload.php';

// Configura credenciais
MercadoPago\SDK::setAccessToken('TEST-4232651419871898-102118-41411c4afc896c0a6e931834898f6e02-661737745');

// Cria um objeto de preferência
$preference = new MercadoPago\Preference();

// Cria um item na preferência
$item = new MercadoPago\Item();
$item->title = 'Venda - ' . $idVenda;
$item->quantity = 1;
$item->unit_price = $total;
$preference->items = array($item);
$preference->save();