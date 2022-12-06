<?php
require_once __DIR__ . '/common/functions.php';
require_once __DIR__ . '/common/config.php';

/* move登録処理
---------------------------------------------*/
// 初期化
$id = '';
$plan_id = '';
$transportation = '';
$starting_point = '';
$end_point = '';
$start_time = '';
$end_time = '';
$reserve = '';
$reservation_person = '';
$cost = '';
$alone = '';
$all_cost = '';
$remarks = '';
$plan_member = '';
$errors = [];

// schedule.php から渡された id を受け取る
$plan_id = filter_input(INPUT_GET, 'id');

// 受け取った plan_id のレコードを取得
$trip_plan = find_plans_by_plan_id($plan_id);

// リクエストメソッドの判定
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // フォームに入力されたデータを受け取る
    $transportation = filter_input(INPUT_POST, 'transportation');
    $starting_point = filter_input(INPUT_POST, 'starting_point');
    $end_point = filter_input(INPUT_POST, 'end_point');
    $start_time = filter_input(INPUT_POST, 'start_time');
    $end_time = filter_input(INPUT_POST, 'end_time');
    $reserve = filter_input(INPUT_POST, 'reserve');
    $reservation_person = filter_input(INPUT_POST, 'reservation_person');
    $cost = filter_input(INPUT_POST, 'cost');
    $alone = filter_input(INPUT_POST, 'alone');
    $remarks = filter_input(INPUT_POST, 'remarks');

    // aloneがNULLのときに0を代入
    if (is_null($alone)){
        $alone = '0';
    }
    // costがNULLのとき0を代入
    if (empty($cost)){
        $cost = 0;
    }

    // aloneが1(チェックが入っている)plan_memberでplan_costをかけ、all_costに入れる
    // aloneが0だったら(チェックが入っていない)plan_costをall_costに入れ、plan_memberでplan_costを割ってplan_costに入れる
    if ($alone == 1) {
        $all_cost = $cost * $trip_plan['plan_member'];
    } else {
        $all_cost = $cost;
        $cost = $all_cost / $trip_plan['plan_member'];
    }

    // バリデーション
    $errors = insert_validate2($transportation, $starting_point, $end_point, $start_time, $end_time, $reserve, $reservation_person);

    // エラーチェック
    if (empty($errors)) {
        // タスク登録処理の実行
        insert_moves($plan_id, $transportation, $starting_point, $end_point, $start_time, $end_time, $reserve, $reservation_person, $cost, $alone, $all_cost, $remarks);

        // 変数にリダイレクト先URLを格納する
        $url = "schedule.php?id=" . $plan_id;

        // schedule.php にリダイレクト
        header("Location:" . $url );
        exit;
    }
    
}
?>

<!DOCTYPE html>
<html lang="ja">
<?php include_once __DIR__ . '/common/_head.html' ?>

<body class="form_content">
    <div class="form_wrap">
        <h2 class="form_headline"><i class="fa-solid fa-train-subway"></i>移動計画</h2>
        <form action="" method="post" class="forms">
            <div class="form_item">
                <label for="transportation" class="form_title">移動手段</label>
                <input type="text" name="transportation" id="transportation" required>
            </div>
            <div class="form_item form_date">
                <div>
                    <label for="start_time" class="form_title">出発時間</label>
                    <input type="datetime-local" name="start_time" id="start_time" required>
                </div>
                <div>
                    <label for="starting_point" class="form_title">出発点</label>
                    <input type="text" name="starting_point" id="starting_point" required>
                </div>
            </div>
            <div class="form_item form_date">
                <div>
                    <label for="end_time" class="form_title">到着時間</label>
                    <input type="datetime-local" name="end_time" id="end_time" required>
                </div>
                <div>
                    <label for="end_point" class="form_title">到着点</label>
                    <input type="text" name="end_point" id="end_point" required>
                </div>
            </div>
            <div class="form_reserve">
                <label for="reserve" class="form_title">予約</label>
                <div class="select">
                    <select name="reserve" id="reserve">
                        <option value="already">済</option>
                        <option value="not_yet">未</option>
                        <option value="unnecessary" selected>不要</option>
                    </select>
                </div>
                <input type="text" name="reservation_person" placeholder="予約担当者名">
            </div>
            <div class="form_item">
                <label for="cost" min="0" pattern="^[+-]?([1-9][0-9]*|0)$" class="form_title">費用</label>
                <input type="number" name="cost" id="cost">
            </div>
            <div class="cost_check">
                <input type="checkbox" id="alone">
                <label for="alone" name="alone" class="checkbox_text">一人当たりの金額です</label>
            </div>
            <div class="form_item">
                <label for="remarks" class="form_title">備考</label>
                <textarea cols="40" rows="3" name="remarks" id="remarks"></textarea>
            </div>
            <div class="form_item btns">
                <input type="submit" class="keep_btn" value="保存">
                <a href="schedule.php?id=<?= h($plan_id) ?>" class="cancel_btn">キャンセル</a>
            </div>
        </form>
    </div>
</body>

</html>
