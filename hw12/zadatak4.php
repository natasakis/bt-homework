<html>
    <head><title>Zadatak 4</title></head>
    <body>
<?php
$drvo=100-1;//jer je za dan 1 visina drveta 100cm
$puz=0;
$dani=0;
while ($puz<$drvo){
    $drvo+=1;
    $puz+=3;
    $dani+=1;
    echo "Dan " . $dani .": Puz je presao " .$puz."cm, visina drveta je ".$drvo."cm.<br>";
}
echo "<br>Puz se popeo na drvo za ". $dani ." dana.";
?>
    </body>
</html>