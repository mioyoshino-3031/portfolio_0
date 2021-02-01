<?php

//ウィジェット
register_sidebar();

//カスタム
//メニュー
register_nav_menu('navigation', 'ナビゲーション');

//ヘッダー
add_theme_support('custom-header');

//バックグラウンド
add_theme_support('custom-background');

//アイキャッチ
add_theme_support('post-thumbnails');