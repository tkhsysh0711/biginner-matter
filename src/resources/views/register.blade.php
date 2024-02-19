<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header_inner">
            <h1 class="header_logo">
                Atte
            </h1>
        </div>
    </header>

    <main>
        <div class=register_content>
            <h2 class="register_title">
                会員登録
            </h2>

            <form class="form">
                <div class="form__name">
                    <input type="text" name="name" placeholder="名前">
                </div>

                <div class="form__email">
                    <input type="text" name="email" placeholder="メールアドレス">
                </div>

                <div class="form__pass">
                    <input type="text" name="pass" placeholder="パスワード">
                </div>

                <div class="form__pass-check">
                    <input type="text" name="pass-check" placeholder="確認用パスワード">
                </div>

                <div class="form__button">
                    <button class="form__button-submit" type="submit">会員登録</button>
                </div>
            </form>

            <div class="register-text">
                <p class="text-info">アカウントをお持ちの方はこちら</p>
                <a class="link-login" href="">ログイン</a>
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