<?php
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/config.php';

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
                <div class="plun_subject">
                    <div class="time">
                        <p>15:30</p>
                        <p>〜</p>
                        <p>17:00</p>
                    </div>
                    <a href="">
                        <i class="fa-solid fa-map"></i>
                        シュノーケリング体験
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
                </div>
                <div class="plan_detail">
                    <div>場所</div>
                    <div>予約担当者</div>
                    <div>一人当たりの費用</div>
                    <div>備考</div>
                </div>
            </article>
            <article class="schedule_wrap">
                <div class="plun_subject">
                    <div class="time">
                        <p>17:30</p>
                        <p>〜</p>
                        <p>19:00</p>
                    </div>
                    <a href="">
                        <i class="fa-solid fa-train-subway"></i>
                        市街地からバスで移動
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
                </div>
                <div class="plan_detail">
                    <div>出発点</div>
                    <div>到着点</div>
                    <div>予約担当者</div>
                    <div>一人当たりの費用</div>
                    <div>備考</div>
                </div>
            </article>
            <article class="schedule_wrap">
                <div class="plun_subject">
                    <div class="time">
                        <p>19:00</p>
                        <p>〜</p>
                        <p>10:00</p>
                    </div>
                    <a href="">
                        <i class="fa-solid fa-bed"></i>
                        宿泊
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
                </div>
                <div class="plan_detail">
                    <div>予約担当者<span>鈴木</span></div>
                    <div>一人当たりの費用<span>8000円</span></div>
                    <div>備考<span>XXXXX</span></div>
                </div>
            </article>
        </div>
    </div>
    <div class="cost_tab">
        <div class="cost_wrap">合計金額<p>10000円</p>
        </div>
        <div class="cost_wrap">１人あたり<p>2000円</p>
        </div>
    </div>
</body>
<footer class="footer">
    <div class="footer_flex"><i class="fa-solid fa-suitcase"></i>タビスケ Made by Yukari</div>
</footer>

</html>
