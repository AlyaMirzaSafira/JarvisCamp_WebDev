<?php 
$umur = ["Alya" => 21, "Mirza" => 20];
$umur['Mamat'] = 20;
$umur['Mumun'] = 21;
echo "<br><pre>";
print_r($umur);
echo "</pre>";

foreach ($umur as $key => $value) {
    echo "Namanya : $key <br> Umurnya : $value <br>";
}
?>