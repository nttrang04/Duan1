<?php
ob_start();
session_start();
include('admin/config/dbcon.php');


function getAll($table)
{
    global $con;
    $query = "Select * from $table ";
    return $query_run = mysqli_query($con, $query);
}
function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location:' . $url);
    ob_end_flush();
    exit();
}
function getID($table, $id)
{
    global $con;
    $query = "SELECT * FROM $table WHERE id = '$id'";
    return $query_run = mysqli_query($con, $query);
}
function getProductbyCid($table, $cid)
{
    global $con;
    $query = "SELECT * FROM $table WHERE catid = '$cid'";
    return $query_run = mysqli_query($con, $query);
}
function getWishlistItems() {
    global $con;
    $user_id = $_SESSION['auth_user']['user_id'];
    $query = "SELECT wishlist.*, product.image, product.productName , product.price
    FROM wishlist 
    JOIN product ON wishlist.prod_id = product.id 
    WHERE wishlist.user_id = $user_id";
    $result = mysqli_query($con, $query);
    return $result;
}
function getCartItems()
{
    global $con;
    $user_id = $_SESSION['auth_user']['user_id'];
    $query = "SELECT c.id AS cart_id, p.id AS product_id, p.productName, p.image,p.price, c.prod_qty FROM carts c JOIN product p ON c.prod_id = p.id WHERE c.user_id = '$user_id'";


    // $query = "SELECT c.id as p.id , c.prod_id p.id as p.id,p.productName,p.image,p.price 
    // FROM carts c product p WHERE c.prod_id = p.id AND c.user_id = '$user_id' ORDER BY c.id DESC";
    return $query_run = mysqli_query($con, $query);
}

function getOrders()
{
    global $con;
    $user_id = $_SESSION['auth_user']['user_id'];

    $query = "SELECT * FROM orders WHERE user_id = $user_id ORDER BY id DESC";
    return $query_run = mysqli_query($con, $query);
}
# Kiểm tra xe nó gủi cái tracking_no sang có đúng không bên view_orders
function checkTrackingNoValid($tracking_no)
{
    global $con;
    $user_id = $_SESSION['auth_user']['user_id'];

    $query = "SELECT * FROM orders WHERE tracking_no = '$tracking_no' AND user_id = '$user_id' ";
    return $query_run = mysqli_query($con, $query);
}
function getAllTrending()
{
    global $con;
    $query = "SELECT * FROM product WHERE trending ='1' ";
    return $query_run = mysqli_query($con, $query);
}
function getByUID($table, $id)
{
    global $con;
    $query = "Select * from $table where id_user='$id' ";
    return $query_run = mysqli_query($con, $query);
}


?>