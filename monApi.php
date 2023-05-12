 <!DOCTYPE html>
<html>
<head>
		<title>API et json</title>
		<meta charset="utf-8" />	
</head>
<body>

<h2>API php et json</h2>



<?php
$jour=getdate();
$format = $_GET['format'];
switch($format){
    case $format == 'complet':
        $complet = array('jour' => $jour["weekday"], 'mois' => $jour["month"], 'annee' => $jour["year"], 'heure' => $jour["hours"], 'minute' => $jour["minutes"], 'seconde' => $jour["seconds"]);
        $complet_json= json_encode($complet);
        echo $complet_json;
        break;
    case $format == 'date':
        $date = array('jour' => $jour["weekday"], 'mois' => $jour["month"], 'annee' => $jour["year"]);
        $date_json= json_encode($date);
        echo $date_json;
        break;
    case $format == 'heure':
        $heure = array('heure' => $jour["hours"], 'minute' => $jour["minutes"], 'seconde' => $jour["seconds"]);
        $heure_json= json_encode($heure);
        echo $heure_json;
        break;
    default:
        $nonprevu = array('erreur' => 'option non connue');
        $nonprevus_json= json_encode($nonprevu);
        echo $nonprevus_json;
        break;
}
?>
</body>
</html>