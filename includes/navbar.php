<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark shadow">
  <div class="container">
    <a class="navbar-brand" href="index.php">Mỹ phẩm Dior</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <!-- search start -->
      <form action="search.php" method="GET" class="fromtk d-flex ms-auto">
        <input class="tkiem form-control mr-sm-2" type="text" name="query" placeholder="Tìm kiếm sản phẩm..." aria-label="Search" style="width: 400px;">
        <button class="tim kiem btn btn-outline-secondary" type="submit">Tìm kiếm</button>
      </form>
      <!-- search end -->
      <ul class="navbar-nav ms-auto">

        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="index.php">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="category.php">Danh mục</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="wishlist.php">Yêu thích</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">Giới thiệu</a>
        </li>

        <!-- <li class="nav-item">
          <a class="nav-link" href="product.php">Sản phẩm</a>
        </li> -->

        <?php
        if (isset($_SESSION['auth'])) {


        ?>

          <li class="nav-item dropdown ml-5">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?= $_SESSION['auth_user']['name']; ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="my-orders.php">Đơn hàng</a></li>
              <li><a class="dropdown-item" href="account.php">Thông tin</a></li>
              <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
          </li>
        <?php
        } else {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Đăng Kí</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Đăng Nhập</a>
          </li>
        <?php
        }
        ?>


      </ul>
    </div>
  </div>
</nav>