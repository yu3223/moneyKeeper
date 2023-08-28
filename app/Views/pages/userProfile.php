<?= $this->include("Views/layout/template.php") ?>
<?= $this->include("Views/layout/nav.php") ?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div
            class="d-flex flex-column align-items-center justify-content-center"
            style="min-height: 400px"
        >
            <h3 class="display-3 font-weight-bold text-white">Member Profile</h3>
        </div>
    </div>
    <!-- Header End -->

    <!-- Registration Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <p class="section-title pr-5">
              <span class="pr-2">information</span>
            </p>
            <h1 class="mb-4">會員資料</h1>
            <p>
              以下是您目前的會員資料
            </p>
            <ul class="list-inline m-0">
              <li class="py-2">名稱：<?= esc($name)?></li>
              <li class="py-2">帳號：<?= esc($email)?></li>
            </ul>
          </div>
          <div class="col-lg-5">
            <div class="card border-0">
              <div class="card-header bg-secondary text-center p-4">
                <h1 class="text-white m-0">修改會員資料</h1>
              </div>
              <div class="card-body rounded-bottom bg-primary p-5">
                <form action="/editProfile" method="post">
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control border-0 p-4"
                      placeholder="輸入修改名稱"
                      name="name"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="password"
                      class="form-control border-0 p-4"
                      placeholder="輸入修改密碼"
                      name="password"
                    />
                  </div>
                  <div>
                    <button
                      class="btn btn-secondary btn-block border-0 py-3"
                      type="submit"
                    >
                      確認修改
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Registration End -->

    <?= $this->include("Views/layout/footer.php") ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="public/lib/easing/easing.min.js"></script>
    <script src="public/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="public/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="public/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="public/js/main.js"></script>
  </body>
  <?= $this->include("style/style.php") ?> 
</html>
