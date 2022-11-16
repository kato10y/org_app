<?php
require_once __DIR__ . '/common/functions.php';
require_once __DIR__ . '/common/config.php';

/* プラン登録
---------------------------------------------*/
// 初期化
$plan_name = '';
$overview = '';
$start_date = '';
$end_date = '';
$plan_member = '';
$plan_cost = '';
$alone = '';
$remarks = '';
$errors = [];

// リクエストメソッドの判定
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // フォームに入力されたデータを受け取る
    $plan_name = filter_input(INPUT_POST, 'plan_name');
    $overview = filter_input(INPUT_POST, 'overview');
    $start_date = filter_input(INPUT_POST, 'start_date');
    $end_date = filter_input(INPUT_POST, 'end_date');
    $plan_member = filter_input(INPUT_POST, 'plan_member');
    $plan_cost = filter_input(INPUT_POST, 'plan_cost');
    $alone = filter_input(INPUT_POST, 'alone');
    $remarks = filter_input(INPUT_POST, 'remarks');

    // aloneがNULLのときに0を代入
    if (is_null($alone)){
        $alone = '0';
    }

    // aloneが1(チェックが入っている)plan_memberでplan_costをかけ、all_costに入れる
    // aloneが0だったら(チェックが入っていない)plan_costをall_costに入れ、plan_memberでplan_costを割ってplan_costに入れる
    if ($alone == 1) {
        $all_cost = $plan_cost * $plan_member;
    } else {
        $all_cost = $plan_cost;
        $plan_cost = $all_cost / $plan_member;
    }

    // バリデーション
    $errors = insert_validate($plan_name, $start_date, $end_date, $plan_member);

    // エラーチェック
    if (empty($errors)) {
        // タスク登録処理の実行
        insert_plans($plan_name, $overview, $start_date, $end_date, $plan_member, $plan_cost, $all_cost, $alone, $remarks);

        // index.php にリダイレクト
        header('Location: index.php');
        exit;
    }
    
}
?>

<!DOCTYPE html>
<html lang="ja">
<?php include_once __DIR__ . '/common/_head.html' ?>

<body class="form_content">
    <div class="form_wrap">
        <h2 class="form_headline">計画登録</h2>
        <!-- エラーが発生した場合、エラーメッセージを出力 -->
        <?php require_once __DIR__ . '/common/_errors.php' ?>

        <form action="" method="post" class="forms">
            <div class="form_item">
                <label for="plan_name" class="form_title">計画名</label>
                <input type="text" name="plan_name" id="plan_name" required>
            </div>
            <div class="form_item">
                <label for="overview" class="form_title">計画概要</label>
                <textarea name="overview" cols="40" rows="3" id="overview"></textarea>
            </div>
            <div class="form_item form_date">
                <div>
                    <label for="start_date" class="form_title">開始日</label>
                    <input type="date" name="start_date" id="start_date" required>
                </div>
                <div>
                    <label for="end_date" class="form_title">終了日</label>
                    <input type="date" name="end_date" id="end_date" required>
                </div>
            </div>
            <div class="form_item">
                <label for="plan_member" class="form_title">参加人数</label>
                <input type="number" min="0" pattern="^[+-]?([1-9][0-9]*|0)$" name="plan_member" id="plan_member" required>
            </div>
            <div class="form_item">
                <label for="plan_cost" class="form_title">費用</label>
                <input type="number" min="0" pattern="^[+-]?([1-9][0-9]*|0)$" name="plan_cost" id="plan_cost">
            </div>
            <div class="cost_check">
                <input type="checkbox" name="alone" id="alone" value="1">
                <label for="alone" class="checkbox_text">一人当たりの金額です</label>
            </div>
            <div class="form_item">
                <label for="remarks" class="form_title">備考</label>
                <textarea cols="40" rows="3" name="remarks" id="remarks"></textarea>
            </div>
            <div class="form_item btns">
                <input type="submit" class="keep_btn" value="保存">
                <a href="index.php" class="cancel_btn">キャンセル</a>
            </div>
        </form>
    </div>
</body>

</html>
