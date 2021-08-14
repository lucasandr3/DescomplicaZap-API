<?php
global $routes;
$routes = array();

/*
*   Rotas do APP 
*/

// rota de informações do estabelecimento
$routes['/informacao'] = '/infomacao/store';

// rota de abertura ou fechamento da loja
$routes['/informacao'] = '/infomacao/open';

// rota de abertura ou fechamento da loja
$routes['/informacao'] = '/infomacao/platform/${}';

// rota de abertura ou fechamento da loja
$routes['/informacao'] = '/infomacao/openstatus';

// rota de categorias
$routes['/categories'] = '/categories';

// rota de produtos
$routes['/products'] = '/products';
$routes['/products/options'] = '/products/options/{id}';
$routes['/products/names'] = '/products/nameOpt';

// rota de pedidos
$routes['/order'] = 'order/new';

/*
*  Fim das rotas do app
*/


