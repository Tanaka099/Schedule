<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Schedule</title>
    </head>
    <body>
        <form action="/schedules" method="POST">
            @csrf
            <div class="day">
                <h1>Day</h1>
                <input type="date" name="schedule[day]" placeholder="年/月/日" value="{{ old('schedule.day') }}"/>
                <p class="day__error" style="color:red">{{ $errors->first('schedule.day') }}</p>
            </div>
            <div class="starttime">
                <h2>Starttime</h2>
                <input type="time" name="schedule[starttime]" placeholder="開始時間" value="{{ old('schedule.starttime') }}"/>
                <p class="starttime__error" style="color:red">{{ $errors->first('schedule.starttime') }}</p>
            </div>
            <div class="endtime">
                <h2>Endtime</h2>
                <input type="time" name="schedule[endtime]" placeholder="終了時間" value="{{ old('schedule.endtime') }}"/>
                <p class="endtime__error" style="color:red">{{ $errors->first('schedule.endtime') }}</p>
            </div>
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="schedule[title]" placeholder="タイトル" value="{{ old('schedule.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('schedule.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="schedule[body]" placeholder="予定、URLなど">{{ old('schedule.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('schedule.body') }}</p>
            </div>
            <div class="star">
                <h2>Star</h2>
                <input type="checkbox" name="schedule[star]">{{ old('schedule.star') }}</input>
                <p class="star__error" style="color:red">{{ $errors->first('schedule.star') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>

</html>