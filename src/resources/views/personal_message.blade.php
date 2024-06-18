<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Noah</title>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                【メッセージ】
            </a>
        </div>
    </header>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h1>個人メッセージ</h1>
            </div>
        </div>
        <div class="card">
            <div class="card__img">
                <img src="{{ asset('img/1714722343837~2.png') }}" alt="noah" width="60%" height="60%">
            </div>
        </div>
        <h2 class="message">感謝メッセージ</h2>
        <div class="container">
            <p>{!! nl2br(e($message->content)) !!}</p>
        </div>
    </main>
</body>
</html>