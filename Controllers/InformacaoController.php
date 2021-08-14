<?php
namespace Controllers;

use \Core\Controller;
use \Models\Store;

class InformacaoController extends Controller {

	public function index() {}

	public function store() {

		$store = new Store();
		$resposta = $store->getData();
		$this->returnJson($resposta);
	}

	public function visualizar_usuarios($id) {
		echo "ID: ".$id;
	}

	public function open()
	{ 
		$store = new Store();

		$status = $_POST['status'];
		if ($store->openStore($status)) {
			
			$resposta['code'] = 0;
			$resposta['msg'] = 'Loja aberta com Sucesso';
			$this->returnJson($resposta);
	
		} else {
				
			$resposta['code'] = 5;
			$resposta['msg'] = 'Erro ao fechar loja, tente novamente ou entre em contato com o suporte.';
			$this->returnJson($resposta);
	
		}
	}

	public function openstatus()
	{
		$store = new Store();
		$status = $store->getStatus();
		$resposta['status'] = $status['open'];
		$this->returnJson($resposta);
	}

	public function bairros()
	{
		$store = new Store();
		$resposta = $store->getBairros();
		$this->returnJson($resposta);
	}

	public function platform($platform)
	{
		$store = new Store();
		$store->savePlatform($platform);
		exit;
	}

}