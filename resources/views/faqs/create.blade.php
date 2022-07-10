@extends('layout')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@section('content')
    <div id ="wrapper">
        <div id="page" class="container"></div>
        <h1>Add a new question!</h1>

        <form method="POST" action="/faq">
            @csrf
            <div class="field">
                <label class="aaaa" for="title">Question <span style="color:red">*</span></label>

                <div class="control">
                    <input placeholder="please put your question here" class="input" type="text" name="question" id="question" required="yes">
                </div>
            </div>

            <div class="field">
                <label class="aaaa" for="answer">Answer <span style="color:red">*</span></label>

                <div class="control">
                    <textarea placeholder="please put the answer to the question here" class="textarea" name="answer" id="answer" required="yes"></textarea>
                </div>
            </div>

            <div class="field">
                <label class="aaaa" for="link">Link</label>

                <div class="control">
                    <textarea placeholder="please put a link to a website here" class="textarea" name="link" id="link"></textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
