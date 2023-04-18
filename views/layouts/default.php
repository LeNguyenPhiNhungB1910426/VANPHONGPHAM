<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=$this->e($title)?></title>
    <link rel="shortcut icon" href="img/logo.png"/>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
  
  
    <?=$this->section("page_specific_css")?>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top" style="background-color: #FAF5F3; ">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand " href="/home1">
                      <label class="logo">VANPHONGPHAM</label>
                </a>
                <a class="navbar-brand"  aria-current="page" href="/sp">BÚT</a> 
                <a class="navbar-brand"  aria-current="page" href="">SÁCH_TRUYỆN</a>
                <a class="navbar-brand"  aria-current="page" href="">CẶP</a>


            </div>
            


            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    
                        <li><a class="nav-link active" href="/gh">
                                <i class="fas fa-shopping-bag"></i>
                        </a></li>
                        <li><form style="margin-top: 12px" role="search" method="POST" class="search-form" action="/search" name="search-form">
                            <input type="search" class="search-field" placeholder="Tìm kiếm ..." value="" name="search"/>
                        </form></li>
                        <?php if (!\App\SessionGuard::isUserLoggedIn()): ?>
                          <li><a class="nav-link active" href="/login">LOGIN
                          </a></li>
                        <?php endif ?>
                        <?php if (!\App\SessionGuard::isUserLoggedIn()): ?>
                          <li><a class="nav-link active" href="/register">REGISTER
                          </a></li>
                        <?php endif ?>
                        <?php if (\App\SessionGuard::isUserLoggedIn()): ?>
                        </a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?=$this->e(\App\SessionGuard::user()->name)?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="/logout"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        LOGOUT
                                    </a>

                                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                    </form>
                                </li>
                                
                            </ul>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>

    <?=$this->section("page")?>

    <footer>
      <div class="footer_page pt-5">
        <div class="tieu_de row">
          <div class="td1 col span-1-of-5 col-sm-3"><a>Trợ giúp</a></div>
          <div class="td2 col span-1-of-5 col-sm-3"><a>Về văn phòng phẩm</a></div>
          <div class="td3 col span-2-of-5 col-sm-3"><a>Liên hệ</a></div>
          <div class="td4 col span-1-of-5 col-sm-3"><b><a href="/home1">VANPHONGPHAM</a></b></div>
        </div>
        <hr />
        <div class="nd row">
          <div class="nd1 col span-1-of-5 col-sm-3">
            <p>Chính sách bảo mật</p>
            <p>Chính sách đổi trả</p>
            <p>Cách thức thanh toán</p>
            <p>Hướng dẫn mua hàng</p>
          </div>
          <div class="nd2 col span-1-of-5 col-sm-3">
            <p class="tc">Trang chủ</p>
            <p class="story">Câu chuyện</p>
            <p class="mgh">Mở gian hàng</p>
          </div>
          <div class="nd3 col span-2-of-5 col-sm-3">
            <p class="sdt"><i class="fas fa-phone-volume"></i> 0123456789</p>

            <p class="gmail"><i class="far fa-envelope"></i>vanphongpham@gmail.com</p>

            <p class="dia_chi"
              ><i class="fas fa-map-marker-alt"></i> 222 An Khánh, Ninh Kiều, Cần
              Thơ</p>
          </div>
          <div class="slogan_icon col span-1-of-5 col-sm-3">
            <div>
              <p>Khơi nguồn sáng tạo thỏa sức mua hàng cùng VANPHONGPHAM</p>
            </div>
            <p class="icons">
              <i class="fab fa-facebook-square"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-instagram-square"></i>
            </p>
          </div>
        </div>
      </div>
  </footer>  

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/wow.min.js"></script>

    <?=$this->section("page_specific_js")?>
</body>
</html>

