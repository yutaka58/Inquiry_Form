@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks-page__container">
    <div class="thanks-message">
        <p class="thanks-text--large">Thank you</p>
        <p>お問い合わせありがとうございました</p>
    </div>
    <a href="/" class="home-button">HOME</a>
</div>
@endsection