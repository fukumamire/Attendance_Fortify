@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/stamp.css') }}">

@section('content')

<div class="attendance-container">
  <h1>●●さん　お疲れ様です。</h1>
  <div class="attendance-buttons">
    <div class="button-group">
      <button id="start-work" class="start-work">勤務開始</button>
      <button id="end-work" class="end-work" disabled>勤務終了</button>
    </div>
    <div class="button-group">
      <button id="start-break" class="start-break">休憩開始</button>
      <button id="end-break" class="end-break" disabled>休憩終了</button>
    </div>
  </div>
</div>
@endsection
