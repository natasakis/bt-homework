<html>
    <head><title>Zadatak3</title></head>
    <body>
    <form method="POST" action="zadatak3.php">
            <label for="broj">Uneti prirodan broj:</label>
            <input type="text" name="broj" id="broj" value="">
            <input type="submit" name="dugme">
    </form>
    <?php
        $sum=0;
        if (!empty($_POST['broj'])){
            $num=$_POST['broj'];
            if ($num>0){
                $sum=0;
                for($i=1;$i<=$num;$i++){
                    $sum+=$i;
                }
                echo "Suma prvih ".$num." prirodnih brojeva je ".$sum;
            }
            else echo "Broj je manji od 0!";
        }
        else echo "Niste uneli broj!";
    ?>
    </body>
</html>