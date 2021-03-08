<?php 

namespace TestSinuca\Model;

use \TestSinuca\DB\Sql;
use \TestSinuca\Model;


class Team extends Model {


	public static function listAll()
	{
		$sql = new Sql();

	 return	$sql->select("SELECT * FROM tb_teams ORDER BY id_team");
	}

	public static function checkList($list)
	{
		foreach ($list as &$row){

			$p = new Team();
			$p->setData($row);
			$row = $p->getValues();

		}

		return $list;
	}

	public function save()
	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_team_save(:id_team, :name_team, :player1, :player2)", array(
			":id_team"=>$this->getid_team(),
			":name_team"=>$this->getname_team(),
			":player1"=>$this->getplayer1(),
			":player2"=>$this->getplayer2()
		));

		$this->setData($results[0]);

	}

	public function get($idteam)
	{
		$sql = new Sql();

		$results =	$sql->select("SELECT * FROM tb_teams WHERE id_team = :idteam", [
			":idteam"=>$idteam
		]);

		$this->setData($results[0]);
	}

	public function delete()
	{
		$sql = new Sql();

		$sql->query("DELETE FROM tb_teams WHERE id_team = :idteam", [
			":idteam"=>$this->getid_team()
		]);

	}

}

 ?>