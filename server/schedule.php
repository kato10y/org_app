<?php
require_once __DIR__ . '/common/functions.php';
require_once __DIR__ . '/common/config.php';

?>

<!DOCTYPE html>
<html lang="ja">
<?php include_once __DIR__ . '/common/_head.html' ?>

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
                    <label for="detail-box" class="ellipse">
                        <i class="fa-solid fa-map"></i>
                        シュノーケリング体験
                    </label>
                    <input type="checkbox" value="" id="detail-box">
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
                    <div class="detail_wrap">
                        <div>場所</div><div class="detail_content">○○海岸</div>
                    </div>
                    <div class="detail_wrap">
                        <div>予約担当者</div><div class="detail_content">大木</div>
                    </div>
                    <div class="detail_wrap">
                        <div>一人当たりの費用</div><div class="detail_content">10000円</div>
                    </div>
                    <div class="detail_wrap">
                        <div>備考</div><div class="detail_content">XXXX</div>
                    </div>
                </div>
            </article>
            <article class="schedule_wrap">
                <div class="plun_subject">
                    <div class="time">
                        <p>17:30</p>
                        <p>〜</p>
                        <p>19:00</p>
                    </div>
                    <label for="detail-box" class="ellipse">
                        <i class="fa-solid fa-train-subway"></i>
                        市街地からバスで移動
                    </label>
                    <input type="checkbox" value="" id="detail-box">
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
                    <div class="detail_wrap">
                        <div>出発点</div><div class="detail_content">那覇</div>
                    </div>
                    <div class="detail_wrap">
                        <div>到着点</div><div class="detail_content">石垣</div>
                    </div>
                    <div class="detail_wrap">
                        <div>予約担当者</div><div class="detail_content">なし</div>
                    </div>
                    <div class="detail_wrap">
                        <div>一人当たりの費用</div><div class="detail_content">600円</div>
                    </div>
                    <div class="detail_wrap">
                        <div>備考</div><div class="detail_content">XXXX</div>
                </div>
            </article>
            <article class="schedule_wrap">
                <div class="plun_subject">
                    <div class="time">
                        <p><span>2022/08/10</span> 19:00</p>
                        <p>〜</p>
                        <p>2022/08/11 10:00</p>
                    </div>
                    <label for="detail-box" class="ellipse">
                        <i class="fa-solid fa-bed"></i>
                        YYYYYホテル宿泊
                    </label>
                    <input type="checkbox" value="" id="detail-box">
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
                    <div class="detail_wrap">
                        <div>予約担当者</div><div class="detail_content">鈴木</div>
                    </div>
                    <div class="detail_wrap">
                        <div>一人当たりの費用</div><div class="detail_content">8000円</div>
                    </div>
                    <div class="detail_wrap">
                        <div>備考</div><div class="detail_content">XXXX</div>
                    </div>
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
