<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{isset($title) ? $title : 'ZIELTS-Education' }}</title>
    <link rel="icon" href="{{asset('assets/images/favicon.PNG')}}" sizes="32x32">
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/loginSignup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome/CSS/all.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<header class="bg-header-footer sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark py-0">
            <button class="navbar-toggler border-0 mx-auto my-3 text-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i class="fas fa-bars"></i> MENU
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <hr class="d-md-none">
                <ul class="navbar-nav w-nav">
                    <li class="nav-item d-none d-md-block d-lg-none py-2 navItems mx-auto">
                        <a class="nav-link text-light" href="{{route('about')}}"><i class="fas fa-user"></i> Giới thiệu</a>
                    </li>
                    <li class="nav-item d-md-none d-lg-block py-2 navItems ml-md-2 mr-auto">
                        <a class="nav-link text-light pl-2 pl-md-0" href="{{route('about')}}"><i class="fas fa-user"></i> Về ZIELTS</a>
                    </li>
                    <li class="nav-item py-2 navItems ml-md-auto d-md-none d-lg-block">
                        <a class="nav-link text-light pl-2 pl-md-0" href="{{route('course')}}"><i class="fas fa-book"></i> Khóa học IELTS Online</a>
                    </li>
                    <li class="nav-item py-2 navItems ml-md-auto d-none d-md-block d-lg-none">
                        <a class="nav-link text-light pl-2 pl-md-0" href="{{route('course')}}"><i class="fas fa-book"></i> Học IELTS Online</a>
                    </li>
                    <li class="nav-item dropdown navItems mx-md-auto my-auto">
                        <a class="nav-link text-light pl-md-0" href="#">
                            <i class="fas fa-book"></i> Tài liệu
                        </a>
{{--                        <div class="dropdown-menu">--}}
{{--                            <a class="dropdown-item pl-2" href="academic_book.html"><i class="fas fa-book"></i> Sách Academic</a>--}}
{{--                            <a class="dropdown-item pl-2" href="general_training_book.html"><i class="fas fa-book"></i> Sách General Training</a>--}}
{{--                        </div>--}}
                    </li>
                    <li class="nav-item d-none d-md-block py-2 d-lg-none navItems mx-auto">
                        <a class="nav-link text-light" href="chua_bai.html"><i class="fas fa-book"></i> Chữa bài</a>
                    </li>
                    <li class="nav-item d-block d-md-none py-2 d-lg-block navItems mx-md-auto">
                        <a class="nav-link text-light pl-2 pl-md-0" href="chua_bai.html"><i class="fas fa-book"></i> Chữa bài Writing</a>
                    </li>
                </ul>
                <ul class="navbar-nav active mx-auto">
                    <li class="position-relative nav-item active py-2 pl-2 pl-md-0 navItems">
                        <nav class="main-nav">
                            <ul>
                                <li class="nav-item"><a class="cd-signup nav-link text-light d-none d-md-block" href="#0"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a></li>
                                <li class="nav-item"><a class="cd-signup nav-link text-light d-md-none" href="signin_signup.html"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a></li>
                            </ul>
                        </nav>
                    </li>
                </ul>
                <ul class="navbar-nav mr-2 ml-auto">
                    <li class="nav-item d-md-none d-lg-block py-2">
                        <div class="search-in-navbar">
                            <form action="#" method="get" class="">
                                <input class="form-control w-100" placeholder="Search...">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="cd-user-modal">
            <div class="cd-user-modal-container">
                <ul class="cd-switcher">
                    <li><a href="#0">Đăng nhập</a></li>
                    <li><a href="#0">Tạo tài khoản mới</a></li>
                </ul>
                <div id="cd-login"> <!-- log in form -->
                    <form class="cd-form">
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="signin-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                            <span class="cd-error-message">Error message here!</span>
                        </p>
                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signin-password">Mật khẩu</label>
                            <input class="full-width has-padding has-border" id="signin-password" type="password"  placeholder="Password">
                            <a href="#0" class="hide-password"><i class="fas fa-eye"></i></a>
                            <span class="cd-error-message">Error message here!</span>
                        </p>
                        <p class="fieldset">
                            <input type="checkbox" id="remember-me" checked>
                            <label for="remember-me">Nhớ mật khẩu</label>
                        </p>
                        <p class="fieldset">
                            <input class="full-width" type="submit" value="Login">
                        </p>
                        <p class="cd-form-bottom-message"><a href="#0">Quên mật khẩu?</a></p>
                    </form>
                    <!-- <a href="#0" class="cd-close-form">Close</a> -->
                </div> <!-- cd-login -->
                <div id="cd-signup"> <!-- sign up form -->
                    <form class="cd-form">
                        <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">Tên đăng nhập</label>
                            <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Tên">
                            <span class="cd-error-message">Error message!</span>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-email" for="signup-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signup-password">Mật Khẩu</label>
                            <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
                            <a href="#0" class="hide-password"><i class="fas fa-eye"></i></a>
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <input type="checkbox" id="accept-terms">
                            <label for="accept-terms">Tôi đồng ý với các <a href="#">Điều khoản và dịch vụ</a></label>
                        </p>
                        <p class="fieldset">
                            <input class="full-width has-padding" type="submit" value="Create account">
                        </p>
                    </form>
                    <!-- <a href="#0" class="cd-close-form">Close</a> -->
                </div> <!-- cd-signup -->
                <div id="cd-reset-password"> <!-- reset password form -->
                    <p class="cd-form-message">Quên mật khẩu? Vui lòng nhập địa chỉ email của bạn tại đây. Bạn sẽ nhận được link cài đặt lại mật khẩu.</p>
                    <form class="cd-form">
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="reset-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                            <span class="cd-error-message">Error message here!</span>
                        </p>
                        <p class="fieldset">
                            <input class="full-width has-padding" type="submit" value="Reset password">
                        </p>
                    </form>
                    <p class="cd-form-bottom-message"><a href="#0">Quay lại đăng nhập</a></p>
                </div> <!-- cd-reset-password -->
                <a href="#0" class="cd-close-form">Đóng</a>
            </div> <!-- cd-user-modal-container -->
        </div> <!-- cd-user-modal -->
    </div>
