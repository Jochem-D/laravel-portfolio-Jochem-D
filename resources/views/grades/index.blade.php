@extends('layout')

@section('title')
    <title>Edit Grades</title>
@endsection


@section('content')
    <!-- FAQ inklaptekst-->
    <div class="Grades">
        <article>
            <h1>Grades</h1>

            @foreach($grades as $grade)
                <details>
                    <summary>{{ $grades->course_name }}</summary>
                        {{ $grades->test_name }}
                </details>
            @endforeach
            <a href="/faq/create" class="button">Create a Faq</a>
        </article>
    </div>

    <footer class="footer">
        <a href="easteregg"><img src="resources/hzlogo.png" class="hzlogo" alt="logo-hz"></a>
    </footer>
@endsection
