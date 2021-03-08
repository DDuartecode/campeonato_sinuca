<?php 
session_start(); 
require_once("vendor/autoload.php");
use \Slim\Slim;
use \TestSinuca\Page;
use \TestSinuca\Model\Table;
use \TestSinuca\Model\Team;
use \TestSinuca\Model\Championship;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function(){

	$page = new Page;

	$page->setTpl("index");

});

$app->get('/championships', function(){

	$championships = Championship::listAll();

	$page = new Page;

	$page->setTpl("championships", [
		"championships"=>$championships
	]);

});

$app->get('/championship/:idtable/details',function($idtable){

	$championship = new Championship;

	$teamsChamp = $championship->get($idtable);

	$page = new Page;

	$page->setTpl('/championship-detail', [
		"teamsChamp"=>$teamsChamp,
		"detail"=>$teamsChamp[0]
	]);

});

$app->get('/championship/:idteam/:idtable/victory',function($idteam, $idtable){

	$championship = new Championship;

	$championship->insertScore($idteam, $idtable, 'victory');

	header("Location: /championship/".$idtable."/details");
	exit;

});

$app->get('/championship/:idteam/:idtable/defeat',function($idteam, $idtable){

	$championship = new Championship;

	$championship->insertScore($idteam, $idtable, 'defeat');

	header("Location: /championship/".$idtable."/details");
	exit;

});

$app->get("/tables", function(){

	$tables = Table::listAll();

	$page = new Page;

	$page->setTpl("tables", [
		"tables"=>$tables
	]);
});

$app->get("/tables/create", function(){

	$page = new Page;

	$page->setTpl("tables-create");
});

$app->post("/tables/create", function(){

	$table = new Table;

	$table->setData($_POST);

	$table->save();

	header("Location: /tables");
	exit;

});

$app->get("/table/update/:idtable", function($idtable){

	$table = new Table;

	$table->get((int)$idtable);

	$page = new Page;

	$page->setTpl("/table-update", [
		"table"=>$table->getValues()
	]);

});

$app->post("/table/update", function(){

	$table = new Table;

	$table->setData($_POST);

	$table->save();

	header("Location: /tables");
	exit;

});

$app->get("/table/delete/:idtable", function($idtable){

	$table = new Table;

	$table->get((int)$idtable);

	$table->delete();

	header("Location: /tables");
	exit;

});

$app->get("/teams",function(){

	$teams = Team::listAll();

	$page = new Page;

	$page->setTpl("teams", [
		"teams"=>$teams
	]);
});

$app->get("/team/create", function(){


	$page = new Page;

	$page->setTpl("teams-create");
});

$app->post("/team/create", function(){

	$table = new Team;

	$table->setData($_POST);

	$table->save();

	header("Location: /teams");
	exit;

});

$app->get("/team/update/:idteam", function($idteam){

	$team = new Team;

	$team->get((int)$idteam);

	$page = new Page;

	$page->setTpl("/team-update", [
		"team"=>$team->getValues()
	]);

});

$app->post("/team/update", function(){

	$team = new Team;

	$team->setData($_POST);

	$team->save();

	header("Location: /teams");
	exit;

});

$app->get("/team/delete/:idteam", function($idteam){

	$team = new Team;

	$team->get((int)$idteam);

	$team->delete();

	header("Location: /teams");
	exit;

});


$app->get("/team-table/:idtable", function($idtable){

	$table = new Table;

	$table->get((int)$idtable);

	$page = new Page;

	$page->setTpl("team-table",[
		'table'=>$table->getValues(),
		'teamsRelated'=>$table->getTeams(),
		'teamsNotRelated'=>$table->getTeams(false)
	]);
	exit;

});

$app->get("/team-table/:idtable/:idteam/add", function($idtable, $idteam){

	$table = new Table();

	$table->get((int)$idtable);

	$team = new Team();

	$team->get((int)$idteam);

	$table->addTeam($team);

	header("Location: /team-table/".$idtable);
	exit;

});

$app->get("/team-table/:idtable/:idteam/remove", function($idtable, $idteam){

	$table = new Table();

	$table->get((int)$idtable);

	$team = new Team();

	$team->get((int)$idteam);

	$table->removeTeam($team);

	header("Location: /team-table/".$idtable);
	exit;

});

$app->get("/team-table/score/:idtable", function($idtable){

	$championship = new Championship;

	$teamsChamp = $championship->get($idtable);

	echo (json_encode($teamsChamp));

});


$app->run();

 ?>