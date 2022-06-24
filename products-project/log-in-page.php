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
$email="";
$password2="";


try {
    $users = User::getAllUsers();
    if(!empty($_POST['login']) && $_POST['login']== "yes") {
    
        // EMAIL
        $email = (string) $_POST['email'];
        $email = trim($email);
        if(empty($email)) {
            $systemErrors['email'] = "Field email is required!";
        }
        if(empty($systemErrors['email']) && !str_contains($email, "@")) {
            $systemErrors['email'] = "Mail must include @!";
        }

        $password2 = (string) $_POST['password2'];
        if(empty($password2)) {
            $systemErrors['password2'] = "Field password is required!";
        }
        if (!empty($password2) && !empty($email)){
        foreach($users as $user){
            if (($user->email != ($email) || $user->password != ($password2))){
                $systemErrors['email'] = "Email and password do not match!";
            }
            else {
                $_SESSION['user'] = $email;
            header('location: ./profile-page.php');
            }
        }
    }
        
        

        if(empty($systemErrors)) {
            $_SESSION['user'] = $email;
            header('location: ./profile-page.php');
            /* * * mysql hostname ** */

        // $hostname = "localhost";
        // /* * * mysql username ** */
        // $username = "root";
        // /* * * mysql password ** */
        // $password = "";
        // /* * * mysql database name ** */
        // $database = "shop-bt";
        // try {
        //     $connection = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);
        //     $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //         $sqlQueryString = "INSERT INTO users (name, last_name, email, password, img) VALUES (?,?,?,?,?)";
        //         $statement = $connection->prepare($sqlQueryString);
        //         $status = $statement->execute([$name,$last_name,$email,$password,$img]);
        //         $_SESSION['user'] = $email;
        //         //$_SESSION['users'] = 1;
        //         //if($img!="") $_SESSION['img']=$img;
        //         //else $_SESSION['img']="./public/theme/img/user.png";
        //         header('location: ./profile-page.php');
                

        // } catch (PDOException $exception) {
        //     echo "Something went wrong: " . $exception->getMessage() . "<br>";
        // }

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
require __DIR__ . "/views/v-log-in.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";