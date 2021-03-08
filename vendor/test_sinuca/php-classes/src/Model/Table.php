<?php 

namespace TestSinuca\Model;

use \TestSinuca\DB\Sql;
use \TestSinuca\Model;



class Table extends Model {


	public static function listAll()
	{
		$sql = new Sql();

	 return $sql->select("SELECT * FROM tb_tables ORDER BY id_table");

	}


	public function save()
	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_table_save(:id_table, :name_table, :awardDescription_table, :maximum_score, :rule_score, :maximum_team_number, :score_by_victory)", array(
			":id_table"=>$this->getid_table(),
			":name_table"=>$this->getname_table(),
			":awardDescription_table"=>$this->getawardDescription_table(),
			":maximum_score"=>$this->getmaximum_score(),
			":rule_score"=>$this->getrule_score(),
			":maximum_team_number"=>$this->getmaximum_team_number(),
			":score_by_victory"=>$this->getscore_by_victory()
		));

		$this->setData($results[0]);

	}

	public function get($idtable)
	{
		$sql = new Sql();

		$results =	$sql->select("SELECT * FROM tb_tables WHERE id_table = :idtable", [
			":idtable"=>$idtable
		]);

		$this->setData($results[0]);
	}

	public function delete()
	{
		$sql = new Sql();

		$sql->query("DELETE FROM tb_tables WHERE id_table = :idtable", [
			":idtable"=>$this->getid_table()
		]);

	}

	public function getTeams($related = true)
	{
		$sql = new Sql();

		if($related === true ){

			return	$sql->select("SELECT * FROM tb_teams WHERE id_team IN(
								SELECT a.id_team
								FROM tb_teams a
								INNER JOIN tb_teams_by_tables b ON a.id_team = b.id_team
								WHERE b.id_table = :id_table
							);
						", [
							":id_table"=>$this->getid_table()
						]);
		}else{

			return	$sql->select("SELECT * FROM tb_teams WHERE id_team NOT IN(
								SELECT a.id_team
								FROM tb_teams a
								INNER JOIN tb_teams_by_tables b ON a.id_team = b.id_team
								WHERE b.id_table = :id_table
							);
						", [
							":id_table"=>$this->getid_table()
						]);
		}
	}

	public function addTeam(Team $team)
	{
		$sql = new Sql();

		$results = $sql->select("SELECT COUNT(a.id_table) AS team_number, maximum_team_number 
									FROM tb_teams_by_tables a
									INNER JOIN tb_tables b ON a.id_table = b.id_table
									WHERE a.id_table =".$this->getid_table().";");
		$this->setData($results[0]);

		if($this->getteam_number() <= $this->getmaximum_team_number()){
			$sql->query("INSERT INTO tb_teams_by_tables (id_team, id_table, score_team) VALUES(:id_team, :id_table, :score_team)", [
				':id_team'=>$team->getid_team(),
				':id_table'=>$this->getid_table(),
				':score_team'=>0
			]);
		}else{

			throw new \Exception("Ação não permitida(Número máximo de times excedido)");
			
		}

	}

	public function removeTeam(Team $team)
	{
		$sql = new Sql();

		$sql->query("DELETE FROM tb_teams_by_tables WHERE id_team = :id_team AND id_table = :id_table", [
			':id_team'=>$team->getid_team(),
			':id_table'=>$this->getid_table()
		]);
	}

}

 ?>