<?php
$f1 = "Queries_names_IT.txt";
$f2 = "CityOfMonument.txt";

$content = file_get_contents($f1);
$q1 = explode("\n", $content);

$content = file_get_contents($f2);
$q2 = explode("\n", $content);

$count=0;
foreach ($q1 as $query) {
$out .= $q2[$count]." ".$query."\n";
$count++;
}

 $fh = fopen("QueriesPlusCities.txt", 'w') or die("ERROR: can't open file");
 fwrite($fh, $out);
 fclose($fh);
?>