
@extends('layouts.user')

@section('content')

<div class="form-page">
    <img class="left-img" src="/img/left-form.png" alt="">
    <img class="right-img" src="/img/right-form.png" alt="">
    <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img class="img-jamu" class="mr-1" src="/img/jamu.png" alt="">
            <img class="img-halal" src="/img/halal.png" alt="">
        </div>
        <img class="img-badak" src="/img/badak.png" alt="">
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
                    <div class="mb-2 mb-md-4">
                        <label class="label sm" for="name">Nama</label>
                        <input type="text" id="name" name="name" placeholder="Ketik Nama Anda" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-2 mb-md-4">
                        <label class="label sm" for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Ketik Email Anda" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-2 mb-md-4">
                        <label class="label sm" for="phone">Nomor Handphone</label>
                        <input type="text" id="phone" name="phone" placeholder="Ketik No Telepon Anda" value="{{ old('phone') }}">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-2 mb-md-4">
                        <label class="label sm" for="address">Alamat</label>
                        <textarea id="address" name="address" placeholder="Ketik Alamat Anda" class="form-control" rows="5">{{ old('address') }}</textarea>
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="mb-2 mb-md-4">
                        <label class="label sm" for="account">Akun Instagram</label>
                        <input type="text" id="account" name="username_id" placeholder="Ketik ID Instagram" class="form-control" value="{{ old('username_id') }}">
                        @error('username_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button class="btn btn-light-green">KIRIM</button>
            </form>
        </div>
    </div>
    <div class="copyright">© 2024 LARUTAN PENYEGAR CAP BADAK. ALL RIGHTS RESERVED.</div>
</div>

@endsection
