<!DOCTYPE html>
<html lang="ja">
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
        <div class="main-title">
            <div class="inner-main-title">
                {{ Auth::user()->name }}さんお疲れ様です！
            </div>
        </div>

        <div class="stamp-table">

            <div class="stamp-row">

                <form class="stamp-form" action="/attendance/start" method="post">
                    @csrf
                    <button class="stamp-button" type="submit" @if ($status['isWorking']) disabled @endif>勤務開始</button>
                </form>

                <form class="stamp-form" action="/attendance/end" method="post">
                @csrf
                @method('patch')
                <button class="stamp-button" type="submit" @if (!$status['isWorking']) disabled @endif>勤務終了</button>
            </form>

        </div>

        <div class="stamp-row">

            <form class="stamp-form" action="/rest/start" method="post">
                @csrf
                @method('patch')
                <button class="stamp-button" type="submit" @if (!$status['isWorking'] or $status['isBreaking']) disabled @endif>休憩開始</button>
            </form>

            <form class="stamp-form" action="/rest/end" method="post">
                @csrf
                @method('patch')
                <button class="stamp-button" type="submit" @if (!$status['isWorking'] or !$status['isBreaking']) disabled @endif>休憩終了</button>
            </form>

        </div>
    </main>

    <footer class="footer">
        <div class="footer__inner">
            <small class="credit">Atte, inc.</small>
        </div>
    </footer>
</body>
</html>