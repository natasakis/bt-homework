<?php
session_start();
// if(empty($_SESSION['cart'])) {
//     header("Location: ./all-products-page.php");
// }

require_once __DIR__ . "/Models/Model.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/User.php";
require_once __DIR__ . "/Lib/ShoppingCart.php";
require_once __DIR__ . "/Lib/ShoppingCartItem.php";

use Models\User\User;

$systemErrors = [];
$oldp="";
$newp="";


try {
    $users = User::getAllUsers();
    if(!empty($_POST['change']) && $_POST['change']== "yes") {
    
        // EMAIL
        $oldp = (string) $_POST['oldp'];
        if(empty($oldp)) {
            $systemErrors['oldp'] = "Field old password is required!";
        }

        $newp = (string) $_POST['newp'];
        if(empty($newp)) {
            $systemErrors['newp'] = "Field new password is required!";
        }
        if (!empty($oldp) && !empty($newp)){
            if ($oldp==$newp) $systemErrors['newp']="New password can't be the same as old password!";
        }
        
        

        if(empty($systemErrors)) {
            /* * * mysql hostname ** */

        $hostname = "localhost";
        /* * * mysql username ** */
        $username = "root";
        /* * * mysql password ** */
        $password = "";
        /* * * mysql database name ** */
        $database = "shop-bt";
        try {
            $connection = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sqlQueryString ="UPDATE users SET password= '$newp' WHERE password='$oldp'";
                $statement = $connection->prepare($sqlQueryString);
                $status = $statement->execute();
    
                //$_SESSION['users'] = 1;
                //if($img!="") $_SESSION['img']=$img;
                //else $_SESSION['img']="./public/theme/img/user.png";
                header('location: ./profile-page.php');
                

        } catch (PDOException $exception) {
            echo "Something went wrong: " . $exception->getMessage() . "<br>";
        }

        }



            //$_SESSION['user'] = 1;
//header('Location: ./index.php');
}}catch (\Throwable $th) {
    $_SESSION['cart'] = [];
    header("Location: ./");
}





// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-change.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";