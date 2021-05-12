@extends('layout.app')
@section('content')
    <div class="container">
        {!! $page->$slug !!}
    </div>
@endsection
