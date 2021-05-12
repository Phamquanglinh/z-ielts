@extends('layout.app')
@section('content')
    <div class="container py-5">
        <div class="bg-light rounded pb-5">
            <h2 class="text-center py-5 px-2">Dịch vụ chữa bài IELTS Writing (kèm chấm band và bài mẫu)</h2>
            <div class="text-center">
{{--                <iframe class="d-none d-lg-block mx-auto" width="900" height="500" src="https://www.youtube.com/embed/Nnlze1mLW5c"--}}
{{--                        title="YouTube video player" frameborder="0"--}}
{{--                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"--}}
{{--                        allowfullscreen>--}}
{{--                </iframe>--}}
{{--                <iframe class="d-none d-sm-block d-lg-none mx-auto" width="500" height="280" src="https://www.youtube.com/embed/Nnlze1mLW5c"--}}
{{--                        title="YouTube video player" frameborder="0"--}}
{{--                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"--}}
{{--                        allowfullscreen>--}}
{{--                </iframe>--}}
{{--                <iframe class="d-sm-none mx-auto" width="290" height="160" src="https://www.youtube.com/embed/Nnlze1mLW5c"--}}
{{--                        title="YouTube video player" frameborder="0"--}}
{{--                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"--}}
{{--                        allowfullscreen>--}}
{{--                </iframe>--}}
                <br>
                <i>Dịch vụ dành riêng cho những bạn muốn cải thiện kỹ năng viết trước khi tham gia thi thật.</i>
            </div>
            <div class="container">
                <div class="px-2 px-md-5 pt-5 text-md-justify">
                    <h3 class="text-danger">Ai nên sử dụng dịch vụ chữa bài IELTS Writing?</h3>
                    <ul>
                        <li>Bạn đã nắm vững các dạng câu hỏi trong IELTS Writing Task 1 và Task 2
                            và đang bước vào quá trình thực hành viết trước khi thi thật.</li>
                        <li>Nếu như bạn chưa có kiến thức nền tảng về IELTS Writing,
                            bạn nên bắt đầu từ <a href="#" class="linkColor">khoá học IELTS Writing online</a> nhé (khoá học này kèm chữa bài).</li>
                    </ul>
                    <h3 class="text-danger">Lợi ích khi đăng ký dịch vụ chữa bài IELTS Writing là gì?</h3>
                    <ul>
                        <li>Trực tiếp mình – <b> Zielts Education sửa bài viết</b> của bạn thật chi tiết và đưa band điểm gợi ý,
                            không phải giáo viên/ trợ giảng khác</li>
                        <li><b>Nhận xét và đóng góp dựa trên bài viết của bạn</b>.
                            Mình sẽ gợi ý cách triển khai ideas đảm bảo tính logic,
                            bố cục bài viết, cách chọn từ vựng … trong bài viết.
                            Những gợi ý này sẽ được đưa ra dựa trên chính bài viết của học viên nhằm mục đích giúp cải thiện chất lượng bài viết của chính bạn.</li>
                        <li>Bạn cũng được nhận <b>bài mẫu cho từng bài thực hành</b>, kèm phân tích cách làm bài, từ vựng, bài mẫu chi tiết … để tham khảo.</li>
                        <li>1 bài chữa bao gồm 1 đề Writing Task 1 và 1 đề Writing Task 2. Các đề thi có tính cập nhật cao và đều đã từng là đề thi thật.</li>
                        <li>Bạn <b>không được tự chọn đề bài</b> mà thực hành theo danh sách đề được gửi theo gói.
                            Lý do: Để bạn làm quen với cách khi thi thật,
                            bạn cũng không hề được chọn đề bài,
                            và đề gói chữa bài phát huy hiệu quả nhất khi bạn được gửi các bài mẫu tham khảo và bài chữa của các học viên khác cho cùng 1 bài thực hành.</li>
                        <li>Bạn <b>linh hoạt thời gian gửi bài và tần suất viết bài</b> (Có thể viết 1 bài hoặc nhiều bài mỗi tuần)
                            và có thể đặt câu hỏi sau mỗi bài thực hành rất dễ dàng</li>
                    </ul>
                    <div class="text-center py-3">
                        <a href="#" class="text-light btnViewMore text-uppercase">xem bài chữa mẫu</a>
                    </div>
                    <h3 class="text-danger py-3">Quy trình đăng ký dịch vụ chữa bài</h3>
                    <img src="{{asset('/assets/images/banner-chua-bai.jpg')}}" class="w-100 pb-5">
                    <div class="row px-2">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="bg-light rounded">
                                <div class="wrap-title-first-content">
                                    <h3>Gói 10 bài</h3>
                                    <p>1 bài gồm cả 2 task</p>
                                </div>
                                <h3 class="text-center text-danger m-2">1.500.000<sup><small>đ</small></sup></h3>
                                    <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Đội ngũ giáo viên 8.0 sửa bài viết</p>
                                    <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Sửa lỗi sai chi tiết kèm chỉ dẫn cải thiện</p>
                                    <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Linh hoạt thời gian</p>
                                    <p class="m-2 py-2"><i class="far fa-check-circle"></i> Nhận bài chữa sau 48h hành chính</p>
                                    <p class="text-center">
                                        <a class="btn btn-outline-primary text-center" href="#">ĐĂNG KÝ</a><br>
                                        <a class="btn" href="#"><small>Xem bài chữa mẫu</small></a>
                                    </p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="bg-light rounded">
                                <div class="wrap-title-first-content">
                                    <h3>Gói 20 bài</h3>
                                    <p>1 bài gồm cả 2 task</p>
                                </div>
                                <h3 class="text-center text-danger m-2">2.800.000<sup><small>đ</small></sup></h3>
                                <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Đội ngũ giáo viên 8.0 sửa bài viết</p>
                                <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Sửa lỗi sai chi tiết kèm chỉ dẫn cải thiện</p>
                                <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Linh hoạt thời gian</p>
                                <p class="m-2 py-2"><i class="far fa-check-circle"></i> Nhận bài chữa sau 48h hành chính</p>
                                <p class="text-center">
                                    <a class="btn btn-outline-primary text-center" href="#">ĐĂNG KÝ</a><br>
                                    <a class="btn" href="#"><small>Xem bài chữa mẫu</small></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="bg-light rounded">
                                <div class="wrap-title-first-content">
                                    <h3>Gói 30 bài</h3>
                                    <p>1 bài gồm cả 2 task</p>
                                </div>
                                <h3 class="text-center text-danger m-2">4.200.000<sup><small>đ</small></sup></h3>
                                <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Đội ngũ giáo viên 8.0 sửa bài viết</p>
                                <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Sửa lỗi sai chi tiết kèm chỉ dẫn cải thiện</p>
                                <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Linh hoạt thời gian</p>
                                <p class="m-2 py-2"><i class="far fa-check-circle"></i> Nhận bài chữa sau 48h hành chính</p>
                                <p class="text-center">
                                    <a class="btn btn-outline-primary text-center" href="#">ĐĂNG KÝ</a><br>
                                    <a class="btn" href="#"><small>Xem bài chữa mẫu</small></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @php
                    $contact = \App\Models\Page::first()->contact;
                    @endphp
                    {!! $contact !!}
                </div>
            </div>
            <hr class="">
            <div class="text-center w-100">
                <div class="fb-comments" data-href="{{backpack_url()}}" data-width="100%" data-numposts="5"></div>
                <div id="fb-root w-100"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="oeRsBP8o"></script>
            </div>
        </div>
    </div>
@endsection
