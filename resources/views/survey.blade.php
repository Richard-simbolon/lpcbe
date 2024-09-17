
@extends('layouts.user')

@section('content')

<div class="s-form">
    <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img class="img-jamu" class="mr-1" src="/img/jamu.png" alt="">
            <img class="img-halal" src="/img/halal.png" alt="">
        </div>
        <img class="img-badak" src="/img/badak.png" alt="">
    </div>
    <img class="main-logo w-100" src="/img/main-logo.png" alt="">
    {{-- <h1 class="text-6xl font-bold underline text-clifford">Create Lead</h1> --}}

    <form action="{{ route('leads.store') }}" method="POST">
        @csrf
        <div class="pre-launch form-group rounded-box d-flex align-items-center justify-content-between mb-14">
            <div class="d-flex flex-column">
                <span class="label">Pre Launch Survey</span>
                <label class="field" for="email">pramudika@gmail.com</label>
            </div>
            <button type="button" class="btn btn-border-light-green">Ganti Akun</button>
        </div>

        <div class="form-group rounded-box">
            <label class="label" for="nama">Nama</label>
            <input type="text" name="form-1" placeholder="Nama" value="{{ old('nama') }}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group rounded-box">
            <label class="label" for="nama">No HP</label>
            <input type="text" name="form-1" placeholder="No Handphone" value="{{ old('number') }}">
            @error('number')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group rounded-box">
            <label class="label" for="email">Email</label>
            <input type="email" name="form-1" placeholder="Email" value="{{ old('email') }}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group rounded-box">
            <label class="label" for="gender">Jenis Kelamin</label>
            <div class="d-flex flex-column">
                <div class="custom-radio">
                    <input id="male" type="radio" name="gender" value="{{ old('gender') }}">
                    <span class="radio-checkmark"></span>
                    Pria
                </div>
                <div class="custom-radio">
                    <input id="femle" type="radio" name="gender" value="{{ old('gender') }}">
                    <span class="radio-checkmark"></span>
                    Wanita
                </div>
            </div>
            {{-- <input type="radio" id="female" name="gender" name="" value="{{ old('gender') }}"> --}}
            @error('gender')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group rounded-box">
            <label class="label" for="gender">Usia</label>
            <div class="d-flex flex-column">
                <div class="custom-radio">
                    <input type="radio" name="age" value="{{ old('gender') }}">
                    <span class="radio-checkmark"></span>
                    &lt; 18
                </div>
                <div class="custom-radio">
                    <input type="radio" name="age" value="{{ old('gender') }}">
                    <span class="radio-checkmark"></span>
                    18-24
                </div>
                <div class="custom-radio">
                    <input type="radio" name="age" value="{{ old('gender') }}">
                    <span class="radio-checkmark"></span>
                    25-34
                </div>
                <div class="custom-radio">
                    <input type="radio" name="age" value="{{ old('gender') }}">
                    <span class="radio-checkmark"></span>
                    35-44
                </div>
                <div class="custom-radio">
                    <input type="radio" name="age" value="{{ old('gender') }}">
                    <span class="radio-checkmark"></span>
                    45-59
                </div>
                <div class="custom-radio">
                    <input type="radio" name="age" value="{{ old('gender') }}">
                    <span class="radio-checkmark"></span>
                    > 60
                </div>
            </div>
            @error('age')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group rounded-box">
            <label class="label" for="gender">Pekerjaan/Kesibukan</label>
            <div class="d-flex flex-column">
                <div class="custom-radio">
                    <input type="radio" name="job" value="{{ old('occupation') }}">
                    <span class="radio-checkmark"></span>
                    Mahasiswa
                </div>
                <div class="custom-radio">
                    <input type="radio" name="job" value="{{ old('occupation') }}">
                    <span class="radio-checkmark"></span>
                    Karyawan Swasta
                </div>
                <div class="custom-radio">
                    <input type="radio" name="job" value="{{ old('occupation') }}">
                    <span class="radio-checkmark"></span>
                    PNS
                </div>
                <div class="custom-radio">
                    <input type="radio" name="job" value="{{ old('occupation') }}">
                    <span class="radio-checkmark"></span>
                    Wirausaha
                </div>
                <div class="custom-radio">
                    <input type="radio" name="job" value="{{ old('occupation') }}">
                    <span class="radio-checkmark"></span>
                    Ibu Rumah Tangga
                </div>
                <div class="custom-radio">
                    <input type="radio" name="job" value="{{ old('occupation') }}">
                    <span class="radio-checkmark"></span>
                    Lainnya
                </div>
            </div>
            @error('occupation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group rounded-box">
            <label class="label" for="gender">Pengeluaran per bulan diluar belanja elektronik</label>
            <div class="d-flex flex-column">
                <div class="custom-radio">
                    <input type="radio" name="expense" value="{{ old('expense') }}">
                    <span class="radio-checkmark"></span>
                    &lt; 4.000.000
                </div>
                <div class="custom-radio">
                    <input type="radio" name="expense" value="{{ old('expense') }}">
                    <span class="radio-checkmark"></span>
                    4.000.000 - 10.000.000
                </div>
                <div class="custom-radio">
                    <input type="radio" name="expense" value="{{ old('expense') }}">
                    <span class="radio-checkmark"></span>
                    11.000.000 - 20.000.000
                </div>
                <div class="custom-radio">
                    <input type="radio" name="expense" value="{{ old('expense') }}">
                    <span class="radio-checkmark"></span>
                    > 20.000.000
                </div>
            </div>
            @error('expense')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group rounded-box">
            <label class="label" for="rate-1">Kemudahan untuk konsumsi produk</label>
            <div class="d-flex align-items-center justify-content-between">
                <span class="field mr-1">Sangat Sulit</span>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-1" value="{{ old('rate-1') }}">
                    <span class="radio-checkmark"></span>
                    1
                </div>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-1" value="{{ old('rate-1') }}">
                    <span class="radio-checkmark"></span>
                    2
                </div>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-1" value="{{ old('rate-1') }}">
                    <span class="radio-checkmark"></span>
                    3
                </div>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-1" value="{{ old('rate-1') }}">
                    <span class="radio-checkmark"></span>
                    4
                </div>
                <span class="field">Sangat Mudah</span>
            </div>
            @error('rate-1')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group rounded-box">
            <label class="label" for="rate-2">Tingkat Keasaman Produk</label>
            <div class="d-flex align-items-center justify-content-between">
                <span class="field mr-1">Sangat Asam</span>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-2" value="{{ old('rate-2') }}">
                    <span class="radio-checkmark"></span>
                    1
                </div>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-2" value="{{ old('rate-2') }}">
                    <span class="radio-checkmark"></span>
                    2
                </div>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-2" value="{{ old('rate-2') }}">
                    <span class="radio-checkmark"></span>
                    3
                </div>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-2" value="{{ old('rate-2') }}">
                    <span class="radio-checkmark"></span>
                    4
                </div>
                <span class="field">Tidak Asam</span>
            </div>
            @error('rate-2')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group rounded-box">
            <label class="label" for="rate-3">Tingkat Kemanisan Produk</label>
            <div class="d-flex align-items-center justify-content-between">
                <span class="field mr-1">Kurang Manis</span>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-3" value="{{ old('rate-3') }}">
                    <span class="radio-checkmark"></span>
                    1
                </div>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-3" value="{{ old('rate-3') }}">
                    <span class="radio-checkmark"></span>
                    2
                </div>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-3" value="{{ old('rate-3') }}">
                    <span class="radio-checkmark"></span>
                    3
                </div>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-3" value="{{ old('rate-3') }}">
                    <span class="radio-checkmark"></span>
                    4
                </div>
                <span class="field">Sangat Manis</span>
            </div>
            @error('rate-3')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group rounded-box">
            <label class="label" for="rate-4">Tingkat Rasa Buah</label>
            <div class="d-flex align-items-center justify-content-between">
                <span class="field mr-1">Kurang Rasa Buah</span>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-4" value="{{ old('rate-4') }}">
                    <span class="radio-checkmark"></span>
                    1
                </div>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-4" value="{{ old('rate-4') }}">
                    <span class="radio-checkmark"></span>
                    2
                </div>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-4" value="{{ old('rate-4') }}">
                    <span class="radio-checkmark"></span>
                    3
                </div>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-4" value="{{ old('rate-4') }}">
                    <span class="radio-checkmark"></span>
                    4
                </div>
                <span class="field">Terlalu Banyak Rasa Buah</span>
            </div>
            @error('rate-4')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group rounded-box">
            <label class="label" for="rate-5">Tingkat Kepuasan terhadap produk ini</label>
            <div class="d-flex align-items-center justify-content-between">
                <span class="field mr-1">Sangat Puas</span>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-5" value="{{ old('rate-5') }}">
                    <span class="radio-checkmark"></span>
                    1
                </div>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-5" value="{{ old('rate-5') }}">
                    <span class="radio-checkmark"></span>
                    2
                </div>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-5" value="{{ old('rate-5') }}">
                    <span class="radio-checkmark"></span>
                    3
                </div>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-5" value="{{ old('rate-5') }}">
                    <span class="radio-checkmark"></span>
                    4
                </div>
                <span class="field">Tidak Puas</span>
            </div>
            @error('rate-5')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- <div class="form-group rounded-box">
            <label class="label" for="rate-6">Random</label>
            <div class="d-flex align-items-center justify-content-between">
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-6" value="{{ old('rate-6') }}">
                    <span class="radio-checkmark"></span>
                    Booth Atrium Kemang Village
                </div>
                <div class="custom-radio mr-2">
                    <input type="radio" name="rate-6" value="{{ old('rate-6') }}">
                    <span class="radio-checkmark"></span>
                    Booth Avenue Kemang Village
                </div>
            </div>
            @error('rate-6')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div> --}}

        <div class="form-group rounded-box">
            <label class="label" for="phone">Ekspektasi harga produk per sachet</label>
            <input type="text" name="form-1" placeholder="Jawaban Anda" value="{{ old('price') }}">
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group rounded-box">
            <label class="label" for="email">Apakah ada hal yang Anda ingin perbaiki dari produk minuman ini? <br> (Misalnya: rasa,kemasan,dll)</label>
            <input type="text" name="form-2" placeholder="Jawaban Anda" value="{{ old('text') }}">
            @error('text')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex align-items-center justify-content-between bottom-survey" style="padding: 50px 0 100px">
            <span class="field text-primary-dark">Kosongkan Formulir</span>
            <button type="submit" class="btn btn-light-green">Submit</button>
        </div>
    </form>
</div>

@endsection
