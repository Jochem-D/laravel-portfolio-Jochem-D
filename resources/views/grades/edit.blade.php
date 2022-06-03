@extends('layout')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@section('content')
    <div id ="wrapper">
        <div id="page" class="container"></div>
        <h1>Edit an existing question!</h1>

        <form method="POST" action="/faq/{{$faq->id}}">
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label" for="title">Question</label>

                <div class="control">
                    <input class="input" type="text" name="" id="" required="yes" value="{{$faq->question}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="answer">Answer</label>

                <div class="control">
                    <textarea class="textarea" name="answer" required="yes" id="answer">{{$faq->answer}}</textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="link">Link</label>

                <div class="control">
                    <textarea class="textarea" name="link" id="link">{{$faq->link}}</textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
        <form method="POST" action="/faq/{{ $faq->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
