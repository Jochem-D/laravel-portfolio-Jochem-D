@extends('layout')

@section('title')
    <title>Frequently Asked Questions over HZ</title>
@endsection


@section('content')
    <!-- FAQ inklaptekst-->
    <div class="FAQ">
        <article>
            <h1>Frequently asked questions</h1>

            @foreach($faqs as $faq)
                <details>
                    <summary>{{ $faq->question }}</summary>
                    <a href="{{route('faq.show', $faq)}}">Show</a>
                    <br>
                    @if ($faq->link !== null)
                        <a href="{{$faq->link}}" target="_blank"> {{ $faq->answer }}</a>

                    @else
                        {{ $faq->answer }}
                    @endif
                </details>
            @endforeach
            @if (Auth::check())
            <a href="/faq/create" class="button">Create a Faq</a>
            @endif
        </article>
    </div>

    <footer class="footer">
        <a href="easteregg"><img src="resources/hzlogo.png" class="hzlogo" alt="logo-hz"></a>
    </footer>
@endsection
