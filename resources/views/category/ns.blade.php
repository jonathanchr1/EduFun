@extends('layout.master')

@section('pagecontent')
@include('layout.backcolor')
<div class="container-fluid" style="margin-top: 25px; margin-bottom: 25px">
    <h1 style="margin-bottom: 25px">Network Security</h1>
    <div class="row">
        <div class="col-1">
            <img src="{{ asset('img/writer-img/writer3.png') }}" style="width: 90px; height: 90px">
        </div>
        <div class="col-11" style="padding-left: 25px">
            <h5 style="margin-top: 15px">Abi Firmansyah</h5>
            <p>Spesialis Network Security<p>
        </div>
    </div>
    @foreach ($courses as $co)
        @if ($co->type == "Network Security")
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
                    <a href="{{ route('show.cate.ns', $co->id) }}" style="border-radius: 50px; padding: 5px 20px 5px 20px; text-decoration: none; background-color: #071026; color: white">Read More</a>
                </div>
            </div>
        @endif
    @endforeach
</div>

@include('layout.footer')
@endsection