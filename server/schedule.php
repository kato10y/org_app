<?php
require_once __DIR__ . '/common/functions.php';
require_once __DIR__ . '/common/config.php';

/* plan更新処理
---------------------------------------------*/
// index.php から渡された id を受け取る
$id = filter_input(INPUT_GET, 'id');

// 受け取った id のレコードを取得
$trip_plan = find_plans_by_id($id);

// itineraryデータの取得
$itinerary = tying_plan_by_id($id);

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
            <?= h($trip_plan['plan_name']) ?>
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
            <?php foreach ($itinerary as $itinerary) : ?>
                <article class="schedule_wrap">
                    <div class="time"><?= h($itinerary['start_time']) ?> 〜 <?= h($itinerary['end_time']) ?></div>
                    <div class="right_wrap">
                        <div class="reserve_mark unnecessary">
                            <span>予約</span>不要
                        </div>
                        <div class="action_icons schedule_icon">
                            <a href="" class="plan_icon"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="" class="plan_icon"><i class="fa-solid fa-trash-can"></i></a>
                        </div>
                    </div>
                    <details class="plan_detail">
                        <summary class="ellipse"><?= h($itinerary['title']) ?></summary>
                        <!-- moveだったら表示 -->
                        <div class="detail_wrap">
                            <div>出発点</div>
                            <div class="detail_content">大宮</div>
                        </div>
                        <div class="detail_wrap">
                            <div>到着点</div>
                            <div class="detail_content">くりこま高原</div>
                        </div>
                        <!-- actionだったら表示 -->
                        <div class="detail_wrap">
                            <div>場所</div>
                            <div class="detail_content">○○海岸</div>
                        </div>
                        <div class="detail_wrap">
                            <div>予約担当者</div>
                            <div class="detail_content"><?= h($itinerary['reservation_person']) ?></div>
                        </div>
                        <div class="detail_wrap">
                            <div>一人当たりの費用</div>
                            <div class="detail_content"><?= h($itinerary['cost']) ?>円</div>
                        </div>
                        <div class="detail_wrap">
                            <div>備考</div>
                            <div class="detail_content"><?= h($itinerary['remarks']) ?></div>
                        </div>
                    </details>
                </article>
            <?php endforeach; ?>

            <!-- move -->
            <article class="schedule_wrap">
                <div class="time">2022/08/10 17:30 〜 2022/08/10 19:00</div>
                <div class="right_wrap">
                    <div class="reserve_mark unnecessary">
                        <span>予約</span>不要
                    </div>
                    <div class="action_icons schedule_icon">
                        <a href="" class="plan_icon"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="plan_icon"><i class="fa-solid fa-trash-can"></i></a>
                    </div>
                </div>
                <details class="plan_detail">
                    <summary class="ellipse">新幹線で移動</summary>
                    <div class="detail_wrap">
                        <div>出発点</div>
                        <div class="detail_content">大宮</div>
                    </div>
                    <div class="detail_wrap">
                        <div>到着点</div>
                        <div class="detail_content">くりこま高原</div>
                    </div>
                    <div class="detail_wrap">
                        <div>場所</div>
                        <div class="detail_content">○○海岸</div>
                    </div>
                    <div class="detail_wrap">
                        <div>予約担当者</div>
                        <div class="detail_content">なし</div>
                    </div>
                    <div class="detail_wrap">
                        <div>一人当たりの費用</div>
                        <div class="detail_content">600円</div>
                    </div>
                    <div class="detail_wrap">
                        <div>備考</div>
                        <div class="detail_content">確認用確認用確認用確認用確認用確認用確認用確認用確認用確認用確認用確認用確認用確認用確認用</div>
                    </div>
                </details>
            </article>
            <!-- action -->
            <article class="schedule_wrap">
                <div class="time">2022/08/10 15:30 〜 2022/08/10 17:00</div>
                <div class="right_wrap">
                    <div class="reserve_mark already">
                        <span>予約</span>済
                    </div>
                    <div class="action_icons schedule_icon">
                        <a href="" class="plan_icon"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="plan_icon"><i class="fa-solid fa-trash-can"></i></a>
                    </div>
                </div>
                <details class="plan_detail">
                    <summary class="ellipse">こけし作り体験</summary>
                    <div class="detail_wrap">
                        <div>場所</div>
                        <div class="detail_content">○○海岸</div>
                    </div>
                    <div class="detail_wrap">
                        <div>予約担当者</div>
                        <div class="detail_content">大木</div>
                    </div>
                    <div class="detail_wrap">
                        <div>一人当たりの費用</div>
                        <div class="detail_content">10000円</div>
                    </div>
                    <div class="detail_wrap">
                        <div>備考</div>
                        <div class="detail_content">XXXX</div>
                    </div>
                </details>
            </article>
            <!-- lodging -->
            <article class="schedule_wrap">
                <div class="time">2022/08/10 19:00 〜 2022/08/11 10:00</div>
                <div class="right_wrap">
                    <div class="reserve_mark not_yet">
                        <span>予約</span>未
                    </div>
                    <div class="action_icons schedule_icon">
                        <a href="" class="plan_icon"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="plan_icon"><i class="fa-solid fa-trash-can"></i></a>
                    </div>
                </div>
                <details class="plan_detail">
                    <summary class="ellipse">YYYYYホテル宿泊</summary>
                    <div class="detail_wrap">
                        <div>予約担当者</div>
                        <div class="detail_content">鈴木</div>
                    </div>
                    <div class="detail_wrap">
                        <div>一人当たりの費用</div>
                        <div class="detail_content">8000円</div>
                    </div>
                    <div class="detail_wrap">
                        <div>備考</div>
                        <div class="detail_content">XXXX</div>
                    </div>
                </details>
            </article>
        </div>
    </div>
    <div class="overview_wrap">
        <details class="overview">
            <summary>概要</summary>
            <div>
                <p class="mini_o"><?= h($trip_plan['overview']) ?></p>
                <p class="mini_r"><?= h($trip_plan['remarks']) ?></p>
            </div>
        </details>
        <div class="cost_tab">
            <div class="cost_wrap">参加人数<p><?= h($trip_plan['plan_member']) ?>人</p>
            </div>
            <div class="cost_wrap">合計金額<p>10000円</p>
            </div>
            <div class="cost_wrap">１人あたり<p>2000円</p>
            </div>
        </div>
    </div>
</body>
<footer class="footer">
    <div class="footer_flex"><i class="fa-solid fa-suitcase"></i>タビスケ Made by Yukari</div>
</footer>

</html>
