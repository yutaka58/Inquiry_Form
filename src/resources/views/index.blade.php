@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection


@section('content')
<div class="contact-form__container">
    <h2>お問い合わせ</h2>

    <form action="/confirm" method="POST">
        @csrf

        <div class="form-group">
            <label class="form-label">お名前<span class="required">※</span></label>
            <div class="input-group">
                <input type="text" name="last_name" placeholder="例：山田" value="{{ old('last_name') }}">
                <input type="text" name="first_name" placeholder="例：太郎" value="{{ old('first_name') }}">
            </div>
            @error('last_name')<p class="error-message">{{ $message }}</p>@enderror
            @error('first_name')<p class="error-message">{{ $message }}</p>@enderror
        </div>

        <div class="form-group">
            <label class="form-label">性別<span class="required">※</span></label>
            <div class="radio-group">
                <label><input type="radio" name="gender" value="1"> 男性</label>
                <label><input type="radio" name="gender" value="2"> 女性</label>
                <label><input type="radio" name="gender" value="3"> その他</label>
            </div>
            @error('gender')<p class="error-message">{{ $message }}</p>@enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="email">メールアドレス<span class="required">※</span></label>
            <input type="email" id="email" name="email" placeholder="例：test@example.com" value="{{ old('email') }}">
            @error('email')<p class="error-message">{{ $message }}</p>@enderror
        </div>

                <div class="form-group">
            <label class="form-label" for="tel">電話番号<span class="required">※</span></label>
            <input type="text" id="tel" name="tel" placeholder="080" value="{{ old('tel') }}"> - 
            <input type="text" id="tel" name="tel" placeholder="1234" value="{{ old('tel') }}"> - 
            <input type="text" id="tel" name="tel" placeholder="5678" value="{{ old('tel') }}">
            @error('email')<p class="error-message">{{ $message }}</p>@enderror
        </div>

                <div class="form-group">
            <label class="form-label" for="address">住所<span class="required">※</span></label>
            <input type="text" id="address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
            @error('email')<p class="error-message">{{ $message }}</p>@enderror
        </div>

            <div class="form-group">
            <label class="form-label" for="building">住所
            <input type="text" id="building" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}">
            @error('email')<p class="error-message">{{ $message }}</p>@enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="building"><span class="required">※</span></label>
            <input type="text" id="building" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}">
            @error('email')<p class="error-message">{{ $message }}</p>@enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="detail">お問い合わせの内容<span class="required">※</span></label>
            <textarea id="detail" name="detail" rows="5" placeholder="お問い合わせ内容をご記入ください">{{ old('detail') }}</textarea>
            @error('detail')<p class="error-message">{{ $message }}</p>@enderror
        </div>

        <button type="submit" class="submit-button">確認画面</button>
    </form>
</div>
@endsection