</header>
<section class="container">
    <div class="row border-bottom border-dark mb-2 mb-md-5 m-lg-0 d-flex align-items-center justify-content-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 py-3 py-lg-5 text-center">
            <a href="{{route('index')}}"><img src="{{asset('assets/images/logo.jpg')}}" class="branchTop d-none d-lg-block"></a>
            <img src="{{asset('assets/images/branchIelts.jpg')}}" class="branchTop d-lg-none">
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 pt-3 pb-2 pb-md-5 py-lg-5 text-center">
            <img src="{{asset('assets/images/banner-top-website.jpg')}}" class="w-100">
        </div>
    </div>
</section>
@yield('content')
<!--feedback-->
<footer>
    <div class="container pt-5 pb-4 px-0">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <p class="p-2 bg-header-footer text-center text-light">Giới thiệu</p>
                <ul>
                    <li class="link-footer"><a href="#"><i class="fas fa-user"></i> Về ZIELTS</a><br></li>
                    <li class="link-footer"><a href="#"><i class="fas fa-question-circle"></i> Câu hỏi thường gặp</a><br></li>
                    <li class="link-footer"><a href="#"><i class="far fa-money-bill-alt"></i> Hướng dẫn thanh toán</a><br></li>
                    <li class="link-footer"><a href="#"><i class="fas fa-envelope"></i> Liên hệ IELTS ZIELTS</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <p class="p-2 bg-header-footer text-center text-light">Sản phẩm/Dịch vụ</p>
                <ul>
                    <li class="link-footer"><a href="#"><i class="fas fa-book"></i> Khóa học IELTS Online</a><br></li>
                    <li class="link-footer"><a href="#"><i class="fas fa-book"></i> Sách IELTS Academic</a><br></li>
                    <li class="link-footer"><a href="#"><i class="fas fa-book"></i> Sách IELTS General Training</a><br></li>
                    <li class="link-footer"><a href="#"><i class="fas fa-book"></i> Dịch vụ chữa bài IELTS Writing</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <p class="p-2 bg-header-footer text-light text-center">Social Media</p>
                <ul>
                    <li class="link-footer"><a href="#"><i class="fas fa-share-square"></i> IELTS ZIELTS trên Youtube</a><br></li>
                    <li class="link-footer"><a href="#"><i class="fas fa-share-square"></i> IELTS ZIELTS trên Facebook</a><br></li>
                    <li><img src="{{asset('assets/images/logoSaleNoti.png')}}"></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="wrap-footer m-0">
        <p class="py-3 m-0">Bản quyền © 2021 - IELTS ZIELTS</p>
    </div>
</footer>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    document.getElementById("defaultOpen").click();
</script>
<script src="{{asset('assets/js/signup.js')}}"></script>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
</script>
</body>
</html>
