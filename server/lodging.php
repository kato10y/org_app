<?php
require_once __DIR__ . '/common/functions.php';
require_once __DIR__ . '/common/config.php';

/* plan更新処理
---------------------------------------------*/
// 初期化
$errors = [];


?>

<!DOCTYPE html>
<html lang="ja">
<?php include_once __DIR__ . '/common/_head.html' ?>

<body class="form_content">
    <div class="form_wrap">
        <h2 class="form_headline"><i class="fa-solid fa-bed"></i>宿泊計画</h2>
        <form action="" method="post" class="forms">
            <div class="form_item">
                <label for="lodging_place" class="form_title">宿泊場所</label>
                <input type="text" name="place" id="lodging_place" required>
            </div>
            <div class="form_item form_date">
                <div>
                    <label for="check_in" class="form_title">チェックイン</label>
                    <input type="datetime-local" name="start_time" id="check_in" required>
                </div>
                <div>
                    <label for="check_out" class="form_title">チェックアウト</label>
                    <input type="datetime-local" name="end_time" id="check_out" required>
                </div>
            </div>
            <div class="form_reserve">
                <label for="reserve" class="form_title">予約</label>
                <div class="select">
                    <select name="reserve" id="reserve">
                        <option value="1">済</option>
                        <option value="0">未</option>
                        <option value="2" selected>不要</option>
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
                <textarea cols="40" rows="3" id="remarks"></textarea>
            </div>
            <div class="form_item btns">
                <input type="submit" class="keep_btn" value="保存">
                <a href="" class="cancel_btn">キャンセル</a>
            </div>
        </form>
    </div>
</body>

</html>
