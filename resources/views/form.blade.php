
@extends('layouts.user')

@section('content')

<div class="container form-page">
    <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img width="35" height="28" class="mr-1" src="/img/jamu.png" alt="">
            <img width="20" height="30" src="/img/halal.png" alt="">
        </div>
        <img width="50" height="35" src="/img/badak.png" alt="">
    </div>
    <img class="main-logo w-100" src="/img/main-logo.png" alt="">
    <div class="form-fill">
        <img class="img-absolute" src="/img/product-2.png" alt="">
        <div class="form form-group rounded-box">
            <span class="disclaimer">
                Jika ingin mendapatkan produk
                <br>
                <b>Larutan Penyegar Cap Badak Legacy</b>
                <br>
                mohon isi data di bawah
            </span>
            <form action="{{ route('leads.store') }}" method="POST">
                @csrf
                    <div class="mb-2">
                        <label class="label sm" for="name">Nama</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="nama" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label class="label sm" for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label class="label sm" for="phone">Nomor Handphone</label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="telepon" value="{{ old('phone') }}">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label class="label sm" for="address">Alamat</label>
                        <textarea id="address" name="address" placeholder="alamat" class="form-control" rows="5">{{ old('address') }}</textarea>
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="mb-2">
                        <label class="label sm" for="account">Instagram Account</label>
                        <input type="text" id="account" name="account" placeholder="instagram account" class="form-control" value="{{ old('ig_account') }}">
                        @error('ig_account')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button class="btn btn-light-green">SEND</button>
            </form>
        </div>
    <div class="copyright">© 2024 LARUTAN PENYEGAR CAP BADAK. ALL RIGHTS RESERVED.</div>
</div>

@endsection
