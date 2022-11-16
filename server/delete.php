<?php
require_once __DIR__ . '/common/functions.php';

// index.php から渡された id を受け取る
$id = filter_input(INPUT_GET, 'id');

// plan削除処理の実行
delete_plan($id);

// index.php にリダイレクト
header('Location: index.php');
exit;
