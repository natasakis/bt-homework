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
$name="";
$last_name="";
$email="";
$password="";
$img="";

try {
    $users = User::getAllUsers();
    if(!empty($_POST['register']) && $_POST['register']== "yes") {
        // NAME
        $name = (string) $_POST['name'];
        $name = trim($name);
        if(empty($name)) {
            $systemErrors['name'] = "Field name is required!";
        }
        // LAST NAME
        $last_name = (string) $_POST['last_name'];
        $last_name = trim($last_name);
        if(empty($last_name)) {
            $systemErrors['last_name'] = "Field last name is required!";
        }
        // EMAIL
        $email = (string) $_POST['email'];
        $email = trim($email);
        if(empty($email)) {
            $systemErrors['email'] = "Field email is required!";
        }
        if(empty($systemErrors['email']) && !str_contains($email, "@")) {
            $systemErrors['email'] = "Mail must include @!";
        }
        foreach($users as $user){
            if($user->email==($email)){
                $systemErrors['email']="Email already exists!";
            }
        }
        $password = (string) $_POST['password'];
        if(empty($password)) {
            $systemErrors['password'] = "Field password is required!";
        }
        
        $img = (string) $_POST['img'];

        if(empty($systemErrors)) {
            /* * * mysql hostname ** */

        $hostname = "localhost";
        /* * * mysql username ** */
        $username = "root";
        /* * * mysql password ** */
        $password1 = "";
        /* * * mysql database name ** */
        $database = "shop-bt";
        try {
            $connection = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password1);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sqlQueryString = "INSERT INTO users (name, last_name, email, password, img) VALUES (?,?,?,?,?)";
                $statement = $connection->prepare($sqlQueryString);
                $status = $statement->execute([$name,$last_name,$email,$password,$img]);
                $_SESSION['user'] = $email;
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
require __DIR__ . "/views/v-register.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";