<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=AR+One+Sans&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css" /> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/themes/default.min.css" />



    <title>Mỹ phẩm Dior</title>


    <style>
        a {
            text-decoration: none;
        }
         

       .sanpham>.item{
          display: inline-block;
       }

        .category-card {
            width: 100%;
            max-width: 300px;
            /* Điều chỉnh kích thước tối đa của thẻ danh mục */
        }

        .category-card img {
            width: 100%;
            /* Đảm bảo hình ảnh điền vào toàn bộ khu vực thẻ */
            height: auto;
            /* Bảo đảm tỷ lệ khung hình không bị biến dạng */

        }

        .underline {
            height: 5px;
            width: 150px;
            background-color: red;
            border-radius: 20px;
        }

        .bg-f2f2f2 {
            background-color: #f2f2f2;
        }

        div.wishlist {
            opacity: 0;
            transform: translateY(-20px);
            /* Di chuyển xuống khỏi vị trí hiển thị */
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        /* Hiển thị div.wishlist khi hover vào div.card-body */
        div.card-body:hover div.wishlist {

            opacity: 1;
            transform: translateY(0);
        }

        button.delete-icon {
            border: none;
            outline: none;
            background: none;
        }

        /* ảnh */
        .image-overlay {
            position: relative;
            overflow: hidden;
        }

        .image-overlay img {
            width: 100%;
            height: 550px;
        }

        .half-width-image {
            width: 50%;
        }

        .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: rgb(255, 230, 230);
        }

        .overlay-text h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .overlay-text p {
            font-size: 1.5em;
        }
    </style>

</head>

<body>

    <?php include('includes/navbar.php'); ?>