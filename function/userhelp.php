<?php
session_start();

include('../admin/config/dbcon.php');


use PHPMailer\PHPMailer\PHPMailer;

function send_message($name, $recipientEmail, $message){

    $body = "
    <h2>Chào bạn $name !</h2>
    <h3>Cảm ơn về những đóng góp và góp ý từ $name .</h3>
    <h4>$message</h4>
        ";
$subject = 'Phản hồi từ NoiThatViet';

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
$mail->addAddress($recipientEmail); // enter email address whom you want to send
$mail->Subject = ("$subject");
$mail->Body = $body;
$mail->send();

}

if (isset($_POST['helper'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // Thực hiện truy vấn để chèn dữ liệu vào CSDL
    $sql = "INSERT INTO helpper (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    
    $query_sql_run = mysqli_query($con, $sql);

    if ($query_sql_run) {
        $_SESSION['message'] = "Đã gửi hỗ trợ thành công!Hãy kiểm tra Email để nhận được phản hồi";
        header('Location: ../index.php');
        die();
    } else {
        echo "Lỗi khi thực hiện truy vấn: " . mysqli_error($con);
    }
}

if (isset($_POST['repply_message'])) {

    $id = mysqli_real_escape_string($con, $_POST['id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['repply']);

    $sql = "UPDATE helpper SET status = 1 WHERE id = '$id' ";
    $query_sql_run = mysqli_query($con, $sql);

    if($query_sql_run){
        send_message($name,$email,$message);
        $_SESSION["message"] = "Bạn đã gửi phản hồi thành công đến $email $name $message";
        header("Location:../admin/message.php");
        exit(0);
    }else{
        $_SESSION["message"] = "Phản hồi không thành công đến $email ";
        header("Location:../message.php");
        exit(0);
    }

}


?>
