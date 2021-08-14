<?php
namespace Controllers;

use \Core\Controller;
use \Models\Product;

class ProductsController extends Controller {

    public function index()
    {
        $product  = new Product();
        $products = $product->all();
        $this->returnJson($products);
    }

    public function options($id_product)
    {
        $product  = new Product();
        $options = $product->getAllOptionsProduct($id_product);
        //$products = 'id do produto: '. $id_product;
     
        $this->returnJson($options);
    }

    public function nameOpt()
    {
        $product  = new Product();
        $nameOpt = $product->getAlloptionsCategory();
        //$products = 'id do produto: '. $id_product;
        $this->returnJson($nameOpt);
    }
}