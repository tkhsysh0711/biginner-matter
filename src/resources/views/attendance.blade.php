<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
</head>
<body>
    <body>
  <header class="header">

    <div class="header__logo">
      <a href="/">Atte</a>
    </div>


      <nav>

        <ul class="header-nav">

          <li class="header-nav__item">
            <a class="header-nav__link" href="/">ホーム</a>
          </li>

          <li class="header-nav__item">
            <a class="header-nav__link" href="/attendance">日付一覧</a>
          </li>

          <li class="header-nav__item">
            <form class="logout-form" method="post" action="/logout">
              @csrf
              <button class="header-nav__button">ログアウト</button>
            </form>
          </li>

        </ul>

      </nav>

  </header>
    <main>
        <div class="date">
            <div class="inner-date">
                <a class="date-link" href="/attendance/{{ $previousDate }}">
                    <div>&lt</div>
                </a>

                <div class="today">
                    {{ $date }}
                </div>

                <a class="date-link" href="/attendance/{{ $nextDate }}">
                    <div>&gt</div>
                </a>

            </div>
        </div>

        <div class="attendance-table">

            <div class="attendance-row">

                <div class="attendance-cell head left">
                    <div class="inner-cell">名前</div>
                </div>

                <div class="attendance-cell head">
                    <div class="inner-cell">勤務開始</div>
                </div>

                <div class="attendance-cell head">
                    <div class="inner-cell">勤務終了</div>
                </div>

                <div class="attendance-cell head">
                    <div class="inner-cell">休憩時間</div>
                </div>

                <div class="attendance-cell head">
                    <div class="inner-cell">勤務時間</div>
                </div>

            </div>

            @foreach ($attendanceList as $attendance)
            <div class="attendance-row">

                <div class="attendance-cell left">
                    <div class="inner-cell">{{ $['name'] }}</div>
                </div>

                <div class="attendance-cell">
                    <div class="inner-cell">{{ $['clocked_in_at_str'] }}</div>
                </div>

                <div class="attendance-cell">
                    <div class="inner-cell">{{ $['clocked_out_at_str'] }}</div>
                </div>

                <div class="attendance-cell">
                    <div class="inner-cell">{{ $['break_time_str'] }}</div>
                </div>

                <div class="attendance-cell">
                    <div class="inner-cell">{{ $attendance['work_time_str'] }}</div>
                </div>

            </div>
            @endforeach

        </div>

        <div class="page-links">
            <div class="inner-page-links">
                {{ $attendanceList->links() }}
            </div>
        </div>

    </main>

    <footer class="footer">
        <div class="footer__inner">
            <small class="credit">Atte, inc.</small>
        </div>
    </footer>
</body>
</html>