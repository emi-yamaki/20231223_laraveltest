@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mate&display=swap" rel="stylesheet">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <p class="form__group-title">
                <span class="form__label__item">お名前</span>
                <span class="form-item-label-required">※</span>
            </p>
            <div class="form-item-name">
                <input type="text" name="name1" class="form-item-name1" placeholder="例：山田" />
                <input type="text" name="name2" class="form-item-name2" placeholder="例：太郎" />
            </div>
        </div>
        <div class="form__group">
            <p class="form__group-title">
                <span class="form__label__item">性別</span>
                <span class="form-item-label-required">※</span>
            </p>
            <div class="form__input--text">
                <input type="radio" name="gender" value="男性" />男性
                <input type="radio" name="gender" value="女性" />女性
                <input type="radio" name="gender" value="その他" />その他
            </div>
        </div>
        <div class="form__group">
            <p class="form__group-title">
                <span class="form__label__item">メールアドレス</span>
                <span class="form-item-label-required">※</span>
            </p>
            <input type="email" name="email" class="form-item-input" placeholder="例）test@example.com" />
        </div>
        <div class="form__group">
            <p class="form__group-title">
                <span class="form__label__item">電話番号</span>
                <span class="form-item-label-required">※</span>
            </p>

            <input type="text" name="tel1" class="form__input--text-tel" placeholder="080" /> -
            <input type="text" name="tel2" class="form__input--text-tel" placeholder="1234" /> -
            <input type="text" name="tel3" class="form__input--text-tel" placeholder="5678" />

        </div>
        <div class="form__group">
            <p class="form__group-title">
                <span class="form__label__item">住所</span>
                <span class="form-item-label-required">※</span>
            </p>
            <input type="text" name="address1" class="form-item-input" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" />
        </div>
        <div class="form__group">
            <p class="form__group-title">
                <span class="form__label__item">建物名</span>
            </p>
            <input type="text" name="address2" class="form-item-input" placeholder="例：千駄ヶ谷マンション" />
        </div>
        <div class="form__group">
            <p class="form__group-title">
                <span class="form__label__item">お問合せの種類</span>
                <span class="form-item-label-required">※</span>
            </p>
            <select type="content" name="item" class="form-item-input-select" placeholder="選択してください">
                <option value="お届け">商品のお届けについて</option>
                <option value="交換">商品の交換について</option>
                <option value="トラブル">商品トラブル</option>
                <option value="お問合せ">ショップへのお問い合わせ</option>
                <option value="その他">その他</option>
            </select>
        </div>
        <div class="form__group">
            <p class="form__group-title">
                <span>お問合せ内容</span>
                <span class="form-item-label-required">※</span>
            </p>
            <textarea name="content" class="form-item-textarea" placeholder="お問い合わせ内容をご記載ください"></textarea>
        </div>
        <input type="submit" class="form-btn" value="確認画面" />
    </form>
</div>
@endsection