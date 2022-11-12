<?php
require_once __DIR__ . '/functions.php';
// データベースに接続
$dbh = connect_db();
?>

<!DOCTYPE html>
<html lang="ja">
<?php include_once __DIR__ . '/_head.html' ?>

<body>
    <header class="home_header">
        <h1>
            <a href="index.php" class="logo_link">
                <i class="fa-solid fa-suitcase"></i>
                <span>タビスケ</span>
            </a>
        </h1>
    </header>
    <div class="second_header">
        <h2>
            計画一覧
        </h2>
        <ul class="icons_wrap">
            <li>
                <a href="plan.php" class="icon_wrap">
                    <i class="fa-solid fa-square-plus"></i>
                    <p>追加</p>
                </a>
            </li>
        </ul>
    </div>
    <div class="main_content">
        <div class="plans">
            <article class="plan_wrap">
                <a href="" class="plan_list">
                    <p class="plan_day">2022/12/25〜2023/01/02</p>
                    <p>計画タイトル</p>
                </a>
                <div class="action_icons">
                    <a href="" class="plan_icon"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="" class="plan_icon"><i class="fa-solid fa-trash-can"></i></a>
                </div>
            </article>
            <article class="plan_wrap">
                <a href="" class="plan_list">
                    <p class="plan_day">2022/12/25〜2023/01/02</p>
                    <p>計画タイトル</p>
                </a>
                <div class="action_icons">
                    <a href="" class="plan_icon"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="" class="plan_icon"><i class="fa-solid fa-trash-can"></i></a>
                </div>
            </article>
            <article class="plan_wrap">
                <a href="" class="plan_list">
                    <p class="plan_day">2022/12/25〜2023/01/02</p>
                    <p>計画タイトル</p>
                </a>
                <div class="action_icons">
                    <a href="" class="plan_icon"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="" class="plan_icon"><i class="fa-solid fa-trash-can"></i></a>
                </div>
            </article>
        </div>
    </div>
</body>
<footer class="footer">
    <div class="footer_flex"><i class="fa-solid fa-suitcase"></i>タビスケ Made by Yukari</div>
</footer>
</html>
