<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>day</h1>
        <div class='schedules'>
        @foreach ($schedules as $schedule)
            <div class='schedule'>
                <h2 class='title'>{{ $schedule->title }}
                    <a href="/schedules/{{ $schedule->id }}">{{ $schedule->day }}</a>
                </h2>
                <p class='starttime'>{{ $schedule->starttime }}</p>
                <p class='endtime'>{{ $schedule->endtime }}</p>
                <p class='body'>{{ $schedule->body }}</p>
                <p class='star'>{{ $schedule->star }}</p>
            </div>
        @endforeach
        </div>
        <div class='paginate'>
            {{ $schedules->links() }}
        </div>
    </body>
</html>
