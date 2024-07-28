@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('auth.css/register.css') }}">

@section('content')

<div class="register-container">
  <h1>会員登録</h1>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form class="register-form" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
      <input type="text" id="name" name="name" placeholder="名前を入力してください"  value="{{ old('name') }}" required>
    </div>
    <div class="form-group">
      <input type="email" id="email" name="email" placeholder="メールアドレスを入力してください"  value="{{ old('email') }}" required>
    </div>
    <div class="form-group">
      <input type="password" id="password" name="password" placeholder="パスワードを入力してください" required>
    </div>
    <div class="form-group">
      <input type="password" id="password_confirmation" name="password_confirmation" placeholder="確認証パスワード" required>
    </div>
    <button type="submit" class="register-btn">会員登録</button>
  </form>
  <div class="login-link">
    <p>既に会員の方はこちらからして</p>
    <a href="{{ route('login') }}">ログイン</a>
  </div>
</div>
@endsection