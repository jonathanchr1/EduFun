@extends('layout.master')

@section('pagecontent')
@include('layout.backcolor')
<div class="container-fluid" style="margin-top: 25px; margin-bottom: 25px">
    <div class="row">
        <div class="col-12">
            <h1>{{ $course->type }}</h1>
            <img src="{{ asset('/'.$course->image) }}" style="margin-top: 20px; margin-bottom:20px width: 75%; border-radius: 25px; display: block; margin-left: auto; margin-right: auto">
            <div style="padding: 0 50px 0 50px">
                <br>
                <h2>{{ $course->title }}</h2>
                <p>{{ $course->created_at->format('d M Y') }} | By: {{ $course->writer }}</p>
                <p>{{ $course->body }}</p>
                <a href="{{ route('view.cate.ds') }}" style="border-radius: 50px; padding: 5px 20px 5px 20px; text-decoration: none; background-color: #071026; color: white">Back</a>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')
@endsection