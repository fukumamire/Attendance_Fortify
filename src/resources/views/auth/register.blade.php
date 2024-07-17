<div class="register-container">
  <h1>会員登録</h1>
  <form class="register-form">
    <div class="form-group">
      <label for="name">名前</label>
      <input type="text" id="name" name="name" placeholder="名前を入力してください" required>
    </div>
    <div class="form-group">
      <label for="email">メールアドレス</label>
      <input type="email" id="email" name="email" placeholder="メールアドレスを入力してください" required>
    </div>
    <div class="form-group">
      <label for="password">パスワード</label>
      <input type="password" id="password" name="password" placeholder="パスワードを入力してください" required>
    </div>
    <div class="form-group">
      <label for="password_confirmation">パスワード確認</label>
      <input type="password" id="password_confirmation" name="password_confirmation" placeholder="パスワードを再入力してください" required>
    </div>
    <button type="submit" class="register-btn">会員登録</button>
  </form>
  <div class="login-link">
    <p>既に会員の方は<a href="/login">ログイン</a>してください。</p>
  </div>
</div>
