<?php include_once __DIR__ . '/_head.html' ?>

<body class="form_content">
    <div class="form_wrap">
        <h2 class="form_headline">計画登録</h2>
        <form action="" method="post" class="forms">
            <div class="form_item">
                <label for="text" class="form_title">計画名</label>
                <input type="text">
            </div>
            <div class="form_item">
                <label for="text" class="form_title">計画概要</label>
                <textarea name="計画概要" cols="40" rows="3"></textarea>
            </div>
            <div class="form_item form_date">
                <div>
                    <label for="date" class="form_title">開始日</label>
                    <input type="date">
                </div>
                <div>
                    <label for="date" class="form_title">終了日</label>
                    <input type="date">
                </div>
            </div>
            <div class="form_item">
                <label for="number" min="0" pattern="^[+-]?([1-9][0-9]*|0)$" class="form_title">参加人数</label>
                <input type="number">
            </div>
            <div class="form_item">
                <label for="number" min="0" pattern="^[+-]?([1-9][0-9]*|0)$" class="form_title">費用</label>
                <input type="number">
            </div>
            <input type="checkbox" name="alone" value="1" checked>一人当たりの金額です
            <div class="form_item">
                <label for="text" class="form_title">備考</label>
                <textarea name="備考" cols="40" rows="3"></textarea>
            </div>
            <button type="submit">保存</button>
            <button type="submit">キャンセル</button>
        </form>
    </div>
</body>
</html>
