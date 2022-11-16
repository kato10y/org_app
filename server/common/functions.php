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

// plan登録時のバリデーション
function insert_validate($plan_name, $start_date, $end_date, $plan_member)
{
    // 初期化
    $errors = [];

    if (empty($plan_name)) {
        $errors[] = MSG_PNAME_REQUIRED;
    }
    if (empty($start_date)) {
        $errors[] = MSG_SDATE_REQUIRED;
    }
    if (empty($end_date)) {
        $errors[] = MSG_EDATE_REQUIRED;
    }
    if (empty($plan_member)) {
        $errors[] = MSG_MEMBER_REQUIRED;
    }

    return $errors;
}

// plan登録
function insert_plans($plan_name, $overview, $start_date, $end_date, $plan_member, $plan_cost, $all_cost, $alone, $remarks)
{
    // データベースに接続
    $dbh = connect_db();

    // レコードを追加
    $sql = <<<EOM
    INSERT INTO
        plan
        (plan_name, overview, start_date, end_date, plan_member, plan_cost, all_cost, alone, remarks)
    VALUES
        (:plan_name, :overview, :start_date, :end_date, :plan_member, :plan_cost, :all_cost, :alone, :remarks)
    EOM;

    // プリペアドステートメントの準備
    $stmt = $dbh->prepare($sql);

    // パラメータのバインド
    $stmt->bindValue(':plan_name', $plan_name, PDO::PARAM_STR);
    $stmt->bindValue(':overview', $overview, PDO::PARAM_STR);
    $stmt->bindValue(':start_date', $start_date, PDO::PARAM_STR);
    $stmt->bindValue(':end_date', $end_date, PDO::PARAM_STR);
    $stmt->bindValue(':plan_member', $plan_member, PDO::PARAM_INT);
    $stmt->bindValue(':plan_cost', $plan_cost, PDO::PARAM_INT);
    $stmt->bindValue(':all_cost', $all_cost, PDO::PARAM_INT);
    $stmt->bindValue(':alone', $alone, PDO::PARAM_INT);
    $stmt->bindValue(':remarks', $remarks, PDO::PARAM_STR);

    // プリペアドステートメントの実行
    $stmt->execute();

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

// 受け取った id のレコードを取得
function find_plans_by_id($id)
{
    // データベースに接続
    $dbh = connect_db();

    // $id を使用してデータを取得
    $sql = <<<EOM
    SELECT
        *
    FROM
        plan
    WHERE
        id = :id;
    EOM;

    // プリペアドステートメントの準備
    $stmt = $dbh->prepare($sql);

    // パラメータのバインド
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);

    // プリペアドステートメントの実行
    $stmt->execute();

    // 結果の取得
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// plan更新
function update_plans($id, $plan_name, $overview, $start_date, $end_date, $plan_member, $plan_cost, $all_cost, $alone, $remarks)
{
    // データベースに接続
    $dbh = connect_db();

    // $id を使用してデータを更新
    $sql = <<<EOM
    UPDATE
        plan
    SET
        plan_name = :plan_name
        overview = :overview
        start_date = :start_date
        end_date = :end_date
        plan_member = :plan_member
        plan_cost = :plan_cost
        all_cost = :all_cost
        alone = :alone
        remarks = :remarks
    WHERE
        id = :id
    EOM;

    // プリペアドステートメントの準備
    $stmt = $dbh->prepare($sql);

    // パラメータのバインド
    $stmt->bindValue(':plan_name', $plan_name, PDO::PARAM_STR);
    $stmt->bindValue(':overview', $overview, PDO::PARAM_STR);
    $stmt->bindValue(':start_date', $start_date, PDO::PARAM_STR);
    $stmt->bindValue(':end_date', $end_date, PDO::PARAM_STR);
    $stmt->bindValue(':plan_member', $plan_member, PDO::PARAM_INT);
    $stmt->bindValue(':plan_cost', $plan_cost, PDO::PARAM_INT);
    $stmt->bindValue(':all_cost', $all_cost, PDO::PARAM_INT);
    $stmt->bindValue(':alone', $alone, PDO::PARAM_INT);
    $stmt->bindValue(':remarks', $remarks, PDO::PARAM_STR);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);

    // プリペアドステートメントの実行
    $stmt->execute();
}
