@extends('layout.app')
@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="tab col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 m-0 p-0">
                <h5 class="p-4 pb-0 mb-0 w-100 bgMainColor text-light text-uppercase">Khóa học IELTS Online 4 kỹ năng (Academic)</h5>
                <button class="tablinks col-12 p-3" onclick="openCity(event, 'firstTab')" id="defaultOpen">
                    <i class="far fa-list-alt"></i> Nội dung khóa học
                </button>
                <button class="tablinks col-12 p-3" onclick="openCity(event, 'secondTab')">
                    <i class="far fa-address-card"></i> Thông tin giảng viên
                </button>
            </div>
            <div class="row col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 m-0 p-0">
                <div id="firstTab" class="tabcontent col-12 container p-3 w">
                    <h4 class="m-4">Nội dung khóa học</h4>
                    <span class="spanTab d-none d-lg-block">
                        <a href="#" class="linkTab">
                        Bắt đầu bài học tiếp theo <i class="fas fa-chevron-right" id="arrow"></i></a> 1. Thông tin cơ bản về IELTS Listening
                    </span>
                    <h5 class="mx-4 d-lg-none"><a href="bai_hoc.html" class="linkColor">Bắt đầu bài học tiếp theo:</a>  1. Thông tin cơ bản về IELTS Listening</h5>
                    <div class="col-12 my-4 w-100">
                        <div class="mx-auto">
                            <div class="course-title p-3">
                                <h5 class="m-0">IELTS Listening</h5>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 1. Thông tin cơ bản về IELTS Listening</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 2. Dạng câu hỏi Letters and Numbers</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 3. Dạng câu hỏi Sentence/Form/Note/Summary/Table Completion</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 4. Dạng câu hỏi Map Labelling</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 5. Dạng câu hỏi Multiple Choice Question</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 6. Dạng câu hỏi Matching</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 7. Dạng câu hỏi Short-Answer Question</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 8. Dạng câu hỏi Diagram/Flow-Chart Labelling</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 9. Luyện IELTS Listening - Part 1</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 10. Luyện IELTS Listening - Part 2</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 11. Luyện IELTS Listening - Part 3</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 12. Luyện IELTS Listening - Part 4</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 13. Luyện IELTS Listening - Full Test 1</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-4 w-100">
                        <div class="mx-auto">
                            <div class="course-title p-3">
                                <h5 class="m-0">IELTS Reading</h5>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 1. Những thông tin cơ bản về bài thi IELTS Reading</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 2. Các dạng câu hỏi trong IELTS Reading</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 3. Chiến thuật và kỹ năng làm bài IELTS Reading</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 4. Hướng dẫn trả lời dạng câu hỏi True/False/Not given hoặc Yes/No/Not given</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 5. Hướng dẫn trả lời dạng câu hỏi Gap-filling</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 6. Hướng dẫn trả lời dạng câu hỏi Matching</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 7. Hướng dẫn trả lời dạng câu hỏi Multiple Choice Question</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 8. Hướng dẫn trả lời dạng câu hỏi Matching headings</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 9. Hướng dẫn trả lời dạng câu hỏi Matching information with paragraphs</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 10. Hướng dẫn trả lời dạng câu hỏi Short Answer Question</a>
                            </div>
                            <div class="course-items">
                                <a href="#" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 11. Cách thức làm bài IELTS Reading Full Test</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="secondTab" class="tabcontent col-12 container">
                    <h4 class="m-4 w-100">Thông tin giảng viên</h4>
                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <img class="w-100 m-2 rounded" src="{{asset('assets/images/avatar/avt.png')}}">
                        </div>
                        <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                            <p><b>Tên:</b> Thanh Loan</p>
                            <p><b>Nghề nghiệp:</b> Giảng viên</p>
                            <p><b>Chi tiết:</b> Sáng lập IELTS Thanh Loan - Cung cấp khóa học IELTS Online, sách luyện thi IELTS chất lượng</p>
                            <p><b>Email:</b> hi@ielts-thanhloan.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
