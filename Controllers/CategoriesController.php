<?php
namespace Controllers;

use \Core\Controller;
use \Models\Categorie;

class CategoriesController extends Controller {

    public function index()
    {
        $categorie = new Categorie();
        $categories = $categorie->all();
        $this->returnJson($categories);
    }
}