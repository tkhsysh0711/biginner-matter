<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">Atte</h1>
        </div>
    </header>

    <main>
        <div class="login__content">
            <h2 class="login__title">
                ログイン
            </h2>
            <form class="form" action="/login" method="post">
                @csrf
                <div class="form__email">
                    <input type="text" name="email" value="{{ old('email') }}" placeholder="メールアドレス">
                </div>

                <div class="form__pass">
                    <input type="text" name="pass" placeholder="パスワード">
                </div>

                <div class="form__button">
                    <button class="form__button-submit" type="submit">ログイン</button>
                </div>
            </form>

            <div class="login-text">
                <p class="text-info">アカウントをお持ちでない方はこちらから</p>
                <a class="link-resister" href="">会員登録</a>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-inner">
            <p class="corp">Atte,inc.</p>
        </div>
    </footer>
</body>
</html>