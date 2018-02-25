<?php
$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"gaa2013");
$result = mysqli_query($connection,"select gameweek,datetime,description,team1,team2,team1gls,team1pts,team2gls,team2pts from games,categories where games.category=categories.id order by datetime");

$rs = array();
$i=0;
while($rs[] = mysqli_fetch_assoc($result)) {
// do nothing ;-)
}
mysqli_close($connection);

unset($rs[count($rs)-1]);  //removes a null value
print(json_encode($rs, JSON_NUMERIC_CHECK));

?>