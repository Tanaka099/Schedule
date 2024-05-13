<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Schedules</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<x-app-layout>
    <body>
        <h1 class="day">
            {{ $schedule->day }}
        </h1>
        <h2 class="starttime">
            {{ $schedule->starttime }}
        </h2>
        <h2 class="endtime">
            {{ $schedule->endtime }}
        </h2>
        <h2 class="title">
            {{ $schedule->title }}
        </h2>
        <div class="content">
            <div class="content__schedule">
                <h3>本文</h3>
                <p>{{ $schedule->body }}</p>
            </div>
        </div>
        <h4 class="star">
            {{ $schedule->star }}
        </h4>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>
</html>