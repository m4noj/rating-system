<?php include "includes/elo.php";

$Ra = 2000;
$Rb = 1700;
echo <<<END
<style>body{font-family:consolas;margin:2rem;}	p {font-size: 1.1rem;font-weight: bold;}</style>
<h1>Rating System (Implementation of <a href='https://en.wikipedia.org/wiki/Elo_rating_system'>Elo's rating algorithm</a> in PHP)</h1>
The final rating is based on the current scores(win or loss) of <b>A</b> and <b>B</b>, and the one with highesr current rating loses more points to the other when lost,than he could gain if wins.same the other way.   
<p>Current Rating of A =  $Ra<br></br>
Current Rating of B =  $Rb</p>so,
<h2>If A Wins : </h2>
END;

$Sa = 1; //win
$Sb = 0; //loss
$elo = new Elo;
$elo->new_rating($Ra,$Rb,$Sa,$Sb);
print_r($fR = $elo->get_ratings());
$fRa = $fR[0];
$fRb = $fR[1];

echo "<p>Final Rating of A --> $fRa (Gains ".ceil($fRa - $Ra)." points from B)<br></br>";
echo "Final Rating of B --> $fRb (Loses ".abs(ceil($fRb - $Rb))." points to A)</p>and";
echo "<h2>If B Wins : </h2>";

$Sa = 0;
$Sb = 1;
$elo->new_rating($Ra,$Rb,$Sa,$Sb);
$fR = $elo->get_ratings();
$fRa = $fR[0];
$fRb = $fR[1];

echo "<p>Final Rating of A --> $fRa (Loses ".abs(ceil($fRa - $Ra))." points to B)<br><br>";
echo "Final Rating of B --> $fRb (Gains ".ceil($fRb - $Rb)." points from A)</p>";






