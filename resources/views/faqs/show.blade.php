@extends('layout')

@section('title')
    <title>Frequently Asked Questions over HZ</title>
@endsection


@section('content')
    <!-- FAQ inklaptekst-->
    <div class="FAQ">
        <article>
            <h1>{{$faq->question}}</h1>
            <a>{{$faq->answer}}</a>
        </article>
    </div>
    <a href="{{route('faq.edit', $faq)}}">Edit</a>
    <footer class="footer">
    </footer>
    <a href="/faq">Back</a>
@endsection
