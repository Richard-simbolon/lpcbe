
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

    <form action="{{ route('survey.store') }}" method="POST">
        @csrf
        @foreach($questions['questions'] as $question)

            <div class="form-group rounded-box">
                <label class="label" for="gender">{{$question->question_text}}</label>
               
                    
                    @if($question->type == 'multiple_choice')
                        @if(count($question->answers) > 0)
                            @if($question->follow_text == "")
                                <div class="d-flex flex-column">
                            @else
                                <div class="d-flex align-items-center justify-content-between">
                                <span class="field mr-1">{{$question->follow_text}}</span>
                            @endif
                                @foreach($question->answers as $answer)
                                    <div class="custom-radio">
                                        <input id="male" type="radio" name="{{'question'.$question->id}}" value="{{$answer->id}}" {{ old('question' . $question->id) == $answer->id ? 'checked' : '' }}>
                                        <span class="radio-checkmark"></span>
                                        {{$answer->answer_text}}
                                    </div>
                                @endforeach
                                @if($question->follow_text_end != "")
                                    <span class="field mr-1">{{$question->follow_text_end}}</span>
                                @endif
                            </div>

                        @endif
                    @else
                    <input type="text" name="{{'question'.$question->id}}" value="{{ old('question' . $question->id) }}" placeholder="Jawaban Anda" >
                    @endif
                   
            </div>

        @endforeach()
        @if ($errors->any())
                        <div class="alert alert-danger">
                            Silahkan berikan jawaban untuk semua pertanyaan.
                        </div>
                    @endif

        <div class="d-flex align-items-center justify-content-between bottom-survey" style="padding: 50px 0 100px">
            <span class="field text-primary-dark">Kosongkan Formulir</span>
            <button type="submit" class="btn btn-light-green">Submit</button>
        </div>
    </form>
</div>

@endsection
