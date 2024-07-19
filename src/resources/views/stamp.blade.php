<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte - 打刻</title>
    <link rel="stylesheet" href="{{ asset('css/stamp.css') }}">
</head>
<body>
    <header class="header">
        <div class="header-content">
            <a href="/" class="logo">Atte</a>
            <nav class="header-nav">
                <ul>
                    <li><a href="#">ホーム</a></li>
                    <li><a href="#">日付一覧</a></li>
                    <li><a href="#">ログアウト</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="attendance-container">
            <h1>打刻</h1>
            <div class="attendance-buttons">
                <div class="button-group">
                    <button class="start-work">勤務開始</button>
                    <button class="end-work">勤務終了</button>
                </div>
                <div class="button-group">
                    <button class="start-break">休憩開始</button>
                    <button class="end-break">休憩終了</button>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; Atte, inc.</p>
        </div>
    </footer>
</body>
</html>
