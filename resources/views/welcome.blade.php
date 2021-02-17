@extends('layouts.app')

@section('content')
  @guest
    <h1>Войдите, чтобы просматривать или удалять записи</h1>
  @else
    <div id="app1"></div>
  @endif
@endsection
