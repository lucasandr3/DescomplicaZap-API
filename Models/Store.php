<?php
namespace Models;

use \Core\Model;

class Store extends Model {

	public function getData()
	{
		$sql = "SELECT * FROM informacoes";
		$sql = $this->db->query($sql);
		return $resposta = $sql->fetch(\PDO::FETCH_ASSOC);
	}

	public function getBairros()
	{
		$sql = "SELECT * FROM bairros";
		$sql = $this->db->query($sql);
		return $resposta = $sql->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function openStore($status)
	{
		$sql = "UPDATE informacoes SET open = :open";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':open', $status);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function getStatus()
	{
		$sql = "SELECT open FROM informacoes";
		$sql = $this->db->query($sql);
		return $status = $sql->fetch(\PDO::FETCH_ASSOC);
	}

	public function savePlatform($platform)
	{
		$sql ="INSERT INTO platform_access SET platform = :p";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':p', $platform);
		$sql->execute();
	}

}