@extends('layout.master')

@section('pagecontent')
@include('layout.backcolor')
<div class="container-fluid" style="margin-top: 25px">
    <div class="row" style="margin-left: 50px">
        <div class="col-12">
            <h1>Our Writers:</h1>
        </div>
    </div>
    <div class="row" style="margin-top: 50px; margin-bottom: 125px">
        <div class="col-4" style="place-items: center">
            <img src="{{ asset('img/writer-img/writer1.png') }}" style="width: 250px; height: 250px">
            <h5 style="margin-top: 15px">Raka Putra Wicaksono</h5>
            <p>Spesialis Interactive Multimedia<p>
            <a href="#" style="border-radius: 50px; padding: 5px 20px 5px 20px; text-decoration: none; background-color: #071026; color: white">View Materials</a>
        </div>
        <div class="col-4" style="place-items: center">
            <img src="{{ asset('img/writer-img/writer2.png') }}" style="width: 250px; height: 250px">
            <h5 style="margin-top: 15px">Bia Mecca Annisa</h5>
            <p>Spesialis Data Science<p>
            <a href="{{ route('view.cate.ds') }}" style="border-radius: 50px; padding: 5px 20px 5px 20px; text-decoration: none; background-color: #071026; color: white">View Materials</a>
        </div>
        <div class="col-4" style="place-items: center">
            <img src="{{ asset('img/writer-img/writer3.png') }}" style="width: 250px; height: 250px">
            <h5 style="margin-top: 15px">Abi Firmansyah</h5>
            <p>Spesialis Network Security<p>
            <a href="{{ route('view.cate.ns') }}" style="border-radius: 50px; padding: 5px 20px 5px 20px; text-decoration: none; background-color: #071026; color: white">View Materials</a>
        </div>
    </div>
</div>
@include('layout.footer')
@endsection