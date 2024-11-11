<?php

session_start();

// if (isset($_SESSION['auth'])) {
//     $_SESSION['message'] = "Bạn đã đăng nhập rồi!";
//     header('Location: index.php');
//     exit();
// }

include('includes/header.php');
?>
<main role="main" class="mb-2">


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                  <video autoplay loop muted>
                    <source type="video/mp4" src="assets/images/video.mp4">
                </video>
            </div>
        </div>
    </div>
    <!-- Block content -->
    <div class="container mt-2">
        <h1 class="text-center">VỀ CHÚNG TÔI</h1>
        <hr>
        <div class="row">
            <div class="col col-md-12">
            <h5 class="text-center">Christian Dior S.A (Dior) là thương hiệu nổi tiếng của Pháp, được thành lập vào 
                    16/12/1946 tại cư dinh của Christian Dior. Đến năm 1947, thương hiệu này mới chính thức được thành lập.
                    Dù được thành lập bởi Christian Dior nhưng hiện được điều hành bởi tỷ phú Bernard Arnault – Người đứng 
                    đầu LVMH lớn nhất thế giới. Dior là công ty chuyên thiết kế và sở hữu chuỗi cửa hàng bán lẻ đa dạng, các 
                    sản phẩm cao cấp gồm thời trang, phụ kiện, làm đẹp, đồng hồ, nước hoa,… dành cho phái đẹp.</h5>
                <p class="text-center">Các sản phẩm của Dior đều có thiết kế sang trọng, thanh lịch và độc đáo. Một phần cũng 
                    bởi Christian Dior là người yêu cái đẹp, yêu thiên nhiên nên do đó, các thiết kế của ông có phần tự do, thoáng
                     mát. Đến nay, Dior vẫn luôn không ngừng cập nhật những xu hướng mới để tạo ra những sản phẩm mang chất riêng.</p>
                <div class="text-center">
                    <a href="index.php" class="btn btn-primary btn-lg">Welcome to Dior <i class="fa fa-forward"
                            aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <br>
        <div class="counterup_section">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="single_counterup">
                                           <div class="counter_img">
                                                <img src="assets/images/count.png" alt="">
                                            </div>
                                            <div class="counter_info">
                                                <h2 class="counter_number">2170</h2>
                                                <p>happy customers</p>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="single_counterup count-two">
                                            <div class="counter_img">
                                                <img src="assets/images/count2.png" alt="">
                                            </div>
                                            <div class="counter_info">
                                                <h2 class="counter_number">8080</h2>
                                                <p>AWARDS won</p>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="single_counterup">
                                            <div class="counter_img">
                                                <img src="assets/images/count3.png" alt="">
                                            </div>
                                            <div class="counter_info">
                                                <h2 class="counter_number">2150</h2>
                                                <p>HOURS WORKED</p>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="single_counterup count-two">
                                            <div class="counter_img">
                                                <img src="assets/images/cart5.png" alt="">
                                            </div>
                                            <div class="counter_info">
                                                <h2 class="counter_number">2170</h2>
                                                <p>COMPLETE PROJECTS</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
        <div class="row mt-2">
            <div class="col col-md-12">
                <h1 class="tieu-de">Chúng tôi ở đây!</h1>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col col-md-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.144156203481!2d105.95923487484932!3d10.2499553898686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310a82ce95555555%3A0x451cc8d95d6039f8!2sVinh%20Long%20University%20Of%20Technology%20Education!5e0!3m2!1sen!2s!4v1698165527214!5m2!1sen!2s"
                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- End block content -->
</main>
<?php include('includes/footer.php'); ?>
<style>
    video {
 /* position: absolute; */
 top: 0;
 left: 0;
 width: 100%;
 height: 70vh;
 object-fit: cover;
}
.single_counterup{
    margin-bottom: 35px;
}
.single_counterup{
    -webkit-box-pack: center;
    justify-content: center;
    background: #f3f3f3;
    padding: 88px 0 80px;
    /* display: -webkit-box; */
    /* display: -ms-flexbox; */
    display: flex;
    /* margin-bottom: 27px; */
}
*, ::after, ::before {
    box-sizing: border-box;
}
div {
    /* display: block; */
    unicode-bidi: isolate;
}

</style>