<?php
require_once __DIR__ . '/config.php';

// 接続処理を行う関数
function connect_db()
{
    try {
        return new PDO(
            DSN,
            USER,
            PASSWORD,
            [PDO::ATTR_ERRMODE =>
            PDO::ERRMODE_EXCEPTION]
        );
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}

// エスケープ処理を行う関数
function h($str)
{
    // ENT_QUOTES: シングルクオートとダブルクオートを共に変換する。
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// plansの表示
function get_plans()
{
    // データベースに接続
    $dbh = connect_db();

    // SQL文の組み立て
    $sql = 'SELECT * FROM plan';

    // プリペアドステートメントの準備
    $stmt = $dbh->prepare($sql);

    // プリペアドステートメントの実行
    $stmt->execute();

    // 結果の取得
    return $plans = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
