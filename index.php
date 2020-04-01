<?php 
require 'Team.php';

$team1 = new Team();
$team1->setName('Plop');

//var_dump($team1);

$team2 = new Team();
$team2->setName('Plopinette');

//var_dump($team2);

// Je veux que la team1 40
// team2 50
$team1->setNewAttack(100);
$team2->setNewAttack(50);

// var_dump($team1);
// var_dump($team2);

echo $team1->kick($team2);
var_dump($team2);
echo $team1->kick($team2);
var_dump($team2);
echo $team1->kick($team2);
var_dump($team2);