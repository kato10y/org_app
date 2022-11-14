<?php
require_once __DIR__ . '/common/functions.php';
require_once __DIR__ . '/common/config.php';

/* タスク登録
---------------------------------------------*/
// 初期化
$title = '';
$plan_name = '';
$overview = '';
$start_date = '';
$end_date = '';
$plan_member = '';
$plan_cost = '';
$alone = '';
$remarks = '';

// リクエストメソッドの判定
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // フォームに入力されたデータを受け取る
    $plan_name = filter_input(INPUT_POST, 'plan_name');
    $overview = filter_input(INPUT_POST, 'overview');
    $start_date = filter_input(INPUT_POST, 'start_date');
    $end_date = filter_input(INPUT_POST, 'end_date');
    $plan_member = filter_input(INPUT_POST, 'plan_member');
    $plan_cost = filter_input(INPUT_POST, 'start_date');
    $alone = filter_input(INPUT_POST, 'start_date');
    $remarks = filter_input(INPUT_POST, 'start_date');

    // タスク登録処理の実行
    insert_plans($plan_name, $overview, $start_date, $end_date, $plan_member, $plan_cost, $alone, $remarks);

    // index.php にリダイレクト
    header('Location: index.php');
    exit;

}
?>

<!DOCTYPE html>
<html lang="ja">
<?php include_once __DIR__ . '/common/_head.html' ?>

<body class="form_content">
    <div class="form_wrap">
        <h2 class="form_headline">計画登録</h2>
        <form action="" method="post" class="forms">
            <div class="form_item">
                <label for="text" class="form_title">計画名</label>
                <input type="text" name="plan_name" required>
            </div>
            <div class="form_item">
                <label for="text" class="form_title">計画概要</label>
                <textarea name="overview" cols="40" rows="3"></textarea>
            </div>
            <div class="form_item form_date">
                <div>
                    <label for="date" class="form_title">開始日</label>
                    <input type="date" name="start_date" required>
                </div>
                <div>
                    <label for="date" class="form_title">終了日</label>
                    <input type="date" name="end_date" required>
                </div>
            </div>
            <div class="form_item">
                <label for="plan_member" min="0" pattern="^[+-]?([1-9][0-9]*|0)$" class="form_title">参加人数</label>
                <input type="number" name="plan_member" required>
            </div>
            <div class="form_item">
                <label for="number" min="0" pattern="^[+-]?([1-9][0-9]*|0)$" class="form_title">費用</label>
                <input type="number" name="plan_cost">
            </div>
            <div class="cost_check">
                <input type="checkbox" id="check">
                <label for="check" name="alone" class="checkbox_text">一人当たりの金額です</label>
            </div>
            <div class="form_item">
                <label for="text" class="form_title">備考</label>
                <textarea cols="40" rows="3" name="remarks"></textarea>
            </div>
            <div class="form_item btns">
                <input type="submit" class="keep_btn" value="保存">
                <a href="index.php" class="cancel_btn">キャンセル</a>
            </div>
        </form>
    </div>
</body>

</html>
