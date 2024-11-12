<?php

include("Team.php");


if (isset($_GET['teamName'], $_GET['home1'], $_GET['away1'], $_GET['home2'], $_GET['away2'], $_GET['home3'], $_GET['away3'])) {
 
    $teamName = $_GET['teamName'];
    $homeScore1 = (int)$_GET['home1'];
    $awayScore1 = (int)$_GET['away1'];
    $homeScore2 = (int)$_GET['home2'];
    $awayScore2 = (int)$_GET['away2'];
    $homeScore3 = (int)$_GET['home3'];
    $awayScore3 = (int)$_GET['away3'];

 
    $homeTeam = new Team($teamName);

  
    $homeTeam->finalScore($homeScore1, $awayScore1);
    $homeTeam->finalScore($homeScore2, $awayScore2);
    $homeTeam->finalScore($homeScore3, $awayScore3);

    echo "Team Name: " . htmlspecialchars($teamName) . "<br>";
    echo "Goal Average: " . $homeTeam->getGoalAverage();
} else {
    echo "Error: Missing required data. Please fill out the form correctly.";
}
?>



