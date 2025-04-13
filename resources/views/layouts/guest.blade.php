<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <!-- ウェブページが適切な言語で表示され、アクセシビリティやSEO（検索エンジン最適化）が向上 -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>AtlasBulletinBoard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- IEブラウザの互換性設定 -->
        <meta name="description" content="ページの内容を表す文章" />
        <!-- ページの説明文（SEOに関わる） -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- LaravelフレームワークのCSRF対策のためのメタタグ -->
        <link rel="stylesheet" href="{{ asset('css/reset.css') }} ">
        <!-- CSSファイルの読み込み -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- レスポンシブデザインの設定 -->
    </head>
    <body class="all_content">
        {{ $slot }}
    </body>
</html>
