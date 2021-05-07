@extends('layout.app')
@section('content')
    <div class="container my-4">
        <div class="row">
            <h5 class="p-4 pb-0 mb-0 w-100 bgMainColor text-light text-uppercase text-center">Khóa học IELTS Online 4 kỹ năng (Academic)</h5>
            <div class="tab col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 m-0 p-0 scroll-items">
                <div class="mb-3">
                    <h6 class="p-4 active m-0">IELTS Listening</h6>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, 'firstTab')" id="defaultOpen"> <i class="fas fa-circle"></i>   <i class="fas fa-file-alt"></i> 1. Thông tin cơ bản về IELTS Listening</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, 'secondTabs')"> <i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 2. Dạng câu hỏi Letters and Numbers</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, '3thTabs')"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 3. Dạng câu hỏi Sentence /Form /Note /Summary /Table Completion</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, '4thTabs')"> <i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 4. Dạng câu hỏi Map Labelling</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, '5thTabs')"> <i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 5. Dạng câu hỏi Multiple Choice Question</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, '6thTabs')"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 6. Dạng câu hỏi Matching</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, '7thTabs')"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 7. Dạng câu hỏi Short-Answer Question</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, '8thTabs')"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 8. Dạng câu hỏi Diagram/Flow-Chart Labelling</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, '9thTabs')"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 9. Luyện IELTS Listening - Part 1</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, '10thTabs')"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 10. Luyện IELTS Listening - Part 2</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, '11thTabs')"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 11. Luyện IELTS Listening - Part 3</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, '12thTabs')"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 12. Luyện IELTS Listening - Part 4</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, '13thTabs')"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 13. Luyện IELTS Listening - Full Test 1</button>
                </div>
                <div class="mb-3">
                    <h6 class="p-4 active m-0">IELTS Reading</h6>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, 'firstTab2')" id="defaultOpen"> <i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 1. demo</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, 'secondTabs2')"> <i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 2. demo</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, '3thTabs2')"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 3. demo</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, '4thTabs2')"> <i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 4. demo</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, '5thTabs2')"> <i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 5. demo</button>
                    <button class="tablinks w-100 text-left pl-4" onclick="openCity(event, '6thTabs2')"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> 6. demo</button>
                </div>
            </div>
            <div class="row col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 m-0 p-0">
                <!--Tab1-->
                <div id="firstTab" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="secondTabs" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="3thTabs" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="4thTabs" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="5thTabs" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="6thTabs" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="7thTabs" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="8thTabs" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="9thTabs" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="10thTabs" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="11thTabs" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="12thTabs" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="13thTabs" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <!--Tab2-->
                <div id="firstTab2" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="secondTabs2" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="3thTabs2" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="4thTabs2" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="5thTabs2" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>
                <div id="6thTabs2" class="tabcontent col-12 container p-3 w-100">404 NOT FOUND</div>

            </div>
        </div>
    </div>
@endsection()
