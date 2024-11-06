@extends('layout.master')

@section('pagecontent')
@include('layout.backcolor')
<div class="container-fluid" style="margin: 85px 0 85px 0">
    <div class="row">
        <div class="col-12">
            <h1 style="text-align: center">About EduFun</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12" style="padding: 40px 175px 0 175px; font-size: 20px">
            <p style="text-align: center">EduFun adalah perusahaan pendidikan berbasis teknologi asal Indonesia. EduFun menyediakan layanan akses pendidikan dalam format tulisan berbahasa Indonesia yang disajikan secara online melalui website.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12" style="padding: 40px 175px 0 175px; font-size: 20px">
            <p style="text-align: center">Hingga Juni 2024, EduFun memiliki lebih dari 10 ribu pengguna. EduFun hadir sebagai bentuk revolusi dari pendidikan di Indonesia dengan mengedepankan cara berpikir kritis, logis, rasional, dan sumber pengetahuan sains yang terintegrasi terhadap semua mahasiswa IT di Indonesia. EduFun bercita-cita mencetak generasi Indonesia yang memahami ilmu pengetahuan dan cinta belajar.</p>
        </div>
    </div>
</div>
@include('layout.footer')
@endsection