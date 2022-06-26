@extends('layout')

@section('title')
    <title>Dashboard</title>
@endsection


@section('content')
    <div class="Grades">
            <h1>Grades</h1>
            @foreach($grades as $grade)
            <br> Course Name: {{ $grade->course_name }}
        <br>
                    <br>Test Name:{{ $grade->test_name }}
        <br>
                    <br>Lowest Passing Grade:{{$grade->lowest_passing_grade}}
        <br>

            @endforeach
            <a href="/faq/create" class="button">Create a Faq</a>
    </div>

    <footer class="footer">
        <a href="easteregg"><img src="resources/hzlogo.png" class="hzlogo" alt="logo-hz"></a>
    </footer>
@endsection
