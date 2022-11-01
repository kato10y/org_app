<?php include_once __DIR__ . '/_head.html' ?>

<body class="form_content">
    <div class="form_wrap">
        <h2 class="form_title">計画登録</h2>
        <form action="" method="post" class="forms">
            <div class="form_item">
                <label for="text">計画名<br>
                    <input type="text">
                </label>
            </div>
            <div class="form_item">
                <label for="text">計画概要<br>
                    <textarea name="計画概要" cols="40" rows="3"></textarea>
                </label>
            </div>
            <div class="form_item form_date">
                <label for="date">開始日<br>
                    <input type="date">
                </label>
                <label for="date">終了日<br>
                    <input type="date">
                </label>
            </div>
            <div class="form_item">
                <label for="number">参加人数<br>
                    <input type="number">
                </label>
            </div>
            <div class="form_item">
                <label for="number">費用<br>
                    <input type="number">
                </label>
            </div>
            <input type="checkbox" name="alone" value="1" checked>一人当たりの金額です
            <div class="form_item">
                <label for="text">備考<br>
                    <textarea name="備考" cols="40" rows="3"></textarea>
                </label>
            </div>
            <button type="submit">保存</button>
            <button type="submit">キャンセル</button>
        </form>
    </div>
</body>
</html>
