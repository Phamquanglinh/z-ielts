@php
$title = $mainProduct->name;
@endphp
@extends('layout.app')
@section('content')
    <div class="container my-4 d-lg-none">
        <div class="page-wrapper chiller-theme toggled">
            <a id="show-sidebar" class="btn btn-sm btn-dark pt-5 mt-3" href="#">
                <i class="fas fa-bars"></i>
            </a>
            <nav id="sidebar" class="sidebar-wrapper py-3 mt-5">
                <div class="sidebar-content">
                    <div class="sidebar-brand">
                        <h6>DANH SÁCH</h6>
                        <div id="close-sidebar">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>

                    <div class="sidebar-header">
                        <span class="header-menu font-weight-bold">Nội dung khóa học</span>
                    </div>

                    <div class="sidebar-menu mb-5">
                        <ul>
                            @foreach($categories as $category)
                            <li class="header-menu mt-3">
                                <span>{{$category->name}}</span>
                            </li>
                                @foreach($category->getProduct()->get() as $product)
                                    <li>
                                        <a href="{{route('detail',$product->slug)}}"> <i class="fas fa-file-alt"></i>
                                            {{$product->name}}
                                        </a>
                                    </li>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                    <!-- sidebar-menu  -->
                </div>
                <!-- sidebar-content  -->
            </nav>
            <!-- sidebar-wrapper  -->
            <main class="page-content">
                <div class="container">
                    <div class="text-dark h2 text-uppercase">{{$mainProduct->name}}</div>
                    <hr>
                    @if($mainProduct->online_price > 0)
                        <div class="text-danger h4">Học online: {{$mainProduct->online_price}} đ</div>
                    @endif
                    @if($mainProduct->offline_price > 0)
                        <div class="text-danger h4">Học offline: {{$mainProduct->offline_price}} đ</div>
                    @endif
                    <hr>
                    <div class="h4 pt-2">Nội dung</div>
                    <div class="pt-2">
                        {!! $mainProduct->content !!}
                    </div>
                </div>
            </main>
            <!-- page-content" -->
        </div>
        <!-- page-wrapper -->
    </div>
    <div class="container my-4 d-none d-lg-block">
        <div class="row">
            <h5 class="p-4 pb-0 mb-0 w-100 bgMainColor text-white text-light text-uppercase text-center">Các khóa học</h5>
            <div class="tab col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 m-0 p-0">
                @foreach($categories as $category)
                    <div class="mb-3">
                        <h6 class="p-4 active text-white m-0">{{$category->name}}</h6>
                        @foreach($category->getProduct()->get() as $product)
                        <a href="{{route('detail',$product->slug)}}" class="w-100 text-left"> <i class="{{$product->slug == $mainProduct->slug ? 'fas' :'far' }} fa-circle"></i> <i class="fas fa-file-alt"></i>
                            {{$product->name}} </a>
                        @endforeach
                    </div>
                @endforeach
            </div>
            <div class="col-lg-9 col-12">
                <div class="container pt-5">
                    <div class="text-dark h2 text-uppercase">{{$mainProduct->name}}</div>
                    <hr>
                    @if($mainProduct->online_price > 0)
                        <div class="text-danger h4">Học online: {{$mainProduct->online_price}} đ</div>
                    @endif
                    @if($mainProduct->offline_price > 0)
                        <div class="text-danger h4">Học offline: {{$mainProduct->offline_price}} đ</div>
                    @endif
                    <hr>
                    <div class="h4 pt-2">Nội dung</div>
                    <div class="pt-2">
                        {!! $mainProduct->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
