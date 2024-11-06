@extends('layout.master')

@section('pagecontent')
@include('layout.backcolor')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <img src="{{ asset('img/back.jpg') }}" style="width: 104%; margin-left: -24px; margin-right: -24px">
        </div>
    </div>
    @foreach ($courses as $co)
        <div class="row" style="margin-top: 25px; margin-bottom: 50px; margin-left: 50px">
            <div class="col-4">
                <img src="{{ asset('/'.$co->image) }}" style="width: 100%; border-radius: 25px">
            </div>
            <div class="col-8">
                <h3>{{ $co->title }}</h3>
                <p>{{ $co->created_at->format('d M Y') }} | By: {{ $co->writer }}</p>
                <p style="padding-right: 100px">
                    {{ Str::words($co->body, 20, '...') }}
                </p>
                <a href="{{ route('show.details', $co->id) }}" style="border-radius: 50px; padding: 5px 20px 5px 20px; text-decoration: none; background-color: #071026; color: white">Read More</a>
            </div>
        </div>
    @endforeach
    
</div>

@include('layout.footer')
@endsection