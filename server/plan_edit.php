<?php
require_once __DIR__ . '/common/functions.php';
require_once __DIR__ . '/common/config.php';

/* タスク登録
---------------------------------------------*/
// 初期化
$title = '';
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
