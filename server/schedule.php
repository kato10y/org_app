<?php
require_once __DIR__ . '/common/functions.php';
require_once __DIR__ . '/common/config.php';

/* データの表示
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
            <?php foreach ($itinerary as $itineraries) : ?>
                <article class="schedule_wrap">
                    <div class="time"><?= h($itineraries['start_time']) ?> 〜 <?= h($itineraries['end_time']) ?></div>
                    <div class="right_wrap">
                        <div class="reserve_mark <?= h($itineraries['reserve']) ?>">
                            <span>予約</span>
                            <?php if ($itineraries['reserve'] == 'already')echo '済'; elseif ($itineraries['reserve'] == 'not_yet') echo '未'; else echo'不要'; ?>
                        </div>
                        <div class="action_icons schedule_icon">
                            <a href="" class="plan_icon"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="" class="plan_icon"><i class="fa-solid fa-trash-can"></i></a>
                        </div>
                    </div>
                    <details class="plan_detail">
                        <summary class="ellipse"><?= h($itineraries['title']) ?></summary>
                        <!-- moveだったら表示 -->
                            <div class="detail_wrap point_<?= h($itineraries['identifier']) ?>">
                                <div>出発点</div>
                                <div class="detail_content">
                                    <?php if ($itineraries['identifier'] == 'move') echo $itineraries['starting_point']; ?>
                                </div>
                            </div>
                            <div class="detail_wrap point_<?= h($itineraries['identifier']) ?>">
                                <div>到着点</div>
                                <div class="detail_content">
                                    <?php if ($itineraries['identifier'] == 'move') echo $itineraries['end_point']; ?>
                                </div>
                            </div>
                        <!-- actionだったら表示 -->
                        <div class="detail_wrap place_<?= h($itineraries['identifier']) ?>">
                            <div>場所</div>
                            <div class="detail_content">
                                <?php if ($itineraries['identifier'] == 'action') echo $itineraries['place']; ?>
                            </div>
                        </div>
                        <div class="detail_wrap">
                            <div>予約担当者</div>
                            <div class="detail_content"><?= h($itineraries['reservation_person']) ?></div>
                        </div>
                        <div class="detail_wrap">
                            <div>一人当たりの費用</div>
                            <div class="detail_content"><?= h($itineraries['cost']) ?>円</div>
                        </div>
                        <div class="detail_wrap">
                            <div>備考</div>
                            <div class="detail_content"><?= h($itineraries['remarks']) ?></div>
                        </div>
                    </details>
                </article>
            <?php endforeach; ?>
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
            <div class="cost_wrap">合計金額
                <p>10000円</p>
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
