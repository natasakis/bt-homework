<?php
session_start();
//if(empty($_SESSION['user'])) {
//    header("Location: ./all-products-page.php");
//}

// REQUIRE CLASSES
require_once __DIR__ . "/Models/Model.php";
require_once __DIR__ . "/Models/Product.php";

$systemErrors = [];
$title="";
$description="";
$status="";
$price="";
$barcode="";
$img="";


try {
    //$users = User::getAllUsers();

    if(!empty($_POST['addfile']) && $_POST['addfile']== "yes") {
        $title = (string) $_POST['title'];
        $title = trim($title);
        if(empty($title)) {
            $systemErrors['title'] = "Field title is required!";
        }
        $description = (string) $_POST['description'];
        $description = trim($description);
        if(empty($description)) {
            $systemErrors['description'] = "Field description is required!";
        }
        $status = (string) $_POST['status'];
        $status = trim($status);
        if(empty($status)) {
            $systemErrors['status'] = "Field status is required!";
        }
        if ($status!='1' && $status!='0'){
            $systemErrors['status'] = "Field status can be 0 or 1!";
        }
        $price = (string) $_POST['price'];
        if(empty($price)) {
            $systemErrors['price'] = "Field price is required!";
        }
        if (!is_numeric($price)){
            $systemErrors['price'] = "Field price must be a number!";
        }
        // PHONE
        $barcode = (string) $_POST['barcode'];
        $barcode = trim($barcode);
        if(empty($barcode)) {
            $systemErrors['barcode'] = "Field barcode is required!";
        }
        if (!is_numeric($barcode)){
            $systemErrors['barcode'] = "Field barcode must only contain numbers!";
        }
        $img = (string) $_POST['img'];
        $img = trim($img);
        if(empty($systemErrors)) {
            $hostname = "localhost";
            /* * * mysql username ** */
            $username = "root";
            /* * * mysql password ** */
            $passwordd = "";
            /* * * mysql database name ** */
            $database = "shop-bt";
            $stock=rand(1, 10);
            $status=1;
            try {
                $connection = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $passwordd);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sqlQueryString = "INSERT INTO ec_products (title, description, price, stock, img, status, barcode) VALUES (?,?,?,?,?,?,?)";
                    $statement = $connection->prepare($sqlQueryString);
                    $status = $statement->execute([$title,$description,$price,$stock,$img,$status,$barcode]);
                    //$_SESSION['user'] = $email;
                    //$_SESSION['users'] = 1;
                    //if($img!="") $_SESSION['img']=$img;
                    //else $_SESSION['img']="./public/theme/img/user.png";
                    header('location: ./add-file-page.php');
                    
    
            } catch (PDOException $exception) {
                echo "Something went wrong: " . $exception->getMessage() . "<br>";
            }





            //$_SESSION['user'] = 1;
//header('Location: ./index.php');

        }
    }
} catch (\Throwable $th) {
    $_SESSION['cart'] = [];
    //header("Location: ./");
}









// USING MODELS
//use Models\Product\User;

//try {
//    $user = new User($_SESSION['user']);
//    $logeduser = $user->getUser();
//} catch (\Throwable $th) {
//    header("Location: ./");
//}


// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-addfile.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";