<?php
ob_start();
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);

?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="#" target="">
      <!-- <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> -->
      <span class="ms-1 font-weight-bold text-white">MyphamDior Dashboard </span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">



      <!-- <li class="nav-item">
        <a class="nav-link text-white   <?= $page == "index.php" ? 'active bg-gradient-primary' : ''; ?>" href="index.php">

     -->
      <!-- <li class="nav-item">
        <a class="nav-link text-white   <?= $page == "index.php" ? 'active bg-gradient-primary' : ''; ?>"
          href="index.php">

          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li> -->



      <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "category.php" ? 'active bg-gradient-primary' : ''; ?>" href="category.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">category</i>
          </div>
          <span class="nav-link-text ms-1">Danh mục</span>
        </a>
      </li>
      <!-- <li class="nav-item">
          <a class="nav-link text-white  <?= $page == "add-category.php" ? 'active bg-gradient-primary' : ''; ?>" href="add-category.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1">Thêm danh mục</span>
          </a>
        </li> -->



      <!-- <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "brand.php" ? 'active bg-gradient-primary' : ''; ?>"
          href="brand.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">featured_play_list</i>
          </div>
          <span class="nav-link-text ms-1">Phân loại </span>
        </a>
      </li> -->




      <!-- <li class="nav-item">
          <a class="nav-link text-white  <?= $page == "add-brand.php" ? 'active bg-gradient-primary' : ''; ?>" href="add-brand.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1">Thêm phân loại</span>
          </a>
        </li> -->
      <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "product.php" ? 'active bg-gradient-primary' : ''; ?>" href="product.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Sản phẩm</span>
        </a>
      </li>
      <!-- <li class="nav-item">
          <a class="nav-link text-white  <?= $page == "add-product.php" ? 'active bg-gradient-primary' : ''; ?>" href="add-product.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1">Thêm sản phẩm</span>
          </a>
        </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "orders.php" ? 'active bg-gradient-primary' : ''; ?>"
          href="orders.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">shop_two</i>
          </div>
          <span class="nav-link-text ms-1">Đơn hàng</span>
        </a>
      </li>
      -->
      <!-- <li class="nav-item"  <?php if (isset($_SESSION['type']) && $_SESSION['type'] == 2 && $page != "user-account.php") echo 'style="display: none;"'; ?> >
          <a class="nav-link text-white  <?= $page == "user-account.php" ? 'active bg-gradient-primary' : ''; ?>"
            href="user-account.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Tài khoản người dùng</span>
          </a>
        </li>
      -->
      <!-- <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "shipping-unit.php" ? 'active bg-gradient-primary' : ''; ?>"
          href="shipping-unit.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">local_shipping</i>
          </div>


          <span class="nav-link-text ms-1">Đơn vị vận chuyển</span>


          
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  <?= $page == "message.php" ? 'active bg-gradient-primary' : ''; ?>"
          href="message.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10"> question_answer</i>
          </div>
          <span class="nav-link-text ms-1">Tin nhắn trợ giúp</span>
        </a>
      </li> -->

    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn bg-gradient-primary mt-4 w-100" href="../logout.php" type="button">Đăng xuất</a>
    </div>
  </div>
</aside>