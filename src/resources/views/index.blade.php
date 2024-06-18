<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
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
          <h1>東戸塚校の皆様</h1>
        </div>
     </div>
      <form class="form" action="{{ route('login') }}" method="POST">
        @csrf
       <div class="card">
         <div class="card__img">
           <img src="/img/1714722343837~2.png" alt="noah" width="60%" height="60%"/>
         </div>
       </div>
     <h2 class="message">感謝メッセージ</h2>
     <div class="container">
       <a>社員メンバー・アルバイトメンバーの皆様<br>約6年間一緒に働かせていただいてありがとうがざいます。<br>皆様と志事をしていく中でたくさんの良い思い出と学びがある生活ができました。<br>これからは違う仕事となりますが東戸塚校と皆様の活躍を心から応援しております。<br>本当に長い間ありがとうございました。</a>
     </div>
      <div class="form__group">
          <div class="form__group-title">
          <div class="form__group-content">
          <div class="form__input--text">
            <label for="password">パスワード:</label>
             <input type="password" id="password" name="password" placeholder="パスワードを入力してください">
                <button type="submit">ログイン</button>
           </div>   
    </form>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
  </main> 
</body>
</html>