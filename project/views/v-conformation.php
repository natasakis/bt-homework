<?php


echo "Postovani/a ".trim($name)." ". trim($lastname) ." na vasu email adresu ".trim($email). " i telefon ".trim($phone)." poslata je potvrda o Vasoj kupovini."; echo "<br>";
echo "Kupili ste ".htmlspecialchars($product['title'])." po ceni od ".htmlspecialchars($product['price']) ; echo "<br>";
echo "Na Vasu adresu ".trim($street) ." " .trim($zip)." ".trim($city)." u najkracem mogucem roku ce biti poslata porudzbina!";




?>