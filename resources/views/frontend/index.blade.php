@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row pt-md-5">
            <div class="col-12 wrap-inner d-flex align-items-center justify-content-center">
                <div class="text-center animate__animated animate__fadeInUp">
                    <h1>Khoá học 1 kèm 1 chỉ từ 150k/ buổi để đạt 6.5+</h1>
                    <button class="btnOutnlineItem btn-outline-success"><h6 class="m-0"><a href="{{route('course')}}"
                                                                                           class="text-white">ĐĂNG
                                KÝ</a></h6></button>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 row p-3 pt-lg-5">
                <div
                    class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center justify-content-center pb-3 pb-md-0">
                    <span class="spanItems"><i class="far fa-credit-card fa-2x"></i></span>
                </div>
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 text-center text-md-left">
                    <h5>LỘ TRÌNH HỌC ONLINE / OFFLINE TOÀN DIỆN</h5>
                    <p>Khoá học phù hợp cho mọi đối tượng từ band 0-6.5+,
                        gồm có: Ngữ pháp quan trọng cho IELTS – Từ vựng IELTS theo chủ đề –
                        IELTS 4 kỹ năng từ cơ bản đến nâng cao.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 row p-3 pt-lg-5">
                <div
                    class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center justify-content-center pb-3 pb-md-0">
                    <span class="spanItems"><i class="far fa-money-bill-alt fa-2x"></i></span>
                </div>
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 text-center text-md-left">
                    <h5>TƯƠNG TÁC VỚI GIẢNG VIÊN</h5>
                    <p>Giảng viên trực tiếp chữa bài và giải đáp thắc mắc cả trên lớp và qua các
                        kênh online</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 row p-3">
                <div
                    class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center justify-content-center pb-3 pb-md-0">
                    <span class="spanItems"><i class="fab fa-rocketchat fa-2x"></i></span>
                </div>
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 text-center text-md-left">
                    <h5>SIÊU TIẾT KIỆM HỌC PHÍ</h5>
                    <p> Học phí chỉ từ 150k / 1 buổi học với lộ trình chi tiết và độc quyền</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 row p-3">
                <div
                    class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center justify-content-center pb-3 pb-md-0">
                    <span class="spanItems"><i class="fas fa-user-clock fa-2x"></i></span>
                </div>
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 text-center text-md-left">
                    <h5>SĨ SỐ NHỎ, THỜI GIAN LINH ĐỘNG</h5>
                    <p>Quyền truy cập bài giảng trên mọi thiết bị di động có kết nối Internet tại bất kỳ thời điểm nào,
                        và có thể xem bài học nhiều lần, xây dựng thời gian học theo lịch trình cá nhân.
                        Không sợ lỡ bài học hay tốn thời gian di chuyển.</p>
                </div>
            </div>
        </div>
        <!--cac khoa hoc-->
        <div class="wrap-first-content">
            <h1 class="text-center py-3">GÓI HỌC IELTS</h1>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="bg-light rounded">
                        <div class="wrap-title-first-content">
                            <h3>PRE-IELTS</h3>
                            <p>30 buổi</p>
                        </div>
                        <h1 class="text-center text-danger m-2">4.500.000<sup><small>đ</small></sup></h1>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i>Các chủ điểm
                            ngữ pháp cần thiết cho IELTS
                        </p>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Củng cố từ
                            vựng cơ bản theo chủ đề
                        </p>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Dịch Việt-Anh
                            để thực hành sử dụng ngữ pháp và từ vựng đã học</p>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Luyện viết câu
                            văn, đoạn văn nghị luận ngắn</p>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Phát âm , giao
                            tiếp các chủ đề quen thuộc</p>
                        <p class="text-center">
                            <a class="btn btn-danger text-center" href="#">ĐĂNG KÝ</a><br>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="bg-light rounded">
                        <div class="wrap-title-first-content">
                            <h3>IELTS SPEAKING + WRITING</h3>
                            <p>30 buổi</p>
                        </div>
                        <h1 class="text-center text-danger p-2">6.000.000<sup><small>đ</small></sup></h1>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Các dạng bài
                            IELTS WRITING ( 5 dạng Task 1 và 4 dạng Task 2)</p>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Luyện tập, sửa
                            bài, phân tích lỗi sai để nâng điểm</p>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Các phần của
                            IELTS SPEAKING</p>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Cải thiện
                            lượng từ vựng với chủ đề đa dạng</p>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Thực hành
                            luyện Speaking theo bộ đề dự đoán mới nhất</p>
                        <p class="text-center">
                            <a class="btn btn-danger text-center" href="#">ĐĂNG KÝ</a><br>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="bg-light rounded">
                        <div class="wrap-title-first-content">
                            <h3>IELTS READING +
                                LISTENING</h3>
                            <p>20 buổi</p>
                        </div>
                        <h1 class="text-center text-danger p-2">4.000.000<sup><small>đ</small></sup></h1>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Các dạng bài
                            READING và LISTENING trong kỳ thi IELTS
                        </p>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Hướng dẫn các
                            phương pháp đọc hiểu nhanh và cải thiện khả năng nghe
                        </p>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Nâng cao vốn
                            từ theo chủ đề đa dạng
                        </p>
                        <p class="text-center">
                            <a class="btn btn-danger text-center" href="#">ĐĂNG KÝ</a><br>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="bg-light rounded">
                        <div class="wrap-title-first-content">
                            <h3>MASTER IELTS </h3>
                            <p> 30 buổi</p>
                        </div>
                        <h1 class="text-center text-danger p-2">7.500.000<sup><small>đ</small></sup></h1>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Lớp chỉ dành
                            cho các bạn đã biết cách làm tất cả các dạng bài IELTS
                        </p>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Luyện đề kiểm
                            soát thời gian
                        </p>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Nâng cấp từ
                            vựng, cấu trúc ngữ pháp giúp nâng band điểm</p>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Thực hành
                            simulation tests thường xuyên</p>
                        <p class="border-bottom border-dark py-2 m-2"><i class="far fa-check-circle"></i> Bài test cuối
                            khoá được ex-examiner chấm</p>
                        <p class="text-center">
                            <a class="btn btn-danger text-center" href="#">ĐĂNG KÝ</a><br>
                        </p>
                    </div>
                </div>
            </div>
        </div> <!--end cac khoa hoc-->

        <!--so sanh-->
        {{--        <h1 class="text-center text-uppercase p-5">So sánh 3 gói học ielts online</h1>--}}
        {{--        <table class="w-100 d-none d-lg-block">--}}
        {{--            <tr>--}}
        {{--                <th colspan="3" rowspan="2" class="text-light text-center bgMainColor">--}}
        {{--                    <h5 class="pt-5">ĐẶC ĐIỂM</h5>--}}
        {{--                </th>--}}
        {{--                <th class="bgMainColor px-4 pb-3 pt-0 text-light text-center">FOUNDATION</th>--}}
        {{--                <th class="bgMainColor px-4 pb-3 pt-0 text-light text-center">OVERALL</th>--}}
        {{--                <th class="bgMainColor px-4 pb-3 pt-0 text-light text-center">OVERALL</th>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td class="text-center text-danger">400,000đ</td>--}}
        {{--                <td class="text-center text-danger">1,200,000đ</td>--}}
        {{--                <td class="text-center text-danger">2,500,000đ</td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td colspan="3">Listening: 18 bài giảng hướng dẫn học theo dạng câu hỏi</td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td colspan="3">Listening: 110 bài thực hành theo dạng câu hỏi (kèm đáp án chi tiết)</td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td colspan="3">Reading: 20 bài giảng về chiến thuật trả lời theo dạng câu hỏi</td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td colspan="3">Reading: 100 bài thực hành theo dạng câu hỏi (kèm đáp án chi tiết)</td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td colspan="3">Writing: 61 bài giảng Task 1 & 2 từ viết câu, viết đoạn và cuối cùng là viết bài</td>--}}
        {{--                <td class="text-center"><i class="fas fa-times text-danger"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td colspan="3">Writing: Chữa bài Online</td>--}}
        {{--                <td class="text-center"><i class="fas fa-times text-danger"></i></td>--}}
        {{--                <td class="text-center">7 bài</td>--}}
        {{--                <td class="text-center">Không giới hạn</td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td colspan="3">Speaking: 18 bài giảng hướng dẫn trả lời các dạng câu hỏi trong Part 1, 2, 3</td>--}}
        {{--                <td class="text-center"><i class="fas fa-times text-danger"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td colspan="3">Speaking: Chữa bài Online</td>--}}
        {{--                <td class="text-center"><i class="fas fa-times text-danger"></i></td>--}}
        {{--                <td class="text-center">8 bài</td>--}}
        {{--                <td class="text-center">Không giới hạn</td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td colspan="3">Grammar: 20 bài giảng ôn tập các điểm ngữ pháp quan trọng nhất cho bài thi IELTS</td>--}}
        {{--                <td class="text-center"><i class="fas fa-times text-danger"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td colspan="3">Grammar: 100 bài thực hành các điểm ngữ pháp trong bài thi IELTS (kèm đáp án)</td>--}}
        {{--                <td class="text-center"><i class="fas fa-times text-danger"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td colspan="3">Vocabulary: Sách ebook Từ vựng và Ý tưởng theo chủ đề cho Speaking, Writing</td>--}}
        {{--                <td class="text-center"><i class="fas fa-times text-danger"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-times text-danger"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td colspan="3">Thời hạn truy cập</td>--}}
        {{--                <td class="text-center">12 tháng</td>--}}
        {{--                <td class="text-center">24 tháng</td>--}}
        {{--                <td class="text-center">Không giới hạn</td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td colspan="3">Handout tương ứng với các bài giảng online</td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td colspan="3">Giải đáp thắc mắc qua các kênh online</td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <td colspan="3">Email nhắc nhở học tập và cập nhật xu hướng đề thi</td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--                <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <th colspan="3"></th>--}}
        {{--                <td class="text-center"><a class="btn btn-danger text-center" style="width: 95px;" href="#">ĐĂNG KÝ</a><br></td>--}}
        {{--                <td class="text-center"><a class="btn btn-danger text-center" style="width: 95px;" href="#">ĐĂNG KÝ</a><br></td>--}}
        {{--                <td class="text-center"><a class="btn btn-danger text-center" style="width: 95px;" href="#">ĐĂNG KÝ</a><br></td>--}}
        {{--            </tr>--}}
        {{--        </table>--}}
    </div><!--end so sanh-->
    {{--    <div class="container d-lg-none">--}}
    {{--        <div class="row">--}}
    {{--            <div class="tab col-12 w-100 row">--}}
    {{--                <button class="tablinks col-4" onclick="openCity(event, 'firstTabs')" id="defaultOpen"><h6>FOUNDATION</h6></button>--}}
    {{--                <button class="tablinks col-4" onclick="openCity(event, 'secondTabs')"><h6>OVERALL</h6></button>--}}
    {{--                <button class="tablinks col-4" onclick="openCity(event, 'thirdTabs')"><h6>OVERALL PLUS</h6></button>--}}
    {{--            </div>--}}
    {{--            <div id="firstTabs" class="tabcontent col-12">--}}
    {{--                <table class="w-100">--}}
    {{--                    <tr>--}}
    {{--                        <th class="text-light text-center bgMainColor">--}}
    {{--                            <h5>ĐẶC ĐIỂM</h5>--}}
    {{--                        </th>--}}
    {{--                        <th class="px-4 pb-3 pt-0 text-center text-danger"><h6>400.000đ</h6></th>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Listening: 18 bài giảng hướng dẫn học theo dạng câu hỏi</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Listening: 110 bài thực hành theo dạng câu hỏi (kèm đáp án chi tiết)</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Reading: 20 bài giảng về chiến thuật trả lời theo dạng câu hỏi</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Reading: 100 bài thực hành theo dạng câu hỏi (kèm đáp án chi tiết)</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Writing: 61 bài giảng Task 1 & 2 từ viết câu, viết đoạn và cuối cùng là viết bài</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-times text-danger"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Writing: Chữa bài Online</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-times text-danger"></i></td>--}}
    {{--                    <tr>--}}
    {{--                        <td>Speaking: 18 bài giảng hướng dẫn trả lời các dạng câu hỏi trong Part 1, 2, 3</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-times text-danger"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Speaking: Chữa bài Online</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-times text-danger"></i></td>--}}
    {{--                    <tr>--}}
    {{--                        <td>Grammar: 20 bài giảng ôn tập các điểm ngữ pháp quan trọng nhất cho bài thi IELTS</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-times text-danger"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Grammar: 100 bài thực hành các điểm ngữ pháp trong bài thi IELTS (kèm đáp án)</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-times text-danger"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Vocabulary: Sách ebook Từ vựng và Ý tưởng theo chủ đề cho Speaking, Writing</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-times text-danger"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Thời hạn truy cập</td>--}}
    {{--                        <td class="text-center">12 tháng</td>--}}
    {{--                    <tr>--}}
    {{--                        <td>Handout tương ứng với các bài giảng online</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Giải đáp thắc mắc qua các kênh online</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Email nhắc nhở học tập và cập nhật xu hướng đề thi</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <th></th>--}}
    {{--                        <td class="text-center"><a class="btn btn-danger text-center" style="width: 95px;" href="#">ĐĂNG KÝ</a><br></td>--}}
    {{--                    </tr>--}}
    {{--                </table>--}}
    {{--            </div><!--end so sanh-->--}}
    {{--            <div id="secondTabs" class="tabcontent col-12">--}}
    {{--                <table class="w-100">--}}
    {{--                    <tr>--}}
    {{--                        <th class="text-light text-center bgMainColor">--}}
    {{--                            <h5>ĐẶC ĐIỂM</h5>--}}
    {{--                        </th>--}}
    {{--                        <th class="px-4 pb-3 pt-0 text-center text-danger"><h6>1.200.000đ</h6></th>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Listening: 18 bài giảng hướng dẫn học theo dạng câu hỏi</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Listening: 110 bài thực hành theo dạng câu hỏi (kèm đáp án chi tiết)</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Reading: 20 bài giảng về chiến thuật trả lời theo dạng câu hỏi</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Reading: 100 bài thực hành theo dạng câu hỏi (kèm đáp án chi tiết)</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Writing: 61 bài giảng Task 1 & 2 từ viết câu, viết đoạn và cuối cùng là viết bài</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Writing: Chữa bài Online</td>--}}
    {{--                        <td class="text-center">7 bài</td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Speaking: 18 bài giảng hướng dẫn trả lời các dạng câu hỏi trong Part 1, 2, 3</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Speaking: Chữa bài Online</td>--}}
    {{--                        <td class="text-center">8 bài</td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Grammar: 20 bài giảng ôn tập các điểm ngữ pháp quan trọng nhất cho bài thi IELTS</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Grammar: 100 bài thực hành các điểm ngữ pháp trong bài thi IELTS (kèm đáp án)</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Vocabulary: Sách ebook Từ vựng và Ý tưởng theo chủ đề cho Speaking, Writing</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-times text-danger"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Thời hạn truy cập</td>--}}
    {{--                        <td class="text-center">24 tháng</td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Handout tương ứng với các bài giảng online</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Giải đáp thắc mắc qua các kênh online</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Email nhắc nhở học tập và cập nhật xu hướng đề thi</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <th></th>--}}
    {{--                        <td class="text-center"><a class="btn btn-danger text-center" style="width: 95px;" href="#">ĐĂNG KÝ</a><br></td>--}}
    {{--                    </tr>--}}
    {{--                </table>--}}
    {{--            </div><!--end so sanh-->--}}
    {{--            <div id="thirdTabs" class="tabcontent col-12">--}}
    {{--                <table class="w-100">--}}
    {{--                    <tr>--}}
    {{--                        <th class="text-light text-center bgMainColor">--}}
    {{--                            <h5>ĐẶC ĐIỂM</h5>--}}
    {{--                        </th>--}}
    {{--                        <th class="px-4 pb-3 pt-0 text-center text-danger"><h6>2.500.000đ</h6></th>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Listening: 18 bài giảng hướng dẫn học theo dạng câu hỏi</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Listening: 110 bài thực hành theo dạng câu hỏi (kèm đáp án chi tiết)</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Reading: 20 bài giảng về chiến thuật trả lời theo dạng câu hỏi</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Reading: 100 bài thực hành theo dạng câu hỏi (kèm đáp án chi tiết)</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Writing: 61 bài giảng Task 1 & 2 từ viết câu, viết đoạn và cuối cùng là viết bài</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Writing: Chữa bài Online</td>--}}
    {{--                        <td class="text-center">Không giới hạn</td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Speaking: 18 bài giảng hướng dẫn trả lời các dạng câu hỏi trong Part 1, 2, 3</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Speaking: Chữa bài Online</td>--}}
    {{--                        <td class="text-center">Không giới hạn</td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Grammar: 20 bài giảng ôn tập các điểm ngữ pháp quan trọng nhất cho bài thi IELTS</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Grammar: 100 bài thực hành các điểm ngữ pháp trong bài thi IELTS (kèm đáp án)</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Vocabulary: Sách ebook Từ vựng và Ý tưởng theo chủ đề cho Speaking, Writing</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Thời hạn truy cập</td>--}}
    {{--                        <td class="text-center">Không giới hạn</td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Handout tương ứng với các bài giảng online</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Giải đáp thắc mắc qua các kênh online</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td>Email nhắc nhở học tập và cập nhật xu hướng đề thi</td>--}}
    {{--                        <td class="text-center"><i class="fas fa-check text-success"></i></td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <th></th>--}}
    {{--                        <td class="text-center"><a class="btn btn-danger text-center" style="width: 95px;" href="#">ĐĂNG KÝ</a><br></td>--}}
    {{--                    </tr>--}}
    {{--                </table>--}}
    {{--            </div><!--end so sanh-->--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!--FAQ-->
    {{--    <h1 class="pt-4 my-5 text-center"> CÂU HỎI THƯỜNG GẶP</h1>--}}
    {{--    <div class="container mb-5">--}}
    {{--        <div id="accordion">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">--}}
    {{--                    <a class="card-link text-dark font-weight-bold" data-toggle="collapse" href="#collapseOne">--}}
    {{--                        Tôi có thể xem trước một số nội dung tham khảo không?--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--                <div id="collapseOne" class="collapse show" data-parent="#accordion">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <p>Có thể. Bạn tham khảo các nội dung học thử mà cô cung cấp như sau: </p>--}}
    {{--                        <p>– Bài giảng tham khảo cho phần Listening tại đây<br>--}}
    {{--                            – Bài giảng tham khảo cho phần Reading tại đây <br>--}}
    {{--                            – Bài giảng tham khảo cho phần Writing Task 1 tại đây và Writing Task 2 tại đây <br>--}}
    {{--                            – Bài giảng tham khảo cho phần Speaking tại đây <br>--}}
    {{--                            – Bài giảng tham khảo cho phần Grammar tại đây <br>--}}
    {{--                            – Bài chữa mẫu tham khảo cho kỹ năng Writing tại đây <br>--}}
    {{--                            – Bài chữa mẫu tham khảo cho kỹ năng Speaking tại đây <br>--}}
    {{--                            – Giáo trình đi kèm với các bài giảng online có thể tham khảo tại đây<br>--}}
    {{--                            – Ebook Từ vựng & Ý tưởng IELTS Writing đọc thử tại đây và ebook Từ vựng & Ý tưởng IELTS Speaking đọc thử tại đây</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">--}}
    {{--                    <a class="collapsed card-link text-dark font-weight-bold" data-toggle="collapse" href="#collapseTwo">--}}
    {{--                        Tôi có thể chuyển giữa các gói học không?--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--                <div id="collapseTwo" class="collapse" data-parent="#accordion">--}}
    {{--                    <div class="card-body">--}}
    {{--                        Có. Bạn có thể nâng cấp gói học IELTS online bất kì lúc nào.--}}
    {{--                        Bạn chỉ cần trả phần học phí chênh lệch.<br>--}}
    {{--                        <i>Ví dụ bạn đang ở gói Overall (1.200.000) và muốn nâng cấp lên gói Overall Plus (2.500.000),--}}
    {{--                            ban chỉ cần đóng học học phí là 1.300.000--}}
    {{--                        </i>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">--}}
    {{--                    <a class="collapsed card-link text-dark font-weight-bold" data-toggle="collapse" href="#collapseThree">--}}
    {{--                        Tôi đăng ký và thanh toán gói học như thế nào?--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--                <div id="collapseThree" class="collapse" data-parent="#accordion">--}}
    {{--                    <div class="card-body">--}}
    {{--                        Bước 1: Lựa chọn đăng ký mua gói khóa học trên webiste<br>--}}
    {{--                        Bước 2: Thanh toán học phí gói khóa học qua chuyển khoản ngân hàng, Momo…<br>--}}
    {{--                        Bước 3: Truy cập tài khoản đã đăng ký là có thể học được luôn--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">--}}
    {{--                    <a class="collapsed card-link text-dark font-weight-bold" data-toggle="collapse" href="#collapseFour">--}}
    {{--                        Tôi liên hệ với ai khi cần hỗ trợ?--}}
    {{--                    </a>--}}
    {{--                </div>--}}
    {{--                <div id="collapseFour" class="collapse" data-parent="#accordion">--}}
    {{--                    <div class="card-body">--}}
    {{--                        Bạn liên hệ qua các kênh sau đây:--}}
    {{--                        – <a href="#" class="linkColor">Fanpage IELTS Thanh Loan</a>--}}
    {{--                        – Email: hi@ielts-thanhloan.com--}}
    {{--                        – Zalo/ĐT: 0974824724 (cô Loan)--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div><!--end faq-->--}}
    <div class="container my-5">
        <div class="wrap-second-inner row">
            <h1 class="col-12 text-primary text-uppercase py-4 text-center">học viên đánh giá về khóa học</h1>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-4">
                <p class="fontItalic">"Mình cực kỳ ấn tượng lần đầu tiên gặp cô Zoe. Mình cứ nghĩ rằng sự lười biếng sẽ
                    chiếm lấy mình mà cô Zoe ngày nào cũng đốc thúc quan tâm để đánh bật nó ra. Chắc chắn cho chọn lại
                    mình vẫn sẽ chọn cô Zoe."
                </p>
                <span class="text-uppercase text-primary font-weight-bold d-flex align-items-center">
                  <div class="avatar">
                       <img src="{{asset('assets/images/feedback/1.PNG')}}" class="w-100">
                  </div>
                    <span class="pl-1">Thanh Mai </span>
                    </span>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-4">
                <p class="fontItalic">"Bài chữa và bài giảng của cô lúc nào cũng rất chi tiết. Cứ nghĩ là tối muộn hỏi
                    cô sẽ cáu nhưng cô vẫn giải đáp nhiệt tình mà lại còn động viên mình nữa chứ. Web nói chung cũng ổn
                    vì vẫn đủ thông tin cho mình."
                </p>
                <span class="text-uppercase text-primary font-weight-bold d-flex align-items-center">
                  <div class="avatar">
                       <img src="{{asset('assets/images/feedback/2.JPG')}}" class="w-100">
                  </div>
                    <span class="pl-1">Hằng Phạm </span>
                    </span>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-4">
                <p class="fontItalic">"Giáo trình rất hay lộ trình lại còn rất rõ ràng. Chỉ cần chăm học nữa thôi thì
                    chắc chắn qua được band điểm 6.5+ với cô Zoe là chuyện đơn giản. Tự hào vì đã từng được học cô Zoe."
                </p>
                <span class="text-uppercase text-primary font-weight-bold d-flex align-items-center">
                  <div class="avatar">
                       <img src="{{asset('assets/images/feedback/3.JPG')}}" class="w-100">
                  </div>
                    <span class="pl-1">Phương Nhung </span>
                    </span>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-4">
                <p class="fontItalic">""Bất ngờ với con số học phí so với lượng kiến thức mình được truyền đạt. Dù là
                    học trực tuyến nhưng không hề làm mình có cảm giác lười biếng như trên trường. Cô giáo có phương
                    pháp giảng dạy vừa dễ hiểu lại vẫn đầy đủ thông tin nếu mình chăm chỉ. Chỉ có điều nếu mà được chữa
                    bài ngay khi nộp xong thì tốt, dù biết cô rất bận nhưng vẫn hy vọng"
                </p>
                <span class="text-uppercase text-primary font-weight-bold d-flex align-items-center">
                  <div class="avatar">
                       <img src="{{asset('assets/images/feedback/4.JPG')}}" class="w-100">
                  </div>
                    <span class="pl-1">Phương Hà </span>
                    </span>
            </div>
        </div>
    </div>
@endsection
