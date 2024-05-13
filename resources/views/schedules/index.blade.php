<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<x-app-layout>
    <body>
        <h1>こんにちは</h1>
        <a href='/schedules/create'>create</a>
        @foreach ($schedules as $schedule)
            <div class='schedule'>
                <h2 class='day'>{{ $schedule->day }}</h2>
                <p class='starttime'>{{ $schedule->starttime }}<p>
                <p class='endtime'>{{ $schedule->endtime }}</p>
                <p class='title'>{{ $schedule->title }}
                    <a href="/schedules/{{ $schedule->id }}">{{ $schedule->title }}</a>
                </p>
                <p class='body'>{{ $schedule->body }}</p>
                <p class='star'>{{ $schedule->star }}</p>
            </div>
        @endforeach
        </div>
        <div class='paginate'>
            {{ $schedules->links() }}
        </div>
        {{ Auth::user()->name }}
    </body>
</x-app-layout>
</html>
