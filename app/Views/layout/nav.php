
<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
      <nav
        class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
      >
        <a
          href=""
          class="navbar-brand font-weight-bold text-secondary"
          style="font-size: 50px"
        >
          <i class="flaticon-043-teddy-bear"></i>
          <span class="text-primary">MoneyKeeper</span>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarCollapse"
        >
          <div class="navbar-nav font-weight-bold mx-auto py-0">
            <a href="#" class="nav-item nav-link active">首頁</a>
            <a href="" class="nav-item nav-link">About</a>
            <a href="" class="nav-item nav-link">Classes</a>
            <a href="" class="nav-item nav-link">Teachers</a>
            <a href="" class="nav-item nav-link">Gallery</a>
            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                ><?= esc($name)?></a
              >
              <div class="dropdown-menu rounded-0 m-0">
                <a href="" class="dropdown-item">會員資料</a>
                <a href="" class="dropdown-item">Blog Detail</a>
              </div>
            </div>
          </div>
          <a class="btn btn-primary px-4" href="<?= base_url("/logout") ?>">登出</a>
        </div>
      </nav>
    </div>
    <!-- Navbar End -->