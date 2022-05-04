<?php
$name=$_GET['ime'];
$name=ucfirst($name);
$lastname=$_GET['prezime'];
$lastname=ucfirst($lastname);
$mail=$_GET['email'];
$sifra=$_GET['password1'];
$sifra2=$_GET['password2'];
$gender=$_GET['pol'];
$lista_kurseva=$_GET['kurs'];
if (empty($name)) {
    echo "Niste upisali ime!";
}else if (empty($lastname)){
    echo "Niste upisali prezime!";
}else if (empty($mail)){
    echo "Niste upisali email!";
}else if (empty($sifra)){
    echo "Niste uneli sifru!";
}else if ($sifra!=$sifra2){
    echo "Lozinke se ne poklapaju!";
}else{
    if ($gender=="Z"){
        echo "Postovana ";
    }
    else if ($gender=="M") echo "Postovani ";
    else echo "Postovana/i ";
    echo "$name $lastname, <br>";
    echo "Uspesno ste se registrovali na nasem sajtu.<br>";
    echo "Vasa lozinka je: $sifra <br>";
    echo "Vas username je: $mail <br>";
    echo "Vasi odabrani kursevi su: ";
    foreach ($lista_kurseva as $kurs)
        echo $kurs ." ";
}
?>