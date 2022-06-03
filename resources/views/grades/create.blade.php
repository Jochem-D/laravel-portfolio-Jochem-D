@extends('layout')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@section('content')
    <div id ="wrapper">
        <div id="page" class="container"></div>
        <h1>Add a new grade!</h1>

        <form method="POST" action="/grades">
            @csrf
            <div class="field">
                <label class="label" for="title">Grade</label>

                <div class="control">
                    <input class="input" type="text" name="course_name" id="course_name" required="yes">
                </div>
            </div>

            <div class="field">
                <label class="label" for="test_name">Test Name</label>

                <div class="control">
                    <textarea class="textarea" name="test_name" id="test_name" required="yes"></textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="link">Link</label>

                <div class="control">
                    <textarea class="textarea" name="lowest_passing_grade" id="lowest_passing_grade" required="yes"></textarea>
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
