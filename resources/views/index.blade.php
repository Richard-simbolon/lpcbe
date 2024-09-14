
@extends('layouts.user')

@section('content')

<div class="home">
    <img class="left-img" src="/img/left-home.png" alt="">
    <img class="right-img" src="/img/right-home.png" alt="">
    <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img class="img-jamu" class="mr-1" src="/img/jamu.png" alt="">
            <img class="img-halal" src="/img/halal.png" alt="">
        </div>
        <img class="img-badak" src="/img/badak.png" alt="">
    </div>
    <img class="main-logo w-100" src="/img/main-logo.png" alt="">
    <div class="prod-ds">
        <div class="box-lg"></div>
        <img src="/img/product-1.png" alt="">
        <div class="box-white">
            <span class="product-nm">Larutan Penyegar Cap Badak Legacy</span>
            <a class="w-100" href="/form">
                <button class="w-100 btn btn-light-green">Isi Form</button>
            </a>
        </div>
    </div>
    <div class="copyright">© 2024 LARUTAN PENYEGAR CAP BADAK. ALL RIGHTS RESERVED.</div>
</div>

@endsection
