<?php

session_start();

// include('myfunctions.php');

include('../admin/config/dbcon.php');

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location:' . $url);
    exit(0);
}
use PHPMailer\PHPMailer\PHPMailer;

function send_password_reset($username, $useremail, $token)
{
    $body = "
        <h2>Chào bạn</h2>
        <h3>Bạn muốn đặt lại mật khẩu mới vì bạn đã quên nó.</h3>
        <a href='http://localhost/bannoithat/password-change.php?token=$token&email=$useremail'> Click Me </a>
            ";
    $subject = 'Thay đổi mật khẩu';

    require_once "../PHPMailer/PHPMailer.php";
    require_once "../PHPMailer/SMTP.php";
    require_once "../PHPMailer/Exception.php";
    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com"; // smtp address of your email
    $mail->SMTPAuth = true;
    $mail->Username = '19004002@st.vlute.edu.vn';
    $mail->Password = 'tvwdnotidmkwhfor';
    $mail->Port = 587; // port
    $mail->SMTPSecure = "tls"; // tls or ssl
    $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ]);

    $mail->isHTML(true);
    $mail->setFrom('19004002@st.vlute.edu.vn', 'NoiThatViet');
    $mail->addAddress($useremail); // enter email address whom you want to send
    $mail->Subject = ("$subject");
    $mail->Body = $body;
    $mail->send();




}




if (isset($_POST['register_btn'])) {

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, md5($_POST['password']));
    $cpassword = mysqli_real_escape_string($con, md5($_POST['cpassword']));

    //check email
    $check_email_query = "Select email from users where email = '$email' ";
    $check_email_query_run = mysqli_query($con, $check_email_query);
    if (mysqli_num_rows($check_email_query_run) > 0) {


        $_SESSION['message'] = 'Email đã được đăng kí';
        header('Location: ../register.php');
    } else {

        if ($password == $cpassword) {
            // 
            $insert_query = "insert into users (name,email,phone,password) values ('$name','$email','$phone','$password')";
            $insert_query_run = mysqli_query($con, $insert_query);

            if ($insert_query_run) {
                // redirect("../login.php","Đăng kí thành công");
                $_SESSION['message'] = "Đăng kí thành công";
                header('Location: ../login.php');
            } else {
                // redirect("../register.php","Đăng kí thất bại");
                $_SESSION['message'] = "Đăng kí thất bại";
                header('Location: ../register.php');
            }

        } else {
            // redirect("../register.php","Mật khẩu không khớp");
            $_SESSION['message'] = "Mật khẩu không khớp";
            header('Location: ../register.php');
        }
    }



}
if (isset($_POST['login_btn'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, md5($_POST['password']));
    // Kiểm tra xem đã có biến phiên lưu số lần đăng nhập không thành công hay chưa
    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = 0; // Nếu chưa có, khởi tạo là 0
        $_SESSION['last_login_attempt_time'] = time(); // Lưu thời gian cuối cùng cố gắng đăng nhập
    }
    $reset_time = 60; // Thời gian tạm khóa (1 phút)
    // Kiểm tra số lần đăng nhập không thành công và thời gian cuối cùng
    $current_time = time();
    if ($current_time - $_SESSION['last_login_attempt_time'] >= $reset_time) {
        // Nếu đã qua đủ thời gian tạm khóa, reset login_attempts về 0
        $_SESSION['login_attempts'] = 0;
    }
    // Kiểm tra số lần đăng nhập không thành công
    if ($_SESSION['login_attempts'] >= 5) {
        // Nếu số lần vượt quá 5, thông báo và không cho đăng nhập nữa
        $_SESSION['message'] = "Số lần đăng nhập không thành công quá nhiều. Hãy thử lại sau.";
        header('Location: ../login.php');
        exit;
    }

    $login_query = "Select * from users where email = '$email' and password = '$password' ";
    $login_query_run = mysqli_query($con, $login_query);

    if (mysqli_num_rows($login_query_run) > 0) {




        $userdata = mysqli_fetch_array($login_query_run);
        $userid = $userdata['id_user'];
        $username = $userdata['name'];
        $useremail = $userdata['email'];
        $type = $userdata['type']; // lấy type trong sql
        $status = $userdata['status'];
        if ($status == 1) {
            $_SESSION['message'] = "Tài khoản bạn đã bị khóa.Hãy liên hệ với quản trị để mở khóa tài khoản: <a href=\"mailto:nguyenvanducan2000@gmail.com\">Gửi email</a>";

            header('Location: ../login.php');
            exit;
        }
        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'user_id' => $userid,
            'name' => $username,
            'email' => $useremail,

        ];
        //phân quyền
        $_SESSION['type'] = $type;

        if ($type == 1) {
            // redirect("../admin/index.php","Chào bạn đến với Admin");
            $_SESSION['message'] = "Chào bạn đến với Admin";
            header('Location: ../admin/index.php');
        } else if ($type == 2) {
            $_SESSION['message'] = "Chào nhân viên đến với Admin";
            header('Location:../admin/index.php');
        } else {
            // redirect("../index.php","Đăng nhập thành công");
            $_SESSION['message'] = "Đăng nhập thành công";
            header('Location: ../index.php');
        }

        // Reset số lần đăng nhập không thành công và thời gian cuối cùng
        $_SESSION['login_attempts'] = 0;
        $_SESSION['last_login_attempt_time'] = $current_time;
    } else {
        $_SESSION['last_login_attempt_time'] = $current_time;
        $_SESSION['login_attempts']++; // Tăng số lần đăng nhập không thành công

        $_SESSION['message'] = "Đăng nhập không thành công";
        header('Location: ../login.php');
    }


}

