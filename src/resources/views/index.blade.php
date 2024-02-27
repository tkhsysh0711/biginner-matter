<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <title>stamp</title>
</head>
<body>
    <header class="header">

    </header>

    <main>
        <div class="main-title">
            <div class="inner-main-title">
                {{ Auth::user()->name }}さんお疲れ様です！
            </div>
        </div>

        <div class="stamp-table">

            <div class="stamp-row">

                <form class="stamp-form" action="/attendance/start" method="post">
                    @csrf
                    <button class='menu__button' type="submit" {{ filled($start) ? 'disabled' : '' }}>勤務開始</button>
                </form>

                <form class="stamp-form" action="/attendance/end" method="post">
                    @csrf
                    @method('patch')
                    <button class="stamp-button" type="submit" @if (!$status['']) disabled @endif>勤務終了</button>
                </form>

            </div>

        <div class="stamp-row">

            <form class="stamp-form" action="/rest/start" method="post">
                @csrf
                <button class="stamp-button" type="submit" @if (!$status[''] or $status['']) disabled @endif>休憩開始</button>
            </form>

            <form class="stamp-form" action="/rest/end" method="post">
                @csrf
                @method('patch')
                <button class="stamp-button" type="submit" @if (!$status[''] or !$status['']) disabled @endif>休憩終了</button>
            </form>

        </div>
</main>
</body>
</html>