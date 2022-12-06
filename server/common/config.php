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
define('MSG_TITLE_REQUIRED', 'タイトルが未入力です');
define('MSG_LPLACE_REQUIRED', '宿泊場所が未入力です');
define('MSG_SPOINT_REQUIRED', '出発点が未入力です');
define('MSG_EPOINT_REQUIRED', '到着点が未入力です');
define('MSG_STIME_REQUIRED', '出発時間が未入力です');
define('MSG_ETIME_REQUIRED', '到着時間が未入力です');
define('MSG_ITIME_REQUIRED', 'チェックインが未入力です');
define('MSG_OTIME_REQUIRED', 'チェックアウトが未入力です');
define('MSG_RESERVE_REQUIRED', '予約状況が未入力です');
define('MSG_PERSON_REQUIRED', '予約担当者が未入力です');
define('MSG_PLACE_REQUIRED', '場所が未入力です');
