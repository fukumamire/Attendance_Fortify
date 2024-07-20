<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atte</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
</head>

<body>
  <header class="header">
    <div class="header-content">
      <a href="/" class="logo">Atte</a>
      <nav class="header-nav">
        <ul>
          <li><a href="/">ホーム</a></li>
          <li><a href="#">日付一覧</a></li>
          <li><button class="logout-btn">ログアウト</button></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  <footer class="footer">
    <div class="footer-content">
      <p>Atte, inc.</p>
    </div>
  </footer>
</body>

</html>