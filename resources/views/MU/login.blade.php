<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{asset('assetss/css/styles.min.css')}}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center" style="background-image: url(assets/img/slider/slide_3.jpg)">
      <div class="d-flex align-items-center justify-content-center w-100">
        {{-- 222222222222222 --}}
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body" >
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <p class="text-center">Đăng Nhập Nếu Bạn là Fan Mu</p>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>
                
                  <button type="submit" class="btn btn-primary">đăng nhập </button>
                  <br>
                  <div class="d-flex align-items-center justify-content-center">
                    <br><p class="fs-4 mb-0 fw-bold">Đăng Ký Để Thành Fan MU</p>
                    <a class="text-primary fw-bold ms-2" href="{{route('add')}}">Đăng Ký</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assetss/libs/jquery/dist/jquery.min.js"></script>
  <script src="assetss/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>