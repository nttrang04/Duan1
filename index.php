<?php
// session_start();
include('function/userfunctions.php');
include('includes/header.php');
include('includes/slider.php');
?>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-danger fw-bold">Sản phẩm nổi bật</h4>
                <div class="underline mb-3"></div>
                <!-- <div class="owl-carousel"> -->
                <div class="sanpham">
                    <?php
                    $trendingProduct = getAllTrending();
                    if (mysqli_num_rows($trendingProduct) > 0) {
                        foreach ($trendingProduct as $item) {
                            ?>
                            <div class="item">
                                <a href="product-view.php?productid=<?= $item['id'] ?>">

                                    <div class="card shadow category-card">
                                    <!-- <div class="card shadow category-card"> -->
                                        <div class="card-body">
                                        <!-- <div class="card-body"> -->

                                            <img class="" src="uploads/<?= $item['image'] ?>" alt="" class="w-100"
                                                style='height: 160px;'>
                                            <h5>
                                                <?= $item['productName']; ?>

                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-f2f2f2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-danger fw-bold">Thông tin </h4>
                <div class="underline mb-2"></div>
                <p>Dior là một thương hiệu thời trang cao cấp nổi tiếng toàn cầu, được biết đến với sự sang trọng, phong cách và sự sáng tạo. Thương hiệu này được thành lập bởi nhà thiết kế người Pháp Christian Dior vào năm 1946, và từ đó đã trở thành một trong những biểu tượng của ngành công nghiệp thời trang.</p>

                <p>Christian Dior nổi tiếng với việc tái định nghĩa phong cách thời trang sau Thế chiến II bằng cách giới thiệu những bộ sưu tập áo dài, váy áo và phụ kiện có sự pha trộn giữa sự nữ tính và phong cách cổ điển. Một trong những thiết kế nổi tiếng nhất của ông là bộ sưu tập "New Look" được giới thiệu vào năm 1947, với những chiếc váy áo đầy phần cổ điển, eo thon và váy xòe, làm nổi bật vẻ đẹp và nữ tính của phụ nữ.</p>
                
                <p>Dior không chỉ hoạt động trong lĩnh vực thời trang mà còn mở rộng sang nhiều lĩnh vực khác như mỹ phẩm, nước hoa, trang sức và phụ kiện. Các sản phẩm của Dior thường được biết đến với chất lượng cao cấp, phong cách độc đáo và sự đổi mới trong thiết kế.</p>

                <p>Hiện nay, Dior vẫn tiếp tục là một trong những thương hiệu thời trang hàng đầu trên thế giới, với sự hiện diện trong các sự kiện thời trang hàng đầu, cùng việc mở rộng thị trường và phát triển các dòng sản phẩm mới.</p>


            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>

<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>