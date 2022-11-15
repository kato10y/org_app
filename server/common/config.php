<?php

// 接続に必要な情報を定数として定義
// hostにはコンテナ名を指定する
define('DSN', 'mysql:host=db;dbname=org_app;charset=utf8;');
define('USER', 'ky_test');
define('PASSWORD', '1234');

// エラーメッセージを定数として定義
define('MSG_PNAME_REQUIRED', '計画名が未入力です');
define('MSG_SDATE_REQUIRED', '開始日が未入力です');
define('MSG_EDATE_REQUIRED', '終了日が未入力です');
define('MSG_MEMBER_REQUIRED', '人数が未入力です');
