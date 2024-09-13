
@extends('layouts.user')

@section('content')

<div class="container home">
    <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img width="35" height="28" class="mr-1" src="/img/jamu.png" alt="">
            <img width="20" height="30" src="/img/halal.png" alt="">
        </div>
        <img width="50" height="35" src="/img/badak.png" alt="">
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
