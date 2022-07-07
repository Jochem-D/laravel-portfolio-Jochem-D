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
        @if (Auth::check())
            <a href="/grade/create" class="button">Create a Grade</a>
        @endif
    </div>

    <footer class="footer">
        <a href="notfound"><img src="resources/hzlogo.png" class="hzlogo" alt="logo-hz"></a>
    </footer>
@endsection
