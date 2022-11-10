<?php include_once __DIR__ . '/_head.html' ?>

<body class="form_content">
    <div class="form_wrap">
        <h2 class="form_headline">移動計画</h2>
        <form action="" method="post" class="forms">
            <div class="form_item">
                <label for="text" class="form_title">移動手段</label>
                <input type="text" name="transportation" required>
            </div>
            <div class="form_item form_date">
                <div>
                    <label for="datetime-local" class="form_title">出発時間</label>
                    <input type="datetime-local" name="start_date" required>
                </div>
                <div>
                    <label for="text" class="form_title">出発点</label>
                    <input type="text" name="starting_point" required>
                </div>
            </div>
            <div class="form_item form_date">
                <div>
                    <label for="datetime-local" class="form_title">到着時間</label>
                    <input type="datetime-local" name="end_date" required>
                </div>
                <div>
                    <label for="text" class="form_title">到着点</label>
                    <input type="text" name="end_point" required>
                </div>
            </div>
            <div class="form_reserve">
                <label for="reserve" class="form_title">予約</label>
                <div class="select">
                <select name="reserve">
                    <option value="" selected>選択</option>
                    <option value="済">済</option>
                    <option value="未">未</option>
                    <option value="不要">不要</option>
                </select>
                </div>
                <input type="text" name="reservation_person" placeholder="予約担当者名">
            </div>
            <div class="form_item">
                <label for="number" min="0" pattern="^[+-]?([1-9][0-9]*|0)$" class="form_title">費用</label>
                <input type="number" name="cost">
            </div>
            <div class="cost_check">
                <input type="checkbox" id="check">
                <label for="check" name="alone" class="checkbox_text">一人当たりの金額です</label>
            </div>
            <div class="form_item">
                <label for="text" class="form_title">備考</label>
                <textarea cols="40" rows="3"></textarea>
            </div>
            <div class="form_item btns">
                <input type="submit" class="keep_btn" value="保存">
                <input type="submit" class="cancel_btn" value="キャンセル">
            </div>
        </form>
    </div>
</body>

</html>