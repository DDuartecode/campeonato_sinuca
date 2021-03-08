<?php 

namespace TestSinuca\Model;

use \TestSinuca\DB\Sql;
use \TestSinuca\Model;



class Championship extends Model {


	public static function listAll()
	{
		$sql = new Sql();

	  	return $sql->select("SELECT DISTINCT b.id_table, b.name_table
										FROM tb_teams_by_tables a
										INNER JOIN tb_tables b ON a.id_table = b.id_table;");
	  	
	}

	public function get($idtable)
	{
		$sql = new Sql();

		return  $sql->select("SELECT * 
								FROM tb_teams_by_tables a 
								INNER JOIN tb_tables b ON a.id_table = b.id_table
								INNER JOIN tb_teams c ON a.id_team = c.id_team
								WHERE a.id_table = :idtable
								ORDER BY a.score_team DESC", [
								
								":idtable"=>$idtable
		]);
	}

	public static function insertScore($idteam, $idtable, $result_game)
	{

		$championship = new Championship;

		$sql = new Sql;

			$results = $sql->select("SELECT score_team, score_by_victory
									FROM tb_teams_by_tables a
									INNER JOIN tb_tables b ON a.id_table = b.id_table
									WHERE a.id_table = :id_table AND a.id_team = :id_team;",[
									
									":id_table"=>$idtable,
									"id_team"=>$idteam

			]);

			$championship->setData($results[0]);

			if($result_game === 'victory'){
				$last_add_score = $championship->getscore_by_victory();
			}else{
				$last_add_score = 0;
			}

			$actual_score = $championship->getscore_team();

			$championship->addScore($idteam, $idtable, $actual_score, $last_add_score );
	}

	public function addScore($idteam, $idtable, $actual_score, $last_add_score)
	{

		$sql = new Sql();

		$sql->query("UPDATE tb_teams_by_tables 
		 			  SET score_team = :actual_score + :last_add_score,  last_add_score = :last_add_score 
		 			  WHERE id_table = :idtable AND id_team = :idteam;)",[
		 	":idteam"=>$idteam,
		 	":idtable"=>$idtable,
		 	":actual_score"=> $actual_score,
		 	":last_add_score"=> $last_add_score

		 ]);
	}



}

 ?>