@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('auth.css/login.css') }}">

@section('content')
<div class="login-container">
  <h1>ログイン</h1>
  <form class="login-form" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
      <input type="email" id="email" name="email" placeholder="メールアドレス" required>
    </div>
    <div class="form-group">
      <input type="password" id="password" name="password" placeholder="パスワード" required>
    </div>
    <button type="submit" class="login-btn">ログイン</button>
  </form>
  <div class="register-link">
    <p>アカウントをお持ちでない方はこちら</p>
    <a href="{{ route('register') }}">会員登録</a>
  </div>
</div>
@endsection