if (isset($_POST['password-reset-link'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $token = md5(rand());

    $check_email_query = "Select * from users where email = '$email' ";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if (mysqli_num_rows($check_email_query_run) > 0) {
        $userdata = mysqli_fetch_array($check_email_query_run);
        $username = $userdata['name'];
        $useremail = $userdata['email'];

        $update_token = "UPDATE users SET token = '$token' WHERE email = '$useremail' LIMIT 1 ";
        $update_token_run = mysqli_query($con, $update_token);

        if ($update_token_run) {

            send_password_reset($username, $useremail, $token);



            $_SESSION["message"] = "Để đặt lại mật khẩu hãy kiểm tra Email: $useremail của bạn ";
            header("Location:../password-reset.php");
            exit(0);
        } else {
            $_SESSION["message"] = "Lỗi không tồn tại!";
            header("Location:../password-reset.php");
            exit(0);
        }

    } else {
        $_SESSION["message"] = "Email không tồn tại";
        header("Location:../password-reset.php");
        exit(0);
    }
}

if (isset($_POST['password-update'])) {

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $new_password = mysqli_real_escape_string($con, ($_POST['new_password']));
    $comfirm_password = mysqli_real_escape_string($con, ($_POST['comfirm_password']));
    $hashed_new_password = md5($new_password);

    $token = mysqli_real_escape_string($con, $_POST['password_token']);

    if (!empty($token)) {
        if (!empty($email) && !empty($new_password) && !empty($comfirm_password)) {
            $check_token = "SELECT token FROM users WHERE token = '$token' LIMIT 1";
            $check_token_run = mysqli_query($con, $check_token);

            if (mysqli_num_rows($check_token_run) > 0) {

                if ($new_password == $comfirm_password) {
                    $update_password = "UPDATE users SET password = '$hashed_new_password' WHERE token = '$token' LIMIT 1 ";
                    $update_password_run = mysqli_query($con, $update_password);

                    if ($update_password_run) {

                        $_SESSION['message'] = "Cập nhật mật khẩu thành công! Hãy đăng nhập lại";
                        header("Location:../login.php");
                        exit(0);
                    } else {
                        $_SESSION['message'] = "Không thể cập nhật mật khẩu!";
                        header("Location:../password-change.php?token=$token&email=$email");
                        exit(0);
                    }

                } else {
                    $_SESSION['message'] = "Mật khẩu cũ và mới không đúng";
                    header("Location:../password-change.php?token=$token&email=$email");
                    exit(0);
                }

            } else {
                $_SESSION['message'] = "Token không hợp lệ~";
                header("Location:../password-change.php?token=$token&email=$email");
                exit(0);
            }

        } else {
            $_SESSION['message'] = "Không được bỏ trống~";
            header("Location:../password-change.php?token=$token&email=$email");
            exit(0);
        }

    } else {
        $_SESSION['message'] = "Không có Token";
        header('Location:../password-change.php');
        exit(0);
    }
}

if (isset($_POST['disabled_account'])) {

    $id_user = mysqli_real_escape_string($con, $_POST['id_user']);
    $value_disabled_account = mysqli_real_escape_string($con, $_POST['disabled_account']);

    $disabled_account_query = "UPDATE users SET status = '$value_disabled_account' WHERE id_user = '$id_user'";
    $disabled_account_query_run = mysqli_query($con, $disabled_account_query);

    if ($disabled_account_query_run) {

        if (isset($_SESSION['auth'])) {
            unset($_SESSION['auth']);
            redirect('../index.php', "Bạn đã khóa tài khoản");
        }

    } else {
        redirect('../account.php', "Không thể khóa tài khỏan");
    }

}
if (isset($_POST['update_account'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    // $old_email = mysqli_real_escape_string($con, $_POST['old_email']);

    $update_query = "UPDATE users SET name = '$name', phone = '$phone' WHERE email = '$email' ";
    $update_query_run = mysqli_query($con, $update_query);

    if ($update_query_run) {
        // Cập nhật thành công
        redirect('../account.php', "Cập nhật thông tin thành công.");
        // $_SESSION['message'] = "Cập nhật thông tin thành công.";
    } else {
        // Cập nhật không thành công
        redirect('../account.php', "Cập nhật thông tin không thành công.");
        // $_SESSION['message'] = "Cập nhật thông tin không thành công.";
    }

}

if (isset($_POST["update_password"])) {

    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $old_password = mysqli_real_escape_string($con, md5($_POST['old_password']));
    $new_password = mysqli_real_escape_string($con, md5($_POST['new_password']));
    $comfirm_password = mysqli_real_escape_string($con, md5($_POST['comfirm_password']));



    $check_pass = "SELECT password FROM users WHERE password = '$old_password'";
    $check_pass_run = mysqli_query($con, $check_pass);

    if (mysqli_num_rows($check_pass_run) == 0) {
        // $_SESSION['message_pass'] = "Mật khẩu cũ không đúng.";
        redirect('../account.php', "Mật khẩu cũ không đúng.");
    } else {
        if ($new_password == $comfirm_password) {
            $update_pass = "UPDATE users SET password = '$comfirm_password' WHERE email = '$email' LIMIT 1 ";
            $update_pass_run = mysqli_query($con, $update_pass);
            if ($update_pass_run) {
                if (isset($_SESSION['auth'])) {
                    unset($_SESSION['auth']);
                    redirect('../index.php', "Đổi mật khẩu thành công. Hãy đăng nhập lại");
                }


            } else {
                redirect('../account.php', "Đổi mật khẩu không thành công.");
            }

        } else {
            redirect('../account.php', "Nhập lại mật khẩu mới không đúng.");
        }

    }

}

if (isset($_POST['admin_disabled_account'])) {

    $id_user = mysqli_real_escape_string($con, $_POST["id_user"]);
    $name = mysqli_real_escape_string($con, $_POST["name"]);

    $disabled_account_query = "UPDATE users SET status = '1' WHERE id_user = '$id_user'";
    $disabled_account_query_run = mysqli_query($con, $disabled_account_query);

    if ($disabled_account_query_run) {
        redirect('../admin/user-account.php', "Bạn đã khóa tài khoản với tên $name");
    } else {
        redirect('../admin/user-account.php', "Không thể khóa tài khoản");
    }



}

if (isset($_POST["admin_enabled_account"])) {
    $id_user = mysqli_real_escape_string($con, $_POST["id_user"]);
    $name = mysqli_real_escape_string($con, $_POST["name"]);

    $enable_account_query = "UPDATE users SET status = '0' WHERE id_user = '$id_user'";
    $enabled_account_query_run = mysqli_query($con, $enable_account_query);

    if ($enabled_account_query_run) {
        redirect('../admin/user-account.php', "Bạn đã mở khóa tài khoản với tên $name");
    } else {
        redirect('../admin/user-account.php', "Không thể mở khóa tài khoản");
    }
}

if (isset($_POST["add-nhanvien"])) {
    $id_user = mysqli_real_escape_string($con, $_POST["id_user"]);
    $name = mysqli_real_escape_string($con, $_POST["name"]);

    $add_account_query = "UPDATE users SET type = '2' WHERE id_user = '$id_user'";
    $add_account_query_run = mysqli_query($con, $add_account_query);

    if ($add_account_query_run) {
        redirect('../admin/user-account.php', "Bạn đã $name là nhân viên của mình");
    } else {
        redirect('../admin/user-account.php', "Không thể thêm nhân viên");
    }
}
if (isset($_POST["remove-nhanvien"])) {
    $id_user = mysqli_real_escape_string($con, $_POST["id_user"]);
    $name = mysqli_real_escape_string($con, $_POST["name"]);

    $add_account_query = "UPDATE users SET type = '0' WHERE id_user = '$id_user'";
    $add_account_query_run = mysqli_query($con, $add_account_query);

    if ($add_account_query_run) {
        redirect('../admin/user-account.php', "Bạn đã xa thải nhân viên: $name ");
    } else {
        redirect('../admin/user-account.php', "Không xa thải nhân viên");
    }
}

?>