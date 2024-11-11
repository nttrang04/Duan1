<?php
session_start();
include('../admin/config/dbcon.php');

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location:' . $url);
    exit(0);
}

if (isset($_SESSION['auth'])) {
    if (isset($_POST['scope'])) {
        $scope = $_POST['scope'];
        switch ($scope) {
            case "add": // thêm vào giỏ hàng
                $prodid = $_POST['prodid'];
                $prodqty = $_POST['prodqty'];
                $user_id = $_SESSION['auth_user']['user_id'];
                $check_existing_cart = "SELECT * FROM carts WHERE prod_id = '$prodid' AND user_id = '$user_id'";
                $check_existing_cart_run = mysqli_query($con, $check_existing_cart);
                if (mysqli_num_rows($check_existing_cart_run) > 0) {
                    echo '<div class="alert alert-danger alert-dismissible mt2"><strong> Sản phẩm đã có trong giỏ hàng </strong></div>';
                } else {
                    $insert_query = "INSERT INTO carts (user_id,prod_id,prod_qty) VALUES ('$user_id','$prodid','$prodqty')";
                    $insert_query_run = mysqli_query($con, $insert_query);
                    if ($insert_query_run) {
                        echo '<div class="alert alert-success alert-dismissible mt2"><strong> Đã thêm sản phẩm vào giỏ hàng </strong></div>';
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible mt2"><strong> Thêm sản phẩm bị lỗi</strong></div>';
                    }
                }
                break;
            case "update": // cập nhật lại giỏ hàng
                $prod_id = $_POST['prod_id'];
                $prod_qty = $_POST['prod_qty'];
                $user_id = $_SESSION['auth_user']['user_id'];
                $check_existing_cart = "SELECT * FROM carts WHERE prod_id = '$prod_id' AND user_id = '$user_id'";
                $check_existing_cart_run = mysqli_query($con, $check_existing_cart);
                if (mysqli_num_rows($check_existing_cart_run) > 0) {
                    $update_query = "UPDATE carts SET prod_qty = '$prod_qty' WHERE prod_id = '$prod_id' AND user_id = '$user_id' ";
                    $update_query_run = mysqli_query($con, $update_query);
                    if ($update_query_run) {
                        echo '<div class="alert alert-success alert-dismissible mt2"><strong>Cập nhật số lượng thành công</strong></div>';
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible mt2"><strong>Cập nhật số lượng không thành công</strong></div>';
                    }
                } else {
                    echo '<div class="alert alert-danger alert-dismissible mt2"><strong>Đã xảy ra sự cố!</strong></div>';
                }
                break;
            case "delete":
                $cart_id = $_POST['cart_id'];
                $user_id = $_SESSION['auth_user']['user_id'];
                $check_existing_cart = "SELECT * FROM carts WHERE id = '$cart_id' AND user_id = '$user_id'";
                $check_existing_cart_run = mysqli_query($con, $check_existing_cart);

                if (mysqli_num_rows($check_existing_cart_run) > 0) {
                    $delete_query = "DELETE FROM carts WHERE id ='$cart_id' ";
                    $delete_query_run = mysqli_query($con, $delete_query);
                    if ($delete_query_run) {
                        echo '<div class="alert alert-success alert-dismissible mt2"><strong>Xóa sản phẩm thành công</strong></div>';
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible mt2"><strong>Xóa sản phẩm không thành công</strong></div>';
                    }
                } else {
                    echo '<div class="alert alert-danger alert-dismissible mt2"><strong>Đã xảy ra sự cố!</strong></div>';
                }
                break;
            case "wishlist": // thêm vào wishlist
                $prodid = $_POST['prod_id'];
                $user_id = $_SESSION['auth_user']['user_id'];

                // Kiểm tra xem sản phẩm đã có trong wishlist chưa
                $check_existing_wishlist = "SELECT * FROM wishlist WHERE prod_id = '$prodid' AND user_id = '$user_id'";
                $check_existing_wishlist_run = mysqli_query($con, $check_existing_wishlist);

                if (mysqli_num_rows($check_existing_wishlist_run) > 0) {
                    echo '<div class="alert alert-danger alert-dismissible mt2"><strong> Sản phẩm đã có trong Yêu thích </strong></div>';
                } else {
                    // Thêm sản phẩm vào wishlist
                    $insert_wishlist_query = "INSERT INTO wishlist (user_id, prod_id) VALUES ('$user_id', '$prodid')";
                    $insert_wishlist_query_run = mysqli_query($con, $insert_wishlist_query);

                    if ($insert_wishlist_query_run) {
                        echo '<div class="alert alert-success alert-dismissible mt2"><strong> Đã thêm sản phẩm vào Yêu thích </strong></div>';
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible mt2"><strong> Thêm sản phẩm vào Yêu thích bị lỗi</strong></div>';
                    }
                }
                break;
            case "delete_wishlist": // xóa khỏi wishlist
                $wishlist_id = $_POST['wishlist_id'];
                $user_id = $_SESSION['auth_user']['user_id'];

                // Kiểm tra xem sản phẩm có trong wishlist không
                $check_existing_wishlist = "SELECT * FROM wishlist WHERE id = '$wishlist_id' AND user_id = '$user_id'";
                $check_existing_wishlist_run = mysqli_query($con, $check_existing_wishlist);

                if (mysqli_num_rows($check_existing_wishlist_run) > 0) {
                    // Xóa sản phẩm khỏi wishlist
                    $delete_wishlist_query = "DELETE FROM wishlist WHERE id = '$wishlist_id' AND user_id = '$user_id'";
                    $delete_wishlist_query_run = mysqli_query($con, $delete_wishlist_query);

                    if ($delete_wishlist_query_run) {
                        // echo "123";
                       echo '<div class="alert alert-success alert-dismissible mt2 fw-bold">Sản phẩm đã bị xóa khỏi Yêu thích<strong></strong></div>';
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible mt2"><strong>Xóa sản phẩm khỏi Yêu thích bị lỗi</strong></div>';
                    }
                } else {
                    echo '<div class="alert alert-danger alert-dismissible mt2"><strong>Sản phẩm không tồn tại trong Yêu thích</strong></div>';
                }
                break;


            default:
                echo '<div class="alert alert-danger alert-dismissible mt2"><strong>Đã xảy ra sự cố1!</strong></div>';
                break;
        }
    }
} else {
    echo '<div class="alert alert-danger alert-dismissible mt2"><strong> Bạn cần phải <a href="login.php">ĐĂNG NHẬP</a> trước khi thực hiện! </strong></div>';
}
?>