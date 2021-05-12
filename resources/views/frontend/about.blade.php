@extends('layout.app')
@php
    $config = \App\Models\Config::first();
 $title ='Giới thiệu về ZIELTS';
@endphp
@section('content')
    <div class="container pt-3">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div class="py-3 w-100" id="borderAddress">
                    <i class="fas fa-home"> <a href="{{route('index')}}" class="linkColor">Trang chủ</a> / Giới thiệu
                        về cô ZIELTS</i>
                </div>
                <h3 class="py-2 px-0 col-12">Giới thiệu về ZIELTS</h3>
                {!! $config->about !!}
                <a href="{{route('course')}}" class="text-light btnViewMore mx-auto py-3 my-2">Xem chi tiết khóa học
                    IELTS Online</a>
                <h3 class="pb-2 pt-4 px-0 col-12">Thông tin liên hệ</h3>
                <h5>Nếu bạn có bất cứ thắc mắc nào liên quan đến dịch vụ, xin vui lòng liên hệ qua:</h5>
                <ul class="pb-5">
                    <li>ĐT: 0398 116 995</li>
                    <li>Email: info.zielt@gmail.com</li>
                    <li>Fanpage: <a href="https://facebook.com/englishwithMsZoe">Zielts Education</a></li>
                    <li>Địa chỉ: Số 22 ngõ 57 đường Trung Văn <a
                            href="https://www.google.com/maps/@20.99139,105.793358,15z">(xem bản đồ)</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 d-none d-md-block">
                <h6 class="w-100 bgMainColor text-light py-3 text-center">Theo dõi qua mạng xã hội</h6>
                <div class="text-center my-4 ">
                    <a class="linkColor pr-3 col-3" href="https://www.facebook.com/englishwithMsZoe"><i
                            class="fab fa-facebook-f fa-2x"></i></a>
                    <a class="linkColor pl-3 col-3" href="https://www.youtube.com/channel/UC0tipL0pb8ZwxtrnCIDq4qQ"><i
                            class="fab fa-youtube fa-2x"></i></a>
                    <a class="linkColor pl-3 col-3" href="https://www.youtube.com/channel/UC0tipL0pb8ZwxtrnCIDq4qQ"><i
                            class="fas fa-phone-square fa-2x"></i></a>

                </div>
                <h6 class="w-100 bgMainColor text-light py-3 text-center my-4">Chữa bài IELTS Writing</h6>
                <img src="{{asset('assets/images/4fe782cd009bf0c5a98a.jpg')}}" class="w-100 p-3 pb-5">
                <h6 class="w-100 bgMainColor text-light py-3 text-center">Khóa học IELTS online</h6>
                <img src="{{asset('assets/images/Banner-moi-ngay.jpg')}}" class="w-100 p-3 pb-5 fixedBanner">
            </div>
        </div>
    </div>
    <div class="fb-comments" data-href="https://vuvuvuvvv.github.io/ieltsThanhLoan/" data-width="700"
         data-numposts="5"></div>
@endsection
