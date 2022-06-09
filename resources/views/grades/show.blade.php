@extends('layout')

@section('title')
    <title>Grades</title>
@endsection


@section('content')
    <!-- Grade inklaptekst-->
    <div class="Grade">
        <article>
            <h1>Grades</h1>

            @foreach($grade as $grades)
                <details>
                    <summary>{{ $grade->course_name }}</summary>
                        {{ $grade->test_name }}
                </details>
            @endforeach
            <a href="/grade/create" class="button">Create a Grade</a>
        </article>
    </div>

    <footer class="footer">
        <a href="easteregg"><img src="resources/hzlogo.png" class="hzlogo" alt="logo-hz"></a>
    </footer>
@endsection
