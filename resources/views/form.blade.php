
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
                        <label class="label sm" for="gender">Jenis Kelamin</label>
                        <input type="text" id="gender" name="gender" class="form-control" placeholder="jenis kelamin" value="{{ old('gender') }}">
                        @error('gender')
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
                        <label class="label sm" for="username_id">Username ID</label>
                        <input type="text" id="username_id" name="username_id" placeholder="username_id" class="form-control" value="{{ old('username_id') }}">
                        @error('username_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
        
                    <div class="mb-2">
                        <label class="label sm" for="utm_campaign">UTM Campaign</label>
                        <input type="text" id="utm_campaign" name="utm_campaign" placeholder="utm_campaign" class="form-control" value="{{ old('utm_campaign') }}">
                        @error('utm_campaign')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div>
                        <label class="label sm" for="utm_source">UTM Source</label>
                        <input type="text" id="utm_source" name="utm_source" placeholder="utm_source" class="form-control" value="{{ old('utm_source') }}">
                        @error('utm_source')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button class="btn btn-light-green">SEND</button>
            </form>
        </div>
    <div class="copyright">© 2024 LARUTAN PENYEGAR CAP BADAK. ALL RIGHTS RESERVED.</div>
</div>

@endsection
