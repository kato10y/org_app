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
            計画タイトル(沖縄旅行)
        </h2>
        <ul class="icons_wrap">
            <li>
                <a href="move.php" class="icon_wrap">
                    <i class="fa-solid fa-train-subway"></i>
                    <p>移動</p>
                </a>
            </li>
            <li>
                <a href="action.php" class="icon_wrap">
                    <i class="fa-solid fa-map"></i>
                    <p>行動</p>
                </a>
            </li>
            <li>
                <a href="lodging.php" class="icon_wrap">
                    <i class="fa-solid fa-bed"></i>
                    <p>宿泊</p>
                </a>
            </li>
        </ul>
    </div>
    <div class="main_content">
        <div class="schedules">
            <article class="schedule_wrap">
                <div class="time">
                    <p>13:30</p>
                    <p>〜</p>
                    <p>15:00</p>
                </div>
                <a href="">
                    行動内容（シュノーケリング体験）
                </a>
                <div class="right_wrap">
                    <div class="reserve_mark already">
                        <p>予約</p>済
                    </div>
                    <div class="action_icons">
                        <a href="" class="plan_icon"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="plan_icon"><i class="fa-solid fa-trash-can"></i></a>
                    </div>
                </div>
            </article>
                        <article class="schedule_wrap">
                <div class="time">
                    <p>16:30</p>
                    <p>〜</p>
                    <p>18:00</p>
                </div>
                <a href="">
                    移動（バス）
                </a>
                <div class="right_wrap">
                    <div class="reserve_mark not_yet">
                        <p>予約</p>未
                    </div>
                    <div class="action_icons">
                        <a href="" class="plan_icon"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="plan_icon"><i class="fa-solid fa-trash-can"></i></a>
                    </div>
                </div>
            </article>
            </article>
                        <article class="schedule_wrap">
                <div class="time">
                    <p>18:00</p>
                    <p>〜</p>
                    <p>19:00</p>
                </div>
                <a href="">
                    ご飯
                </a>
                <div class="right_wrap">
                    <div class="reserve_mark unnecessary">
                        <p>予約</p>不要
                    </div>
                    <div class="action_icons">
                        <a href="" class="plan_icon"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="plan_icon"><i class="fa-solid fa-trash-can"></i></a>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <div class="cost_tab">
        <div class="cost_wrap">合計金額<p>10000円</p></div>
        <div class="cost_wrap">１人あたり<p>2000円</p></div>
    </div>
</body>
<footer class="footer">
    <div class="footer_flex"><i class="fa-solid fa-suitcase"></i>タビスケ Made by Yukari</div>
</footer>
</html>
