@extends('layout.app')
@section('content')
    <link rel="stylesheet" href="{{asset('assets/css/bai_hoc.css')}}">
    <div class="container my-4">
        <div class="row">
            <div class="tab col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 m-0 p-0">
                <button class="tablinks col-12 p-3" onclick="openCity(event, 'firstTab')" id="defaultOpen">
                    <i class="far fa-list-alt"></i> Các khóa học
                </button>
                <button class="tablinks col-12 p-3" onclick="openCity(event, 'secondTab')">
                    <i class="far fa-address-card"></i> Thông tin giảng viên
                </button>
            </div>
            <div class="row col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 m-0 p-0">
                <div id="firstTab" class="tabcontent col-12 container px-3 w">
                    @foreach($data as $category)
                        <div class="col-12 my-4 w-100">
                            <div class="mx-auto">
                                <div class="course-title p-3">
                                    <h5 class="m-0">{{$category->name}}</h5>
                                </div>
                                @foreach($category->getProduct()->orderBy('updated_at','ASC')->get() as $key => $product)
                                    <div class="course-items">
                                        <a href="{{route('detail',$product->slug)}}" class="link-course"><i class="far fa-circle"></i>   <i class="fas fa-file-alt"></i> {{$key +1 }}.
                                            {{$product->name}}</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="secondTab" class="tabcontent col-12 container">
                    <h4 class="m-4 w-100">Thông tin giảng viên</h4>
                    @foreach($teachers as $teacher)
                        <div class="row">
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="max-height: 250px;overflow: hidden">
                                <img class="w-100 m-2 rounded" src="{{$teacher->avatar}}">
                            </div>
                            <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                <p><b>Tên:</b> {{$teacher->name}}</p>
                                <p><b>Nghề nghiệp:</b> Giảng viên</p>
                                <p><b>Chi tiết:</b> {{$teacher->detail}}</p>
                                <p><b>Email:</b> {{$teacher->email}}</p>